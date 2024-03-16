<?php
include "conexion.php";

function registrarTurno($matricula, $docpaciente, $fecha_turno, $hora, $sala)
{
    global $conexion;

    $sqlDoctor = $conexion->query("SELECT id FROM medico WHERE matricula = '$matricula'");
    $datosDoctor = $sqlDoctor->fetch_object();
    $id_medico = $datosDoctor ? $datosDoctor->id : null;
    //si encuentra el id guarda la info del medico.accede a la propiedad id 

    $sqlPaciente = $conexion->query("SELECT id FROM persona WHERE dni = '$docpaciente'");
    $datosPaciente = $sqlPaciente->fetch_object();
    $id_paciente = $datosPaciente ? $datosPaciente->id : null;

    if ($id_medico !== null && $id_paciente !== null) {
        $stmtInsert = $conexion->prepare("INSERT INTO turno (id_medico, id_paciente, fecha_turno, hora, sala) VALUES (?, ?, ?, ?, ?)");
        $stmtInsert->bind_param("sssss", $id_medico, $id_paciente, $fecha_turno, $hora, $sala);
        $stmtInsert->execute();
        $stmtInsert->close();

        return "Turno registrado con éxito.";
    } else {
        return "No se encontró el médico o el paciente con los datos proporcionados.";
    }
}

function seleccionarTurno($id)
{
    global $conexion;

    $result = $conexion->query("SELECT t.*, d.matricula as matricula_doctor, d.especialidad as especialidad, d.nombre as nombre_doctor, d.apellido as apellido_doctor, p.dni as docpaciente, p.nombre as nombre_paciente, p.apellido as apellido_paciente 
                                FROM turno t
                                INNER JOIN medico d ON t.id_medico = d.id
                                INNER JOIN persona p ON t.id_paciente = p.id
                                WHERE t.id = $id");

    return $result->fetch_object();
}

function modificarTurno($matricula, $docpaciente, $fecha_turno, $hora, $sala, $id_usuario)
{
    global $conexion;

    $sqlDoctor = $conexion->query("SELECT id FROM medico WHERE matricula = '$matricula'");
    $datosDoctor = $sqlDoctor->fetch_object();
    $id_medico = $datosDoctor ? $datosDoctor->id : null;

    $sqlPaciente = $conexion->query("SELECT id FROM persona WHERE dni = '$docpaciente'");
    $datosPaciente = $sqlPaciente->fetch_object();
    $id_paciente = $datosPaciente ? $datosPaciente->id : null;

    if ($id_medico !== null && $id_paciente !== null) {
        $stmt = $conexion->prepare("UPDATE turno SET id_medico=?, id_paciente=?, fecha_turno=?, hora=?, sala=? WHERE id=?");
        $stmt->bind_param("sssssi", $id_medico, $id_paciente, $fecha_turno, $hora, $sala, $id_usuario);
        $stmt->execute();
        $stmt->close();

        return "Turno modificado con éxito.";
    } else {
        return "No se encontró el médico o el paciente con los datos proporcionados.";
    }
}

function eliminarTurno($id_eliminar)
{
    global $conexion;

    $stmt = $conexion->prepare("DELETE FROM turno WHERE id = ?");
    $stmt->bind_param("i", $id_eliminar);
    $stmt->execute();
    $stmt->close();

    return "Turno eliminado con éxito.";
}
