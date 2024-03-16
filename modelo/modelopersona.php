<?php
// persona_modelo.php
include "conexion.php";

function insertarPersona($nombre, $apellido, $dni, $fecha, $correo) {
    global $conexion;
    $stmt = $conexion->prepare("INSERT INTO persona (nombre, apellido, dni, fecha_nac, correo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $apellido, $dni, $fecha, $correo);
    $stmt->execute();
    $stmt->close();
}

function obtenerPersonas() {
    global $conexion;
    $result = $conexion->query("SELECT * FROM persona");
    $personas = [];
    while ($datos = $result->fetch_object()) {
        $personas[] = $datos;
    }
    return $personas;
}

function seleccionarPersona($id) {
    global $conexion;
    $result = $conexion->query("SELECT * FROM persona WHERE id = $id");
    return $result->fetch_object();
}

function actualizarPersona($id, $nombre, $apellido, $dni, $fecha, $correo) {
    global $conexion;
    $stmt = $conexion->prepare("UPDATE persona SET nombre=?, apellido=?, dni=?, fecha_nac=?, correo=? WHERE id=?");
    $stmt->bind_param("sssssi", $nombre, $apellido, $dni, $fecha, $correo, $id);
    $stmt->execute();
    $stmt->close();
}

function eliminarPersona($id) {
    global $conexion;
    $conexion->query("DELETE FROM persona WHERE id = $id");
}
?>
