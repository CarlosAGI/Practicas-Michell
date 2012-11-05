<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

		<title>Practica 21</title>
		<meta name="description" content="" />
		<meta name="author" content="usuario"/>

		<meta name="viewport" content="width=device-width; initial-scale=1.0"/>

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

		<link rel="stylesheet" type="text/css" href="hoja.css" />
		<script type="text/javascript" src="valida.js"></script>
	</head>

	<body>
		<?php
			require_once("PHP/bd.inc");
			$conexion = new mysqli($host, $user, $pass, $bd);
			$consulta = $conexion -> query("SELECT * FROM productos");
			$cont = $consulta->num_rows;
			
		?>
	
		<div id="maestro">
			
					<legend>
						Bitacora Productos
					</legend>
					<table>
					<th>ID</th>	<th>Nombre</th>	<th>Descripcion</th><th>Cantidad</th>		
					<?php
					for($i=0; $i<$cont;$i++){
						$fila = $consulta->fetch_array(MYSQLI_ASSOC);
						echo '<tr><td>'.$fila["idProducto"].'</td><td>'.$fila["nombre"].'</td><td>'.$fila["descripcion"].'</td><td>'.$fila["cantidad"].'</td></tr>';
					}
					?>
					</table>
				
			
		</div>
	</body>
</html>

