<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registrar usuario</title>
</head>

<body>
	<h2>Registrar usuario en la intranet de Deportes Divina</h2>
    <form action="registro.php" method="post" >
        <label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="30" minlength="5" required />
        </label><br />
        <label>Email
            <input type="email" name="email" required />
        </label><br />
        <label>Contraseña
            <input type="password" name="password" maxlength="30" minlength="5" required />
        </label><br />
        <label>Admin
            <input type="checkbox" name="admin" />
        </label><br />
        <label>Nombre
            <input type="text" name="nombre" maxlength="30" minlength="3" required />
        </label><br />
        <input type="submit" value="Registrarse"/>	
    </form>

</body>
</html>