<?php
// medico_modelo.php
include "conexion.php";

function insertarMedico($nombre, $apellido, $dni, $especialidad, $matricula) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO medico (nombre, apellido, dni, especialidad, matricula) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $apellido, $dni, $especialidad, $matricula);
    $stmt->execute();
    $stmt->close();
}

// function obtenerMedicos() {
//     global $conexion;
//     $result = $conexion->query("SELECT * FROM medico");
//     $medicos = [];
//     while ($datos = $result->fetch_object()) {
//         $medicos[] = $datos;
//     }
//     return $medicos;
// }

function seleccionarMedico($id) {
    global $conexion;
    $result = $conexion->query("SELECT * FROM medico WHERE id = $id");
    return $result->fetch_object();
}

function actualizarMedico($id, $nombre, $apellido, $dni, $especialidad, $matricula) {
    global $conexion;
    $stmt = $conexion->prepare("UPDATE medico SET nombre=?, apellido=?, dni=?, especialidad=?, matricula=? WHERE id=?");
    $stmt->bind_param("sssssi", $nombre, $apellido, $dni, $especialidad, $matricula, $id);
    $stmt->execute();
    $stmt->close();
}

function eliminarMedico($id) {
    global $conexion;
    $conexion->query("DELETE FROM medico WHERE id = $id");
}
?>
