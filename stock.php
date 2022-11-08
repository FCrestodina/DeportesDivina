<?php
    session_start();
    include("conexion.php");
    $listProductos=mysqli_query($conexion, "SELECT Id, Deporte, Nombre, Marca, Color, Talle, Precio, Stock, Proveedor, MailProveedor, TelefonoProveedor FROM producto
                                WHERE Eliminado = 0 ORDER BY Stock ASC");
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
						<th scope='col'>Deporte</th><th scope='col'>Nombre</th><th scope='col'>Marca</th><th scope='col'>Color</th><th scope='col'>Talle</th>
						<th scope='col'>Precio</th><th scope='col'>Stock</th><th>Proveedor</th>
						</tr>
					</thead>
				</table>";		
			while($row = $listProductos->fetch_assoc()) {
				Echo	
					"<table>
						<tr>
						<td>".$row['Deporte']."</td><td>".$row['Nombre']."</td><td>".$row['Marca']."</td>
						<td>".$row['Color']."</td><td>".$row['Talle']."</td><td>".$row['Precio']."</td><td>".$row['Stock']."</td>
						<td><a href=form_contactar.php target='_blank'><button class='abm'>Contactar</button></a></td>
						</tr>							
					</table>";				
			}
			Echo "<br/><br/><a href=admin_site.php><button>Volver</button></a>";
		}else{
			Echo "Error";
		}
	?>
</body>
</html>