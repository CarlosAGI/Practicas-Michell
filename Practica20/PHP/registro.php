<?php
require_once("bd.inc");
$conexion = new mysqli($host, $user, $pass, $bd);

if($conexion->connect_error){
	die('Error de COnexion (' . $conexion->connect_errno . $conexion->connect_error);
}


$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$cantidad = $_GET['cantidad'];


$nombre = $conexion -> real_escape_string($nombre);
$descripcion = $conexion -> real_escape_string($descripcion);
$cantidad = $conexion -> real_escape_string($cantidad);

$query = "insert into productos (nombre, descripcion, cantidad) values (\"$nombre\", \"$descripcion\", \"$cantidad\") ";
$conexion -> query($query) or die("Error con el query".$conexion->errno." : ".$conexion->error);	


$conexion -> close();

header("Location: ../Practica20.php?status=1");

?>