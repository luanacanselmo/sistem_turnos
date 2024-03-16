<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Clínica</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/pie.css" />
</head>

<body>
    <?php include("cabecera.php"); ?>
<div class="texto">
    <p>Coloca tus datos para poder sacar un turno con tu preferencia horaria, luego nos estaremos comunicando para darte el día y horario.</p>

</div>
    <section class="contacto" id="contacto">
        <div class="contenedor-contacto">
            <h2>Contacto</h2>
            <div class="fila">
                <div class="col">
                    <div class="info">
                        <h3>Email</h3>
                        <p>clinica@gmail.com</p>
                    </div>
                    <div class="info">
                        <h3>Teléfono</h3>
                        <p>2617142180</p>
                    </div>
                    <div class="info">
                        <h3>País</h3>
                        <p>Argentina</p>
                    </div>
                    <div class="info">
                        <h3>Ciudad</h3>
                        <p>Mendoza</p>
                    </div>
                </div>

                <div class="col">
                <form action="https://formsubmit.co/luanacanselmocarla2@gmail.com" method="POST">

                    <input type="text" placeholder="Nombre.." name="nombre">
                    <input type="text" placeholder="Apellido.." name="apellido">
                    <input type="text" placeholder="DNI.." name="dni">
                    <input type="date" placeholder="Fecha de Nacimiento.." name="fecha_nacimiento">
                    <input type="text" placeholder="Teléfono.." name="telefono">
                    <input type="email" placeholder="Correo.." name="correo">
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <input type="submit" value="Enviar" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .texto{
            text-align: center;
            font-size: 30px;
            margin-top: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        }
        .contenedor-contacto {
            max-width: 1100px;
            margin: auto;
        }

        .contacto {
            background-color: #ffffff; /* Changed to white for a cleaner look */
            color: #343a40; /* Dark color for better readability */
            margin-top: 50px;
            padding: 80px 20px;
        }

        .contacto h2 {
            text-align: center;
            padding-bottom: 30px;
            color: #dc3545; /* Bootstrap danger color */
            margin-bottom: 70px;
            margin-top: -40px;
        }

        .contacto .fila {
            display: flex;
        }

        .contacto .col {
            width: 50%;
        }

        .contacto .info {
            margin-bottom: 30px;
            border-left: 3px solid #343a40; /* Dark color for info borders */
            padding-left: 8px;
        }

        .contacto p {
            color: #343a40;
        }

        .contacto input,
        .contacto textarea {
            width: 100%;
            border: 1px solid #ced4da; /* Lighter border color for inputs */
            padding: 10px;
            margin-bottom: 20px;
            outline: none;
            color: #343a40;
        }

        .contacto .btn {
            padding: 10px 40px;
            border: 2px solid #343a40;
            color: #343a40;
            cursor: pointer;
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        .contacto .btn:hover {
            background-color: #f1f3f5; /* Light background color on hover */
        }

        @media screen and (max-width: 800px) {
            .contacto .fila {
                display: block !important;
            }

            .contacto .fila .col {
                text-align: center;
                width: 100% !important;
            }

            .contacto .fila .col .info {
                float: left;
                font-size: 12px;
                width: 25%;
            }
        }
    </style>

<?php include "pie.php"; ?>

</body>

</html>
