<?php include("cabeceraadmin.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center p-3"> Registro medico</h1>
   <?php include("../modelo/conexion.php") ?> 
   <?php include("../controlador/registromedico.php") ?> 

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID</label>
                
                <input type="text" required readonly class="form-control" value="<?php echo $id_usuario; ?>" name="id_usuario" id="id_usuario" placeholder="ID">
            </div>    

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $apellido; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" id="dni" value="<?php echo $dni; ?>">
            </div>
        

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ESPECIALIDAD</label>
                <input type="text" class="form-control" name="especialidad" id="especialidad" value="<?php echo $especialidad; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">N°MATRICULA</label>
                <input type="text" class="form-control" name="matricula" id="matricula" value="<?php echo $matricula; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            <button type="submit" class="btn btn-warning" name="accion" value="Modificar">Modificar</button>
            <button type="submit" name="accion3" value="Eliminar" class="btn btn-small btn-danger">Eliminar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">DNI</th>
                        <th scope="col">ESPECIALIDAD</th>
                        <th scope="col">N°MATRICULA</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query("Select * from medico");
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->apellido ?></td>
                            <td><?= $datos->dni ?></td>
                            <td><?= $datos->especialidad ?></td>
                            <td><?= $datos->matricula ?></td>
                            <form method="POST">
                            <td>
                                <input type="hidden" name="txtID" value="<?= $datos->id ?>" />
                                <button type="submit" name="accion2" value="Seleccionar" class="btn btn-small btn-warning">Seleccionar</button>
                    </td>


                            </form>
                        </tr>
                    <?php }
                    ?>


                </tbody>
            </table>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>