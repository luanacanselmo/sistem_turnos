<?php session_start();

include("../modelo/conexion.php");
include("./controlador/seguridad.php");

$usuario_valido = false;

foreach ($usuarios as $usuario) {
    if ($_POST["usuario"] == $usuario['usuario'] && $_POST["contrasena"] == $usuario['password']) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["user"] = $_POST["usuario"];
        $_SESSION["pass"] = $_POST["contrasena"];
        
        if ($usuario['roll'] == '1') {
            header("location: ../vista/inicio.php");
        } elseif ($usuario['roll'] == '2') {
            header("location: ../index.php");
        }
        
        
        $usuario_valido = true;
        break;
    }
}
if (!$usuario_valido) {
     header("location: ../index.php?errorusuario=si");
 }

?>