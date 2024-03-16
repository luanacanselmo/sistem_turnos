<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    // La función session_status() devuelve el estado de la sesión. 
    //PHP_SESSION_NONE indica que no hay ninguna sesión activa.
}
if ($_SESSION["autentificado"] != "1") {
    header("location: ../vista/login.php");
    exit();
}
