<?php
include "../modelo/modelopersona.php";
//si está definida, el formulario se envío
if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"])
        and !empty($_POST["fecha"]) and !empty($_POST["correo"]) //no estén vacíos
    ) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
//Asigna los valores de los campos del formulario a variables locales.

        insertarPersona($nombre, $apellido, $dni, $fecha, $correo);
    } else {
        echo "Algun campo está vacío";
    }
}

$idSeleccionado = isset($_POST['txtID']) ? $_POST['txtID'] : 0;

//isset($_POST['txtID']): Verifica si $_POST['txtID'] está definido y no es nulo.
//Si $_POST['txtID'] existe y no es nulo, se asigna su valor a $idSeleccionado.
//Si $_POST['txtID'] no existe o es nulo, se asigna el valor 0 a $idSeleccionado.
$registroSeleccionado = seleccionarPersona($idSeleccionado);

$id_usuario = isset($registroSeleccionado) ? $registroSeleccionado->id : '';
$nombre = isset($registroSeleccionado) ? $registroSeleccionado->nombre : '';
$apellido = isset($registroSeleccionado) ? $registroSeleccionado->apellido : '';
$dni = isset($registroSeleccionado) ? $registroSeleccionado->dni : '';
$fecha_nac = isset($registroSeleccionado) ? $registroSeleccionado->fecha_nac : '';
$correo = isset($registroSeleccionado) ? $registroSeleccionado->correo : '';

if (!empty($_POST["accion"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $fecha = $_POST["fecha"];
    $correo = $_POST["correo"];
    $id_usuario = $_POST["id_usuario"];

    actualizarPersona($id_usuario, $nombre, $apellido, $dni, $fecha, $correo);
    header("Location: ".$_SERVER['PHP_SELF']); // para redirigir a la misma página
    exit();
} 

if (!empty($_POST["accion3"])) {
    $id_eliminar = $_POST["id_usuario"];
    eliminarPersona($id_eliminar);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

