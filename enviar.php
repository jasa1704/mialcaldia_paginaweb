<?php

// Llamando a los campos 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "comercial@appsus.com";
$asunto = "Correo enviado desde la pagina web mialcaldia";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje \n";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
header('Location:mensajeEnviado.html');

?>