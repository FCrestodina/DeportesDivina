<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Venta de producto</title>
</head>

<body>

<?php
	$id = $_POST['Id'];

	include("conexion.php");

    $resultado=mysqli_query($conexion, "UPDATE producto SET Eliminado = 1 WHERE Id = $id");
    header("Location:list_productos.php");
?>   

</body>
</html>