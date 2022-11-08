<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vender producto</title>
</head>

<body>
	<h2>Venta de un producto</h2>

    <form action='venderproducto.php' method='post' ><br />  
        <label>Id
        	<input name='Id' type='text' maxlength='255'/>
        </label><br>
        <label>Cantidad
            <input name='Cantidad' type='text' required />
        </label><br /><br />  
        <input type='submit' value='Vender'/>	
    </form>
</body>
</html>