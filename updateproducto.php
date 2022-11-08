<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Actualizacion de producto</title>
</head>

<body>

<?php
	$id = $_POST['Id'];
	$deporte = $_POST['Deporte'];
	$nombre = $_POST['Nombre'];
	$marca = $_POST['Marca'];
	$color = $_POST['Color'];
	$talle = $_POST['Talle'];
	$stock = $_POST['Stock'];
	$precio = $_POST['Precio'];
	$proveedor = $_POST['Proveedor'];
	$mailProveedor = $_POST['MailProveedor'];
	$telefonoProveedor = $_POST['TelefonoProveedor'];

	include("conexion.php");

    $resultado=mysqli_query($conexion, "UPDATE producto SET
		Deporte = '$deporte',
		Nombre = '$nombre',
		Marca = '$marca',
		Color = '$color',
		Talle = '$talle',
		Stock = '$stock', 
		Precio = '$precio',
		Proveedor = '$proveedor',
		MailProveedor = '$mailProveedor',
		TelefonoProveedor = '$telefonoProveedor'
	WHERE Id = $id");
    header("Location:list_productos.php");
?>   

</body>
</html>