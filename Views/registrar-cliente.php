<?php
include_once('../Controller/controlador_cliente.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar Cliente</title>
	<link rel="stylesheet" href="../assets/styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<header>
	<h1>Registar Cliente</h1>
	<a href="../Controller/controlador_cliente.php?views=listar_cliente.php">Clientes Registrados</a>
</header>
<form action="" method="POST">
	<label for="nomb">Nombre</label>
	<input id="nomb" type="text" name="nombre" required> <br>
	<label for="ap">Apellido</label>
	<input id="ap" type="text" name="apellido" required> <br>
	<label for="tel">Télefono</label>
	<input id="tel" type="number" name="telefono" required> <br>
	<label for="fc">Fecha nacimiento</label>
	<input id="fc" type="date" name="fechaNacimiento" required> <br>
	<label for="email">Email</label>
	<input id="email" type="email" name="email" required> <br>
	<label for="sexo">Sexo: </label>
	<select name="sexo" id="sexo"> <br>
		<option value="-">---</option>
		<option name="femenino" value="F">F</option>
		<option name="masculino" value="M">M</option>
	</select> <br>
	<label for="idUser">ID Usuario: </label>
	<input id="idUser" type="number" name="idUsuario" required> <br> <br>
	<button type="submit" name="Registrar">Agregar</button>
</form>
</body>
<script>
</script>
</html>
