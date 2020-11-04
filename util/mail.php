<?php


$servicio = $_POST['servicio'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];
$cel = $_POST['cel'];


if($email==""){
$email = "no se registro email de contacto";
}


$destinatario = "dimicontacto@gmail.com";

$asunto="Contacto para el servicio de:" ." ".$servicio;

$carta ="Datos de solicitud:\n\n";
$carta .="Nombre del cliente: \n $nombre \n\n"; 
$carta .="Celular del cliente: \n $cel \n\n"; 
$carta .="Email del cliente\n $email \n\n";
$carta .="Motivo de solicitud:\n $mensaje \n\n";



$headers = 'From: <dimicontacto@example.com>' . "\r\n";
$headers .= 'Cc: dimicontacto@example.com' . "\r\n";

 

mail($destinatario,$asunto,$carta,$headers);
  

header("location: ../confirmacionEmail.php");




?>