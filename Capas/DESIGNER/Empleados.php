<?php
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../CSS/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Registrar Empleado</title>
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="" class="formulario" name="formulario_registro" method="post">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre">
						<label class="label" for="nombre">Nombres:</label>
					</div>
					<div class="input-group">
						<input type="text" id="apellido" name="apellido">
						<label class="label" for="apellido">Apellidos:</label>
					</div>
					<div class="input-group">
						<input type="text" id="dni" name="dni">
						<label class="label" for="dni">DNI:</label>
					</div>
					<div class="input-group">
						<input type="text" id="direccion" name="direccion">
						<label class="label" for="direccion">Direccion:</label>
					</div>
					<div class="input-group">
						<input type="date" id="fecnac" name="fecnac">
						<label class="label" for="fecnac"></label>
					</div>
					<div class="input-group radio">
						<input type="radio" name="sexo" id="hombre" value="Hombre">
						<label for="hombre">Hombre</label>
						<input type="radio" name="sexo" id="mujer" value="Mujer">
						<label for="mujer">Mujer</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo">E-mail:</label>
					</div>
					<div class="input-group">
						<input type="text" id="telefono" name="telefono">
						<label class="label" for="telefono">Telefono:</label>
					</div>
					<div class="input-group">
						<input type="text" id="estado" name="estado">
						<label class="label" for="estado">Estado:</label>
					</div>
					<div class="input-group">
						<input type="text" id="usuario" name="usuario">
						<label class="label" for="usuario">Usuario:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="pass">
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass2" name="pass2">
						<label class="label" for="pass2">Repetir Contraseña:</label>
					</div>


					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script src="../JS/formulario.js"></script>
</body>
</html>
