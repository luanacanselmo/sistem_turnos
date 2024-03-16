<?php
$conexion= new mysqli("localhost:3309", "root", "", "naniphp2");
//objeto de mysqli

$result = mysqli_query($conexion, 'select * from usuarios'); //conexion, consulta

$usuarios = array(); //arreglo vacío

while ($row = mysqli_fetch_assoc($result)) { //fila de resultados de una consulta a la base de datos como un array asociativo.
    $usuarios[] = $row; //agrega ese array asociativo al arreglo $usuarios
    //es una forma de agregar un elemento al final de un array en PHP.
}


mysqli_free_result($result);

// Libera la memoria asociada con el resultado de la consulta
?>