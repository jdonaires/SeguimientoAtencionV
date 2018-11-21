<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Login</title></head>
<body>
<div>
	<center>
		<form method="POST" action="validar.php">
			<input type="text" name="nnombre" placeholder="Usuario" />
			<br />
			<input type="password" name="npassword" placeholder="Contraseña" />
			<br />
			<button type="submit">Inicar Sesion</button>
		</form>
	</center>
</div>
</body>
</html>

--validacion
<?php

$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];

if(empty($usuario) || empty($pass)){
	header("Location: index.html");
	exit();
}

mysql_connect('localhost','root','*****') or die("Error al conectar " . mysql_error());
mysql_select_db('login') or die ("Error al seleccionar la Base de datos: " . mysql_error());

$result = mysql_query("SELECT * from usuarios where Username='" . $usuario . "'");

if($row = mysql_fetch_array($result)){
	if($row['Password'] ==  $pass){
		session_start();
		$_SESSION['usuario'] = $usuario;
		header("Location: contenido.php");
	}else{
		header("Location: index.html");
		exit();
	}
}else{
	header("Location: index.html");
	exit();
}

--cotenido
?>

<?php

session_start();

echo "Hola " . $_SESSION['usuario'];

?>
