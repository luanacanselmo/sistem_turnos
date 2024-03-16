<?PHP
session_start();
session_destroy();
?>
<html>

<head>
    <title>Fin de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Gracias por tu acceso…</h1>
                <a href="../index.php" class="btn btn-primary">Ir a la Página de Inicio</a>
            </div>
        </div>
    </div>
</body>

</html>