<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
    	<input type="text" name="paterno" placeholder="Apellido paterno">
		<input type="text" name="materno" placeholder="Apellido materno">
		<input type="text" name="correo" placeholder="Correo electronico">
		<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("empleado.php");
        ?>
</body>
</html>

