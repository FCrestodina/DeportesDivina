<?php session_start();?>
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
                <li><a href='http://deportesdivina.com.ar/' target='_blank'>Sitio Web</a></li>
                <li><a href='https://m.facebook.com/people/Divina-Deportes/100043234313649/' target='_blank'>Facebook</a></li>
                <li><a href='https://www.instagram.com/divina_deportes/' target='_blank'>Instagram</a></li>
            </ul>            
            </nav>
            <a class='btn' href='form_login.php'><button>Acceder</button></a>
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