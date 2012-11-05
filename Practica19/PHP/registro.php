<?php
require_once("bd.inc");
$conexion = new mysqli($host, $user, $pass, $bd);

if($conexion->connect_error){
	die('Error de COnexion (' . $conexion->connect_errno . $conexion->connect_error);
}


$nickname = $_GET['nick'];
$mail = $_GET['mail'];
$contra = $_GET['encriptada'];


$nickname = $conexion -> real_escape_string($nickname);
$mail = $conexion -> real_escape_string($mail);
$contra = $conexion -> real_escape_string($contra);

$query = "insert into usuarios (nick, correo, pass) values (\"$nickname\", \"$mail\", \"$contra\") ";
if($conexion -> query($query))
{
	$destinatario = $mail;
	$asunto = "Correo de COnfirmacion";
	$cuerpo = "
	<html>
	<head>
	<title>COnfirmacion de registro</title>
	</head>
	<body>
	<h1>Confirmacion de registro</h1>
	<h2>Usted se ha registrado con los siguientes datos:</h2>
	<h2>Username:</h2>\r\n";
	$cuerpo .= $nickname;
	$cuerpo .= "\r\n";
	$cuerpo .= "Correo:\r\n";
	$cuerpo .= $mail;
	$cuerpo .= "\r\n";
	$cuerpo .= "Contraseña:\r\n";
	$cuerpo .= $contra;
	$cuerpo .= "\r\n";
	$cuerpo .= "</body></html>";
	
	
	
	$headers = "Content-type: text/html;\r\n";
	$headers .= "From:no-reply@registros.com\r\n";
	
	mail($destinatario,$asunto,$cuerpo,$headers);
	
} 
else {
	die("Error con el query".$conexion->errno." : ".$conexion->error);	
} 

$conexion -> close();

header("Location: ../Practica19.php?status=1");

?>