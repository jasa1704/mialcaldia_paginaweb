<?php

// Llamando a los campos 
$correo = $_POST['correo'];

// Datos para el correo
$destinatario = "comercial@appsus.co";
$asunto = "Mensaje envio desde la pagina principal";

$carta = "De: Usuario pagina principal";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: No se tiene";
$carta .= "Mensaje: Quisiera saber mas sobre mi alcaldia";

// Enviando Mensaje

mail($destinatario, $asunto, $carta);
header('Location:index.html');

?>