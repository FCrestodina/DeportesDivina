<?php
    $email=$_POST['email'];
    $asunto=$_POST['Asunto'];
    $texto=$_POST["Texto"];

    $destino="francresto00@gmail.com";
    $header="From: <".$email.">";
    
    try{
    mail($destino,$asunto,$texto,$header);
    }
    catch(Exception $e){
        echo "Su correo ha sido enviado.";
    }finally{
        echo "Su correo no ha podido ser enviado.";
    }
    header("Location:stock.php");
?>