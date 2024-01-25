<?php include "vista/cabecera.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="pie.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300&family=PT+Sans&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="pie.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .display-3,
        #quetal {
            text-align: center;
        }
        .carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #000000; /* Cambia el color a negro */
}

        .carousel-item img {
            width: 150%;
            height: auto;
        }

        .carousel {
            max-width: 1000px;
            margin: auto;
        }

        .trabajos {
            max-width: 1100px;
            margin: auto;
            padding: 0 20px;

        }

        .trabajos h2 {
            text-align: center;

        }

        .trabajos nav {
            text-align: center;
            margin: 30px 0;

        }

        .trabajos nav a {
            text-decoration: none;
            display: inline-block;
            margin: 0 20px;
            color: #c20db6;
            font-weight: bold;
            padding: 3px 10px;
            border: 3px solid transparent;
        }

        .trabajos nav a:hover {
            border: 3px solid #000000;
        }

        .borde {
            border: 3px solid #a6369b;
        }

        .trabajos .galeria .item img {
            width: 100%;
            height: 100%;
            display: block;

        }

        .trabajos .galeria {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
            grid-gap: 30px;

        }

        .trabajos .galeria .item {
            position: relative;
            overflow: hidden;
            border: 1px solid #2f2b2b;
            border-radius: 10px;
        }

        .trabajos .galeria .item .info {
            position: absolute;
            top: -100%;
            left: 0;
            bottom: 0;
            text-align: center;
            background-color: #ffffffa4;
            width: 100%;
            opacity: 1;
            transition: .3s;
            opacity: 0;

        }


        .trabajos .galeria .item .info h3 {
            color: #000000;
            margin-bottom: 20px;
        }

        .trabajos .galeria .item .info span {
            color: #2f2b2b;
            display: inline-block;
            border: 2px solid #5c5a5a;
            margin: 0 3px;
            padding: 0 5px;

        }

        .trabajos .galeria .item .info a {
            display: block;
            margin: 20px;
            text-decoration: none;
            color: #5f125a;
            font-weight: bold;
        }

        .trabajos .galeria .item:hover .info {
            opacity: 1;
            top: 0;
            background-color: #ffff;

        }


        @media screen and (max-width: 800px) {
            .trabajos nav a {
                margin: 0 5px;
            }

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
</head>

<body>

    <div class="container">
        <br />
        <div class="row"></div>

        <div class="jumbotron">
            <!-- Tu contenido de AILUMAGA y carrusel -->
            <h1 class="display-3">CLINICA USPALLATA</h1>
            <hr class="my-2">

            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="vista/carrusel1.jpg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="vista/carrusel2.png" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="gato.jpeg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="hongo.jpeg" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    </br>
    <div class="especialidades" style="text-align: center;     background-color: beige;
">
        <h1 style="height:150px; padding-top:50px;">CONOCE NUESTRAS ESPECIALIDADES</h1>
    </div>



    <section class="trabajos" id="trabajos">

        <div class="galeria">
            <div class="item disenio">
                <img src="CARDIOLOGÍA.png" alt="">
                <div class="info">
                    <p></br></p>
                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctor Fabricio Peña</p>

                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctor Lucas Alonso</p>

                </div>
            </div>

            <div class="item animaciones">
                <img src="CLÍNICA.png" alt="">
                <div class="info">
                <p></br></p>

                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctora Lucia Cuzzimano</p>

                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctor Pedro Borrando</p>
                </div>
            </div>
            <div class="item animaciones">
                <img src="GINECOLOGÍA.png" alt="">
                <div class="info">
                <p></br></p>

                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctora Susana Ahumana</p>

                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctora Verónica Lima Luciano </p>
                    <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctor Leandro Desiano </p>

                </div>
            </div>
            <div class="item programacion">
                <img src="NEUROLOGÍA.png" alt="">
                
                <div class="info">
                <p></br></p>

                <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctor Ignacio Leandro Paredes </p>

                </div>
            </div>

            <div class="item programacion">
                <img src="PEDIATRÍA.png" alt="">
                <div class="info">
                <p></br></p>

                <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctor Fabio Mendoza </p>
                <p style="text-align: center; font-size:20px; font-weight: bold; ">Doctora Florencia Limano </p>

                </div>
            </div>
        </div>

    </section>

    </br></br>
    <!-- Agregar el script de Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "vista/pie.php"; ?>


</body>