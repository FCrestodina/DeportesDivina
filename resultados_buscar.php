<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lista de productos</title>
<link rel="stylesheet" href="tabla.css">
</head>

<body>
<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT Id, Deporte, Nombre, Marca, Color, Talle, Stock, Precio FROM producto WHERE Nombre LIKE '%$buscar%' ");
?>
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($row=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	Echo"
				<table>
						<thead>
							<tr>
								<th>Id</th><th>Deporte</th><th>Nombre</th><th>Marca</th><th>Color</th><th>Talle</th>
								<th>Stock</th><th>Precio</th><th></th>
							</tr>
						</thead>
				</table>
				<table>
						<tbody>
							<tr>
								<td>".$row['Id']."</td><td>".$row['Deporte']."</td><td>".$row['Nombre']."</td><td>".$row['Marca']."</td>
								<td>".$row['Color']."</td><td>".$row['Talle']."</td><td>".$row['Stock']."</td><td>".$row['Precio']."</td>
								<td>
								<a href=form_venderproducto.php target='_blank'><button class='abm'>Vender</button></a>
								<a href=form_updateproducto.php target='_blank'><button class='abm'>Editar</button></a>
								<a href=form_deleteproducto.php target='_blank'><button class='abm'>Eliminar</button></a>
								</td>
							</tr>							
						</tbody>
					</table>
					";	
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);
		Echo "<br/><br/><a href=list_productos.php><button>Volver</button></a>";

	?>
</article>
</section>

</body>
</html>