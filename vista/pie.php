
<head>
    <link rel="stylesheet" href="pie.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Estilos adicionales para el pie de página */
        footer {
            padding: 30px 0;
            margin-top: 20px;
        }

        .contenu-footer {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
        }

        .bloc {
            flex: 1;
            text-align: center;
        }

        .liste-informations,
        .liste {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .fa-location-dot,
        .fa-phone,
        .fa-envelope,
        .fa-clock,
        .fa-credit-card,
        .fa-money-bill,
        .fa-exchange-alt {
            margin-right: 10px;
        }

        .fa-instagram {
            font-size: 30px;
            margin-right: 10px;
            color: black;
            transition: color 0.3s;
            display: flex;

        }

        .fa-instagram:hover {
            color: purple;
        }

        /* Ajuste para alinear las secciones */
        .liste-informations li,
        .liste li {
            display: flex;
            align-items: center;
            /* Align items within each li */
        }

        .liste-informations li i,
        .liste li i {
            margin-right: 5px;
        }

        /* Alineación específica para la sección de CONTACTOS */
       
h3{
    display: flex;

}
    </style>


</head>
<footer>
    <div class="contenu-footer">
        <div class="bloc footer-services">
            <img src="CLINICA.png" alt="AILUMAGA" width="90% " style="margin-top: -80px">
        </div>

        <div class="bloc footer-informations">
            <h3 style="font-family: 'Inter', sans-serif; font-family: 'PT Sans', sans-serif; font-family: 'Quicksand', sans-serif; letter-spacing: 4px; ">CONTACTOS</h3>
            </br>
            <ul class="liste-informations">
                <li style="margin-bottom: 18px;"><i class="fa-solid fa-location-dot"></i> Lavalle Mendoza</li>
                <li style="margin-bottom: 18px;"><i class="fa-solid fa-phone"></i> 2617142180</li>
                <li style="margin-bottom: 18px;"><i class="fa-solid fa-envelope"></i> luanacanselmocarla@gmail.com</li>
                <li style="margin-bottom: 18px;"><i class="fa-regular fa-clock"></i> 24 horas</li>
            </ul>
        </div>
        <div class="bloc footer-contact">
            <h3 style="font-family: 'Inter', sans-serif; font-family: 'PT Sans', sans-serif; font-family: 'Quicksand', sans-serif; letter-spacing: 4px;">REDES SOCIALES </h3>
            </br>

            <a href="https://www.instagram.com/ailumaga/" target="_blank"> <!-- Reemplaza "tu_cuenta_de_instagram" con tu nombre de usuario de Instagram o URL de tu perfil -->
                <i style="font-size: 30px;" class="fa-brands fa-instagram"> </i>
            </a>
            <br /><br />
            <h3 style="font-family: 'Inter', sans-serif; font-family: 'PT Sans', sans-serif; font-family: 'Quicksand', sans-serif; letter-spacing: 4px;">MEDIOS DE PAGO</h3>
            <ul class="liste">
                <li>BNA+</li>
                <li>Efectivo</li>
                <li>Transferencia</li>
            </ul>
        </div>
        <style>
            /* Estilo para el ícono de Instagram */
            .fa-instagram {
                color: black;
                /* Color predeterminado del ícono */
                transition: color 0.3s;
                /* Transición suave del cambio de color */
            }

            /* Cambio de color al pasar el cursor sobre el ícono */
            .fa-instagram:hover {
                color: purple;
                /* Cambio de color al pasar el cursor */
            }
        </style>
</footer>



</body>

</html>