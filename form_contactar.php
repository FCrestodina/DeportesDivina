<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacto</title>
</head>

<body>
	<h2>Contacto a proveedor desde la intranet de Deportes Divina</h2>
    <form action="contactar.php" method="post" >
        <label>Email del proveedor:
        	<input name="email" type="email" maxlength="255" />
        </label><br />
        <label>Telefono del proveedor
            <input name="TelefonoProveedor" type="text" />
        </label><br />
        <label>Asunto
            <input name="Asunto" type="text" maxlength="255" required />
        </label><br />
        <label>Texto
            <textarea name="Texto"></textarea>
        </label><br />
        <input type="submit" value="Enviar"/>	
    </form>
</body>
</html>