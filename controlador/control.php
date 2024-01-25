<?php session_start();

include("../modelo/conexion.php");
include("./controlador/seguridad.php");





$usuario_valido = false;

foreach ($usuarios as $usuario) {
    if ($_POST["usuario"] == $usuario['usuario'] && $_POST["contrasena"] == $usuario['password']) {
        $_SESSION["autentificado"] = "1";
        $_SESSION["user"] = $_POST["usuario"];
        $_SESSION["pass"] = $_POST["contrasena"];
        
        if ($usuario['roll'] == '1') {
            header("location: ../vista/inicio.php");
        } elseif ($usuario['roll'] == '2') {
            header("location: index.php");
        }
        
        
        $usuario_valido = true;
        break;
    }
}
if (!$usuario_valido) {
    header("location: index.php?errorusuario=si");
}

// Ingresa tu clave secreta.....
define("6L3q1spAAAAAHdUhX8A_7ZgtfDI32YXLISLzfC_e", 'TU-CLAVE-SECRETA');
$token = $_POST['token'];
$action = $_POST['action'];
 
// call curl to POST request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => '6Le3q1spAAAAAHdUhX8A_7ZgtfDI32YXLISLzfC_', 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);
 
// verificar la respuesta
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {
    // Si entra aqui, es un humano, puedes procesar el formulario
	echo "ok!, eres un humano";
} else {
    // Si entra aqui, es un robot....
	echo "Lo siento, parece que eres un Robot";
}
?>