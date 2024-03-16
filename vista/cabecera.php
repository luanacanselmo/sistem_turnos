<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio Web</title>
  <link rel="stylesheet" href="vista/css/pie.css" />
  <link rel="stylesheet" href="vista/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=PT+Sans&family=Quicksand&display=swap" rel="stylesheet">
<style>
  </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: beige; padding: 10px;">
    <a class="navbar-brand logo" ><img src="vista/CLINICA-removebg-preview.png" style="height: 100px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>

            <?php
            // Verificar si el usuario ha iniciado sesión
            if (isset($_SESSION['user'])) {
                // Si ha iniciado sesión, mostrar el enlace "Turnos"
                echo '<li class="nav-item"><a class="nav-link" href="vista/sacarturno.php">Turnos</a></li>';
            } else {
                // Si no ha iniciado sesión
                echo '<li class="nav-item"><a class="nav-link" href="vista/login.php">Turnos</a></li>';
            }
            ?>
            
            <?php
                // Verificar si el usuario ha iniciado sesión
                if (isset($_SESSION['user'])) {
                    // Si ha iniciado sesión, mostrar el enlace "Cerrar sesión"
                    echo '<li class="nav-item nav-link-end"><a class="nav-link" href="vista/salir.php">Cerrar sesión</a></li>';
                }?>
            <li class="nav-item nav-link-end">
                <p class="nav-link"><?php echo isset($_SESSION['user']) ? $_SESSION['user'] : ''; ?></p>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="vista/login.php"><i class="fa-solid fa-user"></i></a>
            </li>
        </ul>
    </div>
</nav>

  <div class="container">
    <br />
    <div class="row"></div>
  </div>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Arapey&display=swap');

    nav {
      color: black;
      background-color: rgba(191, 58, 76, 0.89);
      font-size: 20px;
    }

    .logo {
      font-family: 'Arapey', sans-serif;
      font-size: 30px;
      margin-right: 20px;
    }

    
  </style>

</html>
