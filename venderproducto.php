<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Venta de producto</title>
</head>

<body>

<?php
	$id = $_POST['Id'];
	$cantidad = $_POST['Cantidad'];

	include("conexion.php");

    $resultado=mysqli_query($conexion, "UPDATE producto SET Stock = Stock - $cantidad, CantidadVendida = $cantidad WHERE Id = $id");
    header("Location:list_productos.php");
?>   

</body>
</html>