<?php session_start();

$usuario=$_POST['usuario'];
$password=$_POST['password'];

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT Usuario, Password, Nombre FROM usuario WHERE Usuario='$usuario'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_assoc($consulta);
	$passwordHash = $respuesta['Password'];
	
	if(password_verify($password, $passwordHash)){

        $_SESSION['logueado'] = true;
        $_SESSION['nombre']=$respuesta['Nombre'];
        header("Location:index_logged.php");
    }else{
		echo "Usuario o contraseña incorrectos, por favor, pruebe nuevamente.";
		include ("form_login.php");
    }
}else{
	echo "Usuario o contraseña incorrectos, por favor, pruebe nuevamente.";
	include ("form_login.php");
}
?>
</body>
</html>