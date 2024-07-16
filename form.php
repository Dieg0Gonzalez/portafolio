<?php

$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$email = $_POST['email'];
$mensaje = $_POST['message'];

//Como me va a llevar a mi el mensaje

$mensaje .= "Nombre: " . $nombre . ",\r\n";
$mensaje .= "Email: " . $email . ",\r\n";
$mensaje .= "Telefono: " . $telefono . ",\r\n";
$mensaje .= "Mensaje: " . $mensaje . ",\r\n";

$destinatario = 'diego21gonzalez08@gmail.com';
$asunto = 'Diegaceny';

//Funcion mail
// A quien le mando el mail
//mail($destinatario, $asunto, utf8_decode($mensaje), $header);


//Redireccion al haber enviado el form
header('Location: https://dieg0gonzalez.github.io/portafolio/prueba.html');

?>
