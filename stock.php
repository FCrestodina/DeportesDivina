<?php
    session_start();
    include("conexion.php");
    $listProductos=mysqli_query($conexion, "SELECT Id, Deporte, Nombre, Marca, Color, Talle, Stock, Precio, Proveedor, MailProveedor, FechaReposicion, TelefonoProveedor, CostoCompra FROM producto ORDER BY Stock ASC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de productos</title>

	<link rel="stylesheet" href="tabla.css">
</head>
<body>
	<?php
		if($listProductos->num_rows > 0){
			Echo 
				"<table>
					<thead>
						<tr>
							<th scope='col'>Id</th><th scope='col'>Deporte</th><th scope='col'>Marca</th><th scope='col'>Color</th><th scope='col'>Talle</th>
                            <th scope='col'>Stock</th><th scope='col'>Precio</th><th scope='col'>Proveedor</th><th scope='col'>MailProveedor</th><th scope='col'>FechaReposicion</th>
                            <th scope='col'>TelefonoProveedor</th><th scope='col'>CostoCompra</th>
						</tr>
					</thead>
				</table>";		
			while($row = $listProductos->fetch_assoc()) {
				Echo	
					"<table>
						<tr>
							<td>".$row['Id']."</td><td>".$row['Deporte']."</td><td>".$row['Marca']."</td>
							<td>".$row['Color']."</td><td>".$row['Talle']."</td><td>".$row['Stock']."</td>
							<td>".$row['Precio']."</td><td>".$row['Proveedor']."</td><td>".$row['MailProveedor']."</td>
							<td>".$row['FechaReposicion']."</td><td>".$row['TelefonoProveedor']."</td><td>".$row['CostoCompra']."</td>
						</tr>							
					</table>";				
			}
		}else{
			Echo "Error";
		}
	?>
</body>
</html>