<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	if($_POST['admin']){
		$admin = true;
	}
	else{
		$admin = false;
	}

	include("conexion.php");

	$consulta = mysqli_query($conexion, "INSERT INTO usuario (Nombre, Email, Usuario, Password, IsAdmin) VALUES ('$nombre','$email', '$usuario', '$password', '$admin')");

	header("Location:form_login.php");

?>   

</body>
</html>