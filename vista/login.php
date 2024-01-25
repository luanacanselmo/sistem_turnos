<?php
include("../controlador/verificacion.php");

?>
<!doctype html>
<html lang="en">

<head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ccc;
        }

        .login-form {
            width: 300px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background: #8e2de2;
            border: none;
        }

        .btn-primary:hover {
            background: black;
        }

        .alert {
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <div class="login-form">



        <h2>Login</h2>
        <form action="../controlador/control.php" method="post" class="form" id="form">
            <div class="form-group">
                <input class="form-control" type="text" name="usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="contrasena" placeholder="Contraseña">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" name="submit" value="Entrar" class="btn btn-primary" id="entrar">Acceder</button>
            </div>
        </form>

    </div>

   
</body>

</html>