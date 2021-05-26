<?php 

//Llamando a los campos
$nombre = $_POST('nombre');
$correo = $_POST('correo');
$celular = $_POST('celular');
$mensaje = $_POST('mensaje');

//Datos para el correo
$destinatario = "daniaguadalupemanriquezguardad@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo $correo \n";
$carta .= "Telefono $celular \n";
$carta .= "Mensaje $mensaje \n";

//Enviando un mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')

?>