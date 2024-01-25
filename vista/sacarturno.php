
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<section class="contacto" id="contacto">
    <div class="contenedor-contacto">
        <h2>Contacto</h2>
        <div class="fila">
            <div class="col">
                <div class="info">
                    <h3>Email</h3>
                    <p>luanacanselmocarla@gmail.com</p>
                </div>
                <div class="info">
                    <h3>Telefono</h3>
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
                <input type="text" placeholder="Nombre..">
                <input type="text" placeholder="Correo..">
                <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                <input type="submit" value="Enviar" class="btn">
            </div>
        </div>
    </div>


</section>
<style>
    
.contacto{
    background-color:black;
    background-size: cover;
    color: #ffffff;
    margin-top: 50px;
    padding: 80px 20px;

}
.contacto .contenedor-contacto{
max-width: 1100px;
margin: auto;
}

.contacto h2{
    text-align: center;
    padding-bottom: 30px;

}
.contacto .contenedor-contacto .fila{
    display: flex;

}
.contacto .contenedor-contacto .fila .col{
    width: 50%;
}
.contacto .contenedor-contacto .info{
    margin-bottom: 30px;
    border-left: 3px solid #ffffff;
    padding-left: 8px;

}
.contacto .contenedor-contacto p{
    color: #e6e2e2;

}

.contacto input, .contacto textarea{
    width: 100%;
    border: none;
    background-color: transparent;
    padding: 10px;
    border: 1px solid #c2bdbd;
    margin-bottom: 20px;
    outline: none;
    color: #ffffff;

}

.contacto .btn{
    background-color: none;
    padding: 5px 40px;
    border: 2px solid;
    color: #ffffff;
    cursor: pointer;
background-color: black;
}


@media screen and (max-width: 800px) {
    

    .contacto .fila{
        display:  block !important;
    }
    .contacto .fila .col{
        text-align: center;
        width: 100% !important;
    }
    .contacto .fila .col .info{
        float: left;
        font-size: 12px;
        width: 25%;
    }
}
</style>
</body>
</html>

