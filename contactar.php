<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar</title>
</head>

<body>
<?php

include("conexion.php");
session_start();
try{
    $email=$_POST['email'];
    $asunto=$_POST['Asunto'];
    $texto=$_POST["Texto"];
    
    $destino="francresto00@gmail.com";
    $mensaje=" Email: ".$email." Mensaje: ".$texto;
    
    $header="From: <".$email.">";
    
    try{
    mail($destino,$asunto,$mensaje,$header);
    }
    catch(Exception $e){
        echo "Su correo ha sido enviado.";
    }finally{
        echo "Su correo no ha podido ser enviado.";
    }
    Echo "<br/><br/><a href=stock.php><button>Volver</button></a>";
} catch (Exception $e){}

?>
</body>
</html>