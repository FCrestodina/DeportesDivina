<?php
    session_start();
    include("conexion.php");
    $listProductos=mysqli_query($conexion, "SELECT Id, Deporte, Nombre, Marca, Color, Talle, Stock, Precio, Proveedor, MailProveedor, FechaReposicion, TelefonoProveedor, CostoCompra FROM producto ORDER BY Deporte ASC");
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
				"
				<a href=form_createproducto.php target='_blank'><button class='abm'>Crear un producto</button></a>
				<a href=form_updateproducto.php target='_blank'><button class='abm'>Modificar un producto</button></a>
				<a href=form_deleteproducto.php target='_blank'><button class='abm'>Eliminar un producto</button></a>
				<table>
					<caption>Listado de productos</caption>
						<thead>
							<tr>
								<th>Id</th><th>Deporte</th><th>Marca</th><th>Color</th><th>Talle</th><th>Stock</th><th>Precio</th><th>Proveedor</th>
								<th>Mail del proveedor</th><th>Fecha de reposicion</th><th>Telefono del proveedor</th><th>Costo de compra</th>
							</tr>
						</thead>
				</table>";		
			while($row = $listProductos->fetch_assoc()) {
				Echo	
					"<table>
						<tbody>
							<tr>
								<td>".$row['Id']."</td><td>".$row['Deporte']."</td><td>".$row['Marca']."</td>
								<td>".$row['Color']."</td><td>".$row['Talle']."</td><td>".$row['Stock']."</td>
								<td>".$row['Precio']."</td><td>".$row['Proveedor']."</td><td>".$row['MailProveedor']."</td>
								<td>".$row['FechaReposicion']."</td><td>".$row['TelefonoProveedor']."</td><td>".$row['CostoCompra']."</td>
							</tr>							
						</tbody>
					</table>
					";				
			}
			Echo "<br/><br/><a href=admin_site.html><button>Volver</button></a>";
		}else{
			Echo "Error";
		}
	?>
</body>
</html>