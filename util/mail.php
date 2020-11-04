<?php
session_start();

$servicio = $_POST['servicio'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$email = $_POST['email'];
$cel = $_POST['cel'];


if($email=="" || $email==null || $email==undefined){
$email = "no se registro email de contacto";
}


$destinatario = "dimicontacto@gmail.com";

$asunto="Contacto para el servicio de:" ." ".$servicio;

$carta ="Datos de solicitud:\n\n";
$carta .="Nombre del cliente: \n $nombre \n\n"; 
$carta .="Celular del cliente: \n $cel \n\n"; 
$carta .="Email del cliente\n $email \n\n";
$carta .="Motivo de solicitud:\n $mensaje \n\n";



$headers .= 'From: <dimicontacto@example.com>' . "\r\n";
$headers .= 'Cc: dimicontacto@example.com' . "\r\n";

 

if(mail($destinatario,$asunto,$carta,$headers)){
    $_SESSION["mensaje"] = "Peticion enviada correctamente en breve nos comunicaremos";


$_SESSION["colorMensaje"] = "success";

header("location: ../index.php");

}else{
    $_SESSION["mensaje"] = "Error al solicitar servicio, intentalo de nuevo por favor";


$_SESSION["colorMensaje"] = "danger";
    header('Location:../index.php');
}


?>