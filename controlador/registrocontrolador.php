<?php
include "../modelo/conexion.php";

if (!empty($_POST["btnregistrar"])) { //si presiona el boton
    if (
        !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"])
        and !empty($_POST["fecha"]) and !empty($_POST["correo"])
    ) {


        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo) values('$nombre','$apellido', '$dni', '$fecha', '$correo' )");
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
$fecha_nac = isset($registroSeleccionado) ? $registroSeleccionado->fecha_nac : '';
$correo = isset($registroSeleccionado) ? $registroSeleccionado->correo : '';


function seleccionarRegistro($id)
{
    global $conexion;
    $result = $conexion->query("SELECT * FROM persona WHERE id = $id");
    return $result->fetch_object();
}

if (!empty($_POST["accion"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        $id_usuario = $_POST["id_usuario"]; // Add this line to get the ID

        // Use prepared statement to avoid SQL injection
        $stmt = $conexion->prepare("UPDATE persona SET nombre=?, apellido=?, dni=?, fecha_nac=?, correo=? WHERE id=?");
        $stmt->bind_param("sssssi", $nombre, $apellido, $dni, $fecha, $correo, $id_usuario);
        $stmt->execute();
        $stmt->close();
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } 

    if (!empty($_POST["accion3"])) {
        $id_eliminar = $_POST["id_usuario_eliminar"];
        $sql_eliminar = $conexion->query("DELETE FROM persona WHERE id = $id_eliminar");
        // Redirecciona al usuario a la misma página para limpiar los campos
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
?>