<?php
if (!empty($_POST["btnregistrar"])) { //si presiona el boton
    if (
        !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"])
        and !empty($_POST["especialidad"]) and !empty($_POST["matricula"])
    ) {


        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $especialidad = $_POST["especialidad"];
        $matricula = $_POST["matricula"];

        $sql=$conexion->query("INSERT INTO medico (nombre, apellido, dni, especialidad, matricula) values('$nombre','$apellido', '$dni', '$especialidad', '$matricula' )");

    } else {
        echo "algun campo esta vacios";
    }
}

$idSeleccionado = isset($_POST['txtID']) ? $_POST['txtID'] : 0; // Usar 0 como valor predeterminado o algún valor que indique que no hay ID seleccionado.
$registroSeleccionado = seleccionarRegistro($idSeleccionado);

$id_usuario = isset($registroSeleccionado) ? $registroSeleccionado->id : '';
$nombre = isset($registroSeleccionado) ? $registroSeleccionado->nombre : '';
$apellido = isset($registroSeleccionado) ? $registroSeleccionado->apellido : '';
$dni = isset($registroSeleccionado) ? $registroSeleccionado->dni : '';
$especialidad = isset($registroSeleccionado) ? $registroSeleccionado->especialidad : '';
$matricula = isset($registroSeleccionado) ? $registroSeleccionado->matricula : '';


function seleccionarRegistro($id)
{
    global $conexion;
    $result = $conexion->query("SELECT * FROM medico WHERE id = $id");
    return $result->fetch_object();
}

if (!empty($_POST["accion"])) {
        $id_usuario = $_POST["id_usuario"]; // Add this line to get the ID
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $especialidad = $_POST["especialidad"];
        $matricula = $_POST["matricula"];

        // Use prepared statement to avoid SQL injection
        $stmt = $conexion->prepare("UPDATE medico SET nombre=?, apellido=?, dni=?, especialidad=?, matricula=? WHERE id=?");
        $stmt->bind_param("sssssi", $nombre, $apellido, $dni, $especialidad, $matricula, $id_usuario);
        $stmt->execute();
        $stmt->close();
        header("Location:../vista/medico.php");
        exit();
    } 

    if (!empty($_POST["accion3"])) {
        $id_eliminar = $_POST["id_usuario"];
        $sql_eliminar = $conexion->query("DELETE FROM medico WHERE id = $id_eliminar");
        // Redirecciona al usuario a la misma página para limpiar los campos
        header("Location: ../vista/medico.php");
        exit();
    }
?>