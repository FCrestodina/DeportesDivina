<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Acceso</title>
</head>

<body>
	<h2>Acceso a intranet de Divina Deportes</h2>
	<form action="login.php" method="post">
    	<label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="255" requiered />
        </label><br />
        <label>Contraseña
        	<input type="password" name="password" maxlength="255" requiered/>
        </label><br />
        	<input type="submit" value="Login"/>	
    </form>
    <a href="form_registro.php">Registrate</a> si no dispones de un usuario.
</body>
</html>