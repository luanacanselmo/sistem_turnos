<?php session_start();

include("../modelo/conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];
$roll = 2;

mysqli_query($conexion, "insert into usuarios (usuario,password,roll) values
('$usuario','$password','$roll')");

//Al usar mysqli_query, debes proporcionar dos argumentos: la conexión a la base de datos y 

header("location: ../vista/login.php");
exit();
// Detiene la ejecución del script inmediatamente después de redirigir al usuario

mysqli_close($conexion);