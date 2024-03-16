<?php
// controlador/registromedico.php
include "../modelo/modelomedico.php";

if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"])
        and !empty($_POST["especialidad"]) and !empty($_POST["matricula"])
    ) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $especialidad = $_POST["especialidad"];
        $matricula = $_POST["matricula"];

        insertarMedico($nombre, $apellido, $dni, $especialidad, $matricula);
    } else {
        echo "Algun campo está vacío";
    }
}

$idSeleccionado = isset($_POST['txtID']) ? $_POST['txtID'] : 0;
$registroSeleccionado = seleccionarMedico($idSeleccionado);

$id_usuario = isset($registroSeleccionado) ? $registroSeleccionado->id : '';
$nombre = isset($registroSeleccionado) ? $registroSeleccionado->nombre : '';
$apellido = isset($registroSeleccionado) ? $registroSeleccionado->apellido : '';
$dni = isset($registroSeleccionado) ? $registroSeleccionado->dni : '';
$especialidad = isset($registroSeleccionado) ? $registroSeleccionado->especialidad : '';
$matricula = isset($registroSeleccionado) ? $registroSeleccionado->matricula : '';

if (!empty($_POST["accion"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $especialidad = $_POST["especialidad"];
    $matricula = $_POST["matricula"];
    $id_usuario = $_POST["id_usuario"];

    actualizarMedico($id_usuario, $nombre, $apellido, $dni, $especialidad, $matricula);
    header("Location: ../vista/medico.php");
    exit();
} 

if (!empty($_POST["accion3"])) {
    $id_eliminar = $_POST["id_usuario"];
    eliminarMedico($id_eliminar);
    header("Location: ../vista/medico.php");
    exit();
}
?>
