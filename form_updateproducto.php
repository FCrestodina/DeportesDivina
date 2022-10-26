<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar producto</title>
</head>

<body>
	<h2>Modificación de un producto</h2>
    <form action="updateproducto.php" method="post" ><br />  
        <label>Id
        	<input name="Id" type="text" maxlength="255" required />
        </label><br />
        <label>Deporte
        	<input name="Deporte" type="text" maxlength="255" required />
        </label><br />
        <label>Nombre
        	<input name="Nombre" type="text" maxlength="255" required />
        </label><br />
        <label>Marca
        	<input name="Marca" type="text" maxlength="255" required />
        </label><br />
        <label>Color
        	<input name="Color" type="text" maxlength="255" required />
        </label><br />
        <label>Talle
        	<input name="Talle" type="text" maxlength="255" required />
        </label><br />
        <label>Stock
        	<input name="Stock" type="text" maxlength="255" required />
        </label><br />
        <label>Precio de Venta
        	<input name="Precio" type="text" maxlength="255" required />
        </label><br />
        <label>Proveedor
        	<input name="Proveedor" type="text" maxlength="255" required />
        </label><br />
        <label>Mail del Proveedor
            <input type="email" name="MailProveedor " />
        </label><br />
        <label>Fecha de Reposición
            <input type="email" name="email" />
        </label><br />
        <label>Telefono del Proveedor
            <input type="text" name="TelefonoProveedor" maxlength="255" required />
        </label><br />
        <label>Costo de Compra
            <input type="text" name="Costo" required />
        </label><br /><br />  
        <input type="submit" value="UpdateProducto"/>	
    </form>

</body>
</html>