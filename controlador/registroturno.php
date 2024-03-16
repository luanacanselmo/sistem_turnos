<?php
include "../modelo/modeloturno.php";
//si no esta vacia la variable 
if (!empty($_POST["btnregistrar"])) {
    $mensaje = registrarTurno($_POST["matricula"], $_POST["docpaciente"], $_POST["fecha_turno"], $_POST["hora"], $_POST["sala"]);
    echo $mensaje;
}


//si una variable está definida y no es nula
$idSeleccionado = isset($_POST['txtID']) ? $_POST['txtID'] : 0;
$registroSeleccionado = seleccionarTurno($idSeleccionado);
$id_usuario = isset($registroSeleccionado) ? $registroSeleccionado->id : '';
$fecha_turno = isset($registroSeleccionado) ? $registroSeleccionado->fecha_turno : '';
$hora = isset($registroSeleccionado) ? $registroSeleccionado->hora : '';
$sala = isset($registroSeleccionado) ? $registroSeleccionado->sala : '';
$matricula_doctor = isset($registroSeleccionado) ? $registroSeleccionado->matricula_doctor : '';
$docpaciente = isset($registroSeleccionado) ? $registroSeleccionado->docpaciente : '';
$nombre_doctor = isset($registroSeleccionado) ? $registroSeleccionado->nombre_doctor : '';
$apellido_doctor = isset($registroSeleccionado) ? $registroSeleccionado->apellido_doctor : '';
$nombre_paciente = isset($registroSeleccionado) ? $registroSeleccionado->nombre_paciente : '';
$apellido_paciente = isset($registroSeleccionado) ? $registroSeleccionado->apellido_paciente : '';
$especialidad = isset($registroSeleccionado) ? $registroSeleccionado->especialidad : '';

if (!empty($_POST["accion"])) {
    $mensaje = modificarTurno($_POST["matricula"], $_POST["docpaciente"], $_POST["fecha_turno"], $_POST["hora"], $_POST["sala"], $_POST["id_usuario"]);
    echo $mensaje;
    header("Location:../vista/turno.php");
    exit();
}

if (!empty($_POST["accion3"])) {
    $mensaje = eliminarTurno($_POST["id_usuario"]);
    echo $mensaje;
    header("Location:../vista/turno.php");
    exit();
}
?>
