<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cambiar contraseña</title>
</head>

<body>
	<h2>Cambiar contraseña</h2>
    <form action="cambiarpass.php" method="post" ><br /> 
        <label>Nombre de Usuario
        	<input name="usuario" type="type" maxlength="255" required />
        </label><br /><br />
        <label>Contraseña anterior
        	<input name="OldPassword" type="password" maxlength="255" required />
        </label><br /><br /> 
        <label>Contraseña nueva
        	<input name="NewPassword" type="password" maxlength="255" required />
        </label><br /><br />   
        <input type="submit" value="Cambiar"/>	
    </form>

</body>
</html>