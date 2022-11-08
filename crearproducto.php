<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Creación de un producto</title>
</head>

<body>

<?php
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

    $resultado=mysqli_query($conexion, "INSERT INTO producto (Deporte, Nombre, Marca, Color, Talle, Stock, Precio, Proveedor, MailProveedor, TelefonoProveedor, Eliminado, CantidadVendida) VALUES 
															('$deporte','$nombre','$marca','$color','$talle','$stock','$precio','$proveedor','$mailProveedor','$telefonoProveedor','0','0')");
    header("Location:list_productos.php");
?>   

</body>
</html>