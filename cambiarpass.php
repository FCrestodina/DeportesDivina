<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password</title>
</head>

<body>
<?php

include("conexion.php");
session_start();

    $usuario=$_POST['usuario'];
    $newPass=$_POST['NewPassword'];
    $oldPass=$_POST["OldPassword"];
    $cifrada = password_hash($newPass, PASSWORD_DEFAULT);
    
    $resultado=mysqli_query($conexion, "UPDATE usuario SET Password = '$cifrada' WHERE Usuario = '$usuario' AND Password = '$oldPass'");
    header("Location:form_login.php");

?>
</body>
</html>