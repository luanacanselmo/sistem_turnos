    <?php include("../controlador/registroturno.php") ?>

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
        <h1 class="text-center p-3"> Registro Turno</h1>


        <div class="container-fluid row">
            <form class="col-4 p-3" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                    <input type="text" required readonly class="form-control" value="<?php echo $id_usuario; ?>" name="id_usuario" id="id_usuario" placeholder="ID">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Matricula Doctor</label>
                    <input type="text" class="form-control" name="matricula" id="matricula" value="<?php echo $matricula_doctor; ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">DNI Paciente</label>
                    <input type="text" class="form-control" name="docpaciente" id="docpaciente" value="<?php echo $docpaciente; ?>">
                </div>

                <div class="mb-3">
                    <label for="nombre_doctor" class="form-label">Nombre Doctor</label>
                    <input type="text" class="form-control" name="nombre_doctor" id="nombre_doctor" readonly value="<?php echo $nombre_doctor; ?>">
                </div>
                <div class="mb-3">
                    <label for="apellido_doctor" class="form-label">Apellido Doctor</label>
                    <input type="text" class="form-control" name="apellido_doctor" id="apellido_doctor" readonly value="<?php echo $apellido_doctor; ?>">
                </div>

                <div class="mb-3">
                    <label for="nombre_paciente" class="form-label">Nombre Paciente</label>
                    <input type="text" class="form-control" name="nombre_paciente" id="nombre_paciente" readonly value="<?php echo $nombre_paciente; ?>">
                </div>
                <div class="mb-3">
                    <label for="apellido_paciente" class="form-label">Apellido Paciente</label>
                    <input type="text" class="form-control" name="apellido_paciente" id="apellido_paciente" readonly value="<?php echo $apellido_paciente; ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="fecha_turno" id="fecha_turno" value="<?php echo $fecha_turno; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hora</label>
                    <input type="text" class="form-control" name="hora" id="hora" value="<?php echo $hora; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sala</label>
                    <input type="text" class="form-control" name="sala" id="sala" value="<?php echo $sala; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Especialidad</label>
                    <input type="text" class="form-control" name="especialidad" id="especialidad" value="<?php echo $especialidad; ?>" readonly>
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
                            <th scope="col">matricula</th>
                            <th scope="col">DNI Paciente</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Paciente</th>
                            <th scope="col">Apellido </th>
                            <th scope="col">fecha</th>
                            <th scope="col">hora</th>
                            <th scope="col">sala</th>
                            <th scope="col">especialidad</th>


                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = $conexion->query("SELECT t.*, d.matricula as matricula_doctor, d.especialidad as especialidad, d.nombre as nombre_doctor, d.apellido as apellido_doctor, p.dni as docpaciente, p.nombre as nombre_paciente, p.apellido as apellido_paciente 
                    FROM turno t
                    INNER JOIN medico d ON t.id_medico = d.id
                    INNER JOIN persona p ON t.id_paciente = p.id");

                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <td><?= $datos->id ?></td>

                                <td><?= $datos->matricula_doctor ?></td>
                                <td><?= $datos->docpaciente ?></td>
                                <td><?= $datos->nombre_doctor ?></td>
                                <td><?= $datos->apellido_doctor ?></td>
                                <td><?= $datos->nombre_paciente ?></td>
                                <td><?= $datos->apellido_paciente ?></td>
                                <td><?= $datos->fecha_turno ?></td>
                                <td><?= $datos->hora ?></td>
                                <td><?= $datos->sala ?></td>
                                <td><?= $datos->especialidad ?></td>
                                <td>
                                    <form method="POST">

                                        <input type="hidden" name="txtID" value="<?= $datos->id ?>" />
                                        <button type="submit" name="accion2" value="Seleccionar" class="btn btn-small btn-warning">Seleccionar</button>

                                    </form>
                                </td>
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