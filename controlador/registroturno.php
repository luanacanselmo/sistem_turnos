

<?php
include "../modelo/conexion.php";
if (!empty($_POST["btnregistrar"])) { // si se presiona el botón
    if (
        !empty($_POST["matricula"]) and !empty($_POST["docpaciente"]) and !empty($_POST["fecha_turno"])
        and !empty($_POST["hora"]) and !empty($_POST["sala"])
    ) {

        $medico = $_POST["matricula"];
        $paciente = $_POST["docpaciente"];
        $turno = $_POST["fecha_turno"];
        $hora = $_POST["hora"];
        $sala = $_POST["sala"];

        // Obtener el ID del doctor usando la matrícula
        $sqlDoctor = $conexion->query("SELECT id FROM medico WHERE matricula = '$medico'");
        $datosDoctor = $sqlDoctor->fetch_object();

        if ($datosDoctor) {
            $id_medico = $datosDoctor->id;

            // Obtener el ID del paciente usando el DNI
            $sqlPaciente = $conexion->query("SELECT id FROM persona WHERE dni = '$paciente'");
            $datosPaciente = $sqlPaciente->fetch_object();

            if ($datosPaciente) {
                $id_paciente = $datosPaciente->id;

                // Insertar en la tabla de turno
                $stmtInsert = $conexion->prepare("INSERT INTO turno (id_medico, id_paciente, fecha_turno, hora, sala) VALUES (?, ?, ?, ?, ?)");
                $stmtInsert->bind_param("sssss", $id_medico, $id_paciente, $turno, $hora, $sala);
                $stmtInsert->execute();
                $stmtInsert->close();

                // Mostrar mensaje de éxito
                echo "Turno registrado con éxito.";
            } else {
                echo "No se encontró el paciente con el DNI proporcionado.";
            }
        } else {
            echo "No se encontró el médico con la matrícula proporcionada.";
        }
    } else {
        echo "Algun campo está vacío.";
    }
}




$idSeleccionado = isset($_POST['txtID']) ? $_POST['txtID'] : 0;
$registroSeleccionado = seleccionarRegistro($idSeleccionado);

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

function seleccionarRegistro($id)
{
    global $conexion;
    $result = $conexion->query("SELECT t.*, d.matricula as matricula_doctor,d.especialidad as especialidad, d.nombre as nombre_doctor, d.apellido as apellido_doctor, p.dni as docpaciente, p.nombre as nombre_paciente, p.apellido as apellido_paciente 
FROM turno t
INNER JOIN medico d ON t.id_medico = d.id
INNER JOIN persona p ON t.id_paciente = p.id
WHERE t.id = $id");
    return $result->fetch_object();
}


if (!empty($_POST["accion"])) {
    $matricula = $_POST["matricula"];
    $docpaciente = $_POST["docpaciente"];
    $fecha_turno = $_POST["fecha_turno"];
    $hora = $_POST["hora"];
    $sala = $_POST["sala"];
    $id_usuario = $_POST["id_usuario"];

    // Get the ID of the doctor using the provided matricula
    $sqlDoctor = $conexion->query("SELECT id FROM medico WHERE matricula = '$matricula'");
    $datosDoctor = $sqlDoctor->fetch_object();
    $id_medico = $datosDoctor ? $datosDoctor->id : null;

    // Get the ID of the patient using the provided dni
    $sqlPaciente = $conexion->query("SELECT id FROM persona WHERE dni = '$docpaciente'");
    $datosPaciente = $sqlPaciente->fetch_object();
    $id_paciente = $datosPaciente ? $datosPaciente->id : null;

    if ($id_medico !== null && $id_paciente !== null) {
        // Use prepared statement to avoid SQL injection
        $stmt = $conexion->prepare("UPDATE turno SET id_medico=?, id_paciente=?, fecha_turno=?, hora=?, sala=? WHERE id=?");
        $stmt->bind_param("sssssi", $id_medico, $id_paciente, $fecha_turno, $hora, $sala, $id_usuario);
        $stmt->execute();
        $stmt->close();
        header("Location:../vista/turno.php");
        exit();
    } else {
        echo "No se encontró el médico o el paciente con los datos proporcionados.";
    }
}




if (!empty($_POST["accion3"])) {
    $id_eliminar = $_POST["id_usuario"];

    // Use prepared statement to avoid SQL injection
    $stmt = $conexion->prepare("DELETE FROM turno WHERE id = ?");
    $stmt->bind_param("i", $id_eliminar);
    $stmt->execute();
    $stmt->close();

    // Redirecciona al usuario a la misma página para limpiar los campos
    header("Location: ../vista/turno.php");
    exit();
}


?>
