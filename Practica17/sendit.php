<?
$destinatario = "gurdusmapachus@hotmail.com";
$asunto = "Practica 17";
$cuerpo = "
<html>
<head>
<title>Prueba de correo</title>
</head>
<body>
<h1>Confirmacion de registro</h1>
<h2>Usted se ha registrado con los siguientes datos:</h2>
Username:\r\n";
$cuerpo .= $_POST['nick'];
$cuerpo .= "\r\n";
$cuerpo .= "Correo:\r\n";
$cuerpo .= $_POST['mail'];
$cuerpo .= "\r\n";
$cuerpo .= "Contraseña:\r\n";
$cuerpo .= $_POST['pass'];
$cuerpo .= "\r\n";
$cuerpo .= "</body></html>";



$headers = "Content-type: text/html;\r\n";
$headers .= "From:dios@hotmail.com\r\n";

mail($destinatario,$asunto,$cuerpo,$headers);
echo 'Correo enviado';
?> 