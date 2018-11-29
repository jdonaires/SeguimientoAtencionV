<?php
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../CSS/estilos.css">
  <link rel="stylesheet" href="../CSS/menu.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Registrar Empleado</title>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="../index.php"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
        <li><a href="citas.php>"><span class="segundo"><i class="icon icon-calendar"></i></span>Nueva Cita</a>
        <li><a href="#"><span class="tercero"><i class="icon icon-user-check"></i></span>Citas Pendientes</a>
        <li><a href="#"><span class="cuarto"><i class="icon icon-user-plus"></i></span>Nuevo Registro</a>
          <ul>
            <li><a href="doctores.php">Doctor</a></li>
            <li><a href="Empleados.php">Empleado</a></li>
            <li><a href="#">Paciente</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="quinto"><i class="icon icon-profile"></i></span>Registros</a>
            <ul>
            <li><a href="#">Doctor</a></li>
            <li><a href="#">Empleado</a></li>
            <li><a href="#">Paciente</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="sexto"><i class="icon icon-question"></i></span>Ayuda</a></li>
      </ul>
    </nav>
  </header>

  <h1>Registrar Doctores</h1>

  	<div class="contenedor-formulario">
  		<div class="wrap">
  			<form action="" class="formulario" name="formulario_registro" method="post">
  				<div>
            <div class="input-group">
  						<input type="text" id="asunto" name="asunto">
  						<label class="label" for="asunto">Asunto:</label>
  					</div>
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
              <input type="date" id="fecnac" name="fecnac">
              <label class="label" for="fecnac"></label>
            </div>
  					<div class="input-group">
  						<input type="text" id="doctor" name="doctor">
  						<label class="label" for="doctor">Doctor: </label>
  					</div>


  					<input type="submit" id="btn-submit" value="Enviar">
  				</div>
  			</form>
  		</div>
  	</div>

  	<script src="../JS/formulario.js"></script>
  </body>
  </html>
