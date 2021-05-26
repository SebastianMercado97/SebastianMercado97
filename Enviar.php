<?php
// Llamando a los campos
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "sebamercado73@gmail.com";
$asunto = "Contacto desde nuestra web";
$carta = "De: $nombre \n";
$carta ="De: $apellido \n";
$carta .= "Correo: $correo \n";
//$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";
// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');
?>