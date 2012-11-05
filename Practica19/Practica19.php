<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

		<title>Practica 19</title>
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
	echo 'Felicidades';
	?>
		<div id="maestro">
			<form method="get" action="PHP/registro.php" name="registro">
				<fieldset>
					<legend>
						Creacion de usuario
					</legend>
					<label for="nick">Nick de usuario</label>
					<input type="text" id="nick" name="nick" required="required" pattern="\w{4,20}" placeholder="Escribe tu nick"/>
					<div id="error_nick" class="error">
						Minimo 4 caracteres
					</div>
					<label for="mail">Correo</label>
					<input type="email" id="mail" name="mail" required="required" placeholder="Escribe tu email"/>
					<div id="error_mail" class="error">
						Favor de poner un correo valido
					</div>
					<label for="pass">Contraseña</label> 
					<input type="password" id="pass" name="pass" pattern="\w{8,}" placeholder="Minimo 8 caracteres"/>
					<div id="error_pass" class="error">
						Minimo 8 caracteres alfanumericos
					</div>
					<label for="pass2">Confirma tu contraseña</label> 
					<input type="password" id="pass2" name="pass2" pattern="\w{8,}" placeholder="Reescribe tu contraseña"/>
					<div id="error_pass2" class="error">
						Las contraseñas deben coincidir.
					</div>

					<input type="hidden" name="encriptada" value="" id="encriptada"/>
					
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

