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
	$cifrada = password_hash($password, PASSWORD_DEFAULT);

	include("conexion.php");

	$consulta = mysqli_query($conexion, "INSERT INTO usuario (Nombre, Email, Usuario, Password) VALUES ('$nombre','$email', '$usuario', '$cifrada')");

	header("Location:form_login.php");

?>   

</body>
</html>