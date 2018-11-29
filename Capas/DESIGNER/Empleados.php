<?php
require_once('../DAO/empleadoDAO.php');
require_once('../BOL/persona.php');
require_once('../BOL/empleados.php');
require_once('../BOL/usuarios.php');

$per = new Persona();
$emp = new empleado();
$user = new Usuarios();
$reg = new empleadoDAO();

if(isset($_POST['guardar']))
{
  $per->__SET('nombres',          $_POST['nombres']);
	$per->__SET('apellidos',        $_POST['apellidos']);
	$per->__SET('dni', 							$_POST['dni']);
	$per->__SET('direccion', 				$_POST['direccion']);
	$per->__SET('fecnac', 					$_POST['fecnac']);
	$per->__SET('genero', 					$_POST['genero']);
	$per->__SET('email', 						$_POST['email']);
	$per->__SET('telefono', 				$_POST['telefono']);
	$per->__SET('estado', 					$_POST['estado']);
	$per->__SET('tipo', 						$_POST['tipo']);

  $emp->__SET('turno', 					$_POST['turno']);
	$emp->__SET('cargo', 						$_POST['cargo']);

  $user->__SET('usuario', 					$_POST['usuario']);
  $user->__SET('pass', 						$_POST['pass']);



	$reg->Registrar($per,$emp,$user);
	header('Location: Empleados.php');
}

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
        <li><a href="citas.php"><span class="segundo"><i class="icon icon-calendar"></i></span>Nueva Cita</a>
        <li><a href="#"><span class="tercero"><i class="icon icon-user-check"></i></span>Citas Pendientes</a>
        <li><a href="#"><span class="cuarto"><i class="icon icon-user-plus"></i></span>Nuevo Registro</a>
          <ul>
            <li><a href="doctores.php">Doctor</a></li>
            <li><a href="Empleados.php">Empleado</a></li>
            <li><a href="paciente.php">Paciente</a></li>
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

<h1>Registrar Empleados</h1>

	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="formulario" name="formulario_registro" method="post">
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
						<input type="text" id="turno" name="turno">
						<label class="label" for="turno">Turno:</label>
					</div>
          <div class="input-group">
						<input type="text" id="cargo" name="cargo">
						<label class="label" for="cargo">Cargo:</label>
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


					<input type="submit" id="btn-submit"  name="guardar">
				</div>
			</form>
		</div>
	</div>

	<script src="../JS/formulario.js"></script>
</body>
</html>
