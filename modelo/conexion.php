<?php
$conexion= new mysqli("localhost:3309", "root", "", "naniphp2");


$result = mysqli_query($conexion, 'select * from usuarios');

$usuarios = array();

while ($row = mysqli_fetch_assoc($result)) {
    $usuarios[] = $row;
}
//mysqli_fetch_assoc($result): se utiliza para obtener la siguiente fila 
//de resultados como un array asociativo.
mysqli_free_result($result);
?>