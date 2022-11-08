<?php session_start();
include("conexion.php")?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deportes Divina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_SESSION['logueado'])){
        if($_SESSION['logueado']===true) {        
            Echo"
    <header class='header'>
    <section>
            <img src='./img/logo.png' alt='Logo de Deportes Divina' style='width:60%; height:60%; text-align: left;'>
    </section>
        <nav>
           <ul class='nav-links'>
                <li><a href='index_logged.php'>Home</a></li>
                <li><a href='list_productos.php'>Lista de productos</a></li>";
                $consulta=mysqli_query($conexion, "SELECT IsAdmin FROM usuario WHERE Nombre='$_SESSION[nombre]'");
								$respuesta=mysqli_fetch_assoc($consulta);
								if($respuesta['IsAdmin']==true) {
									Echo "
                                    <li><a href='stock.php'>Control de stock</a></li>
                                    <li><a href='top_sellers.php'>Productos mas vendidos</a></li>
                                    <li><a href='ganancias.php'>Ganancias</a></li>";
								}
								Echo "                
           </ul>            
        </nav>
    </header>
    <div class='fondo'>
        <img src='./img/logofc.png' alt='Logo del desarrollador' style='width:100%; height:100%; position: relative; display: inline-block; text-align: center;'>
    </div>";
    }else{
        echo "Solo usuarios registrados...";
        include("form_login.php");
    }
}else{
    include("form_login.php");
}
?>
</body>
</html>