<?php
    session_start();
    include("conexion.php");
    $listProductos=mysqli_query($conexion, "SELECT Id, Deporte, Nombre, Marca, Color, Talle, Stock, Precio FROM producto WHERE Eliminado = 0 ORDER BY Deporte ASC, Nombre ASC");
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
				<table>
						<thead>
						<form action='resultados_buscar.php' method='post'>
						<label>Buscar producto
						<input type='search' name='buscar' placeholder='Nombre del producto...' />
						<input type='submit' value='Enviar'>
						</label>
						</form>
							<tr><br><br>
								<th>Id</th><th>Deporte</th><th>Nombre</th><th>Marca</th><th>Color</th><th>Talle</th>
								<th>Stock</th><th>Precio</th><th></th>
							</tr>
						</thead>
				</table>";		
			while($row = $listProductos->fetch_assoc()) {
				Echo	
					"<table>
						<tbody>
							<tr>
								<td>".$row['Id']."</td><td>".$row['Deporte']."</td><td>".$row['Nombre']."</td><td>".$row['Marca']."</td>
								<td>".$row['Color']."</td><td>".$row['Talle']."</td><td>".$row['Stock']."</td><td>".$row['Precio']."</td>
								<td>
								<a href=form_venderproducto.php><button class='abm'>Vender</button></a>";
								$consulta=mysqli_query($conexion, "SELECT IsAdmin FROM usuario WHERE Nombre='$_SESSION[nombre]'");
								$respuesta=mysqli_fetch_assoc($consulta);
								if($respuesta['IsAdmin']==true) {
									Echo "<a href=form_updateproducto.php><button class='abm'>Editar</button></a>
									<a href=form_deleteproducto.php><button class='abm'>Eliminar</button></a>";
								}
								Echo "</td>
							</tr>							
						</tbody>
					</table>
					";				
			}
			if($respuesta['IsAdmin']==true) {
				Echo "<br/><br/><a href=form_createproducto.php><button class='abm'>Crear un producto</button></a>";
			}
			Echo "<br/><br/><a href=admin_site.php><button>Volver</button></a>";
		}else{
			Echo "Error";
		}
	?>
</body>
</html>