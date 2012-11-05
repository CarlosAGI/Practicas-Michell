<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

		<title>Practica 20</title>
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
	if($_GET['status'] == 1)
	echo 'Producto Registrado';
	?>
		<div id="maestro">
			<form method="get" action="PHP/registro.php" name="registro">
				<fieldset>
					<legend>
						Alta de Productos
					</legend>
					<label for="nombre">Nombre del Producto</label>
					<input type="text" id="nombre" name="nombre" required="required" pattern="\w{4,20}" placeholder="Escribe nombre"/>
					<div id="error_nombre" class="error">
						Minimo 4 caracteres
					</div>
					<label for="descripcion">Descripcion</label>
					<textarea id="descripcion" rows="5" name="descripcion" required="required" placeholder="Escribe una descripcion del producto"></textarea>
					<div id="error_descripcion" class="error">
						Favor de poner una descripcion
					</div>
					<label for="cantidad">Cantidad</label> 
					<input type="number" id="cantidad" name="cantidad" required="required" placeholder="Existencia"/>
					<div id="error_cantidad" class="error">
						Debe existir al menos 1
					</div>
					
					
					<button type="button" onclick="validaForm()">
						Enviar
					</button>
					<button type="reset">
						Limpiar
					</button>
					<button type="submit" id="enviar">
						Ni se ve
					</button>
				</fieldset>
			</form>
		</div>
	</body>
</html>

