<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Panel</title>
</head>
<body>
<?php

if($_SESSION['logueado']===true) {
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo "<a href='salir.php'>Cerrar sesion</a>";	
}else{
	echo "Solo usuarios registrados...";
	include("form_login.php");
}
?>
</body>
</html>