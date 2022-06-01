<?php
require_once('../Controller/controlador_cliente.php');
$cliente = $controladorCliente->buscarCliente($_REQUEST['idCliente']);
//var_dump($cliente->getidCliente());

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar Cliente</title>
	<link rel="stylesheet" href="../assets/styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<header>
	<h1>Actualizar Cliente</h1>
	<a href="../Controller/controlador_cliente.php?views=listar_cliente.php">Cancelar</a>
</header>
<form action="../Controller/controlador_cliente.php" method="POST">
	<label for="id">ID:</label>
	<input id="id" type="text" name="idCliente" value="<?php echo $cliente->getidCliente(); ?>"  required > <br>
	<label for="nomb">Nombre:</label>
	<input id="nomb" type="text" name="nombre" value="<?php echo $cliente->getnombre(); ?>" required > <br>
	<label for="ap">Apellido</label>
	<input id="ap" type="text" name="apellido" value="<?php echo $cliente->getapellido(); ?>" required> <br>
	<label for="tel">Télefono</label>
	<input id="tel" type="number" name="telefono" value="<?php echo $cliente->gettelefono(); ?>" required> <br>
	<label for="fc">Fecha nacimiento</label>
	<input id="fc" type="date" name="fechaNacimiento" value="<?php echo $cliente->getfechaNacimiento(); ?>" required> <br>
	<label for="email">Email</label>
	<input id="email" type="email" name="email" value="<?php echo $cliente->getemail(); ?>" required> <br>
	<label for="sexo">Sexo: </label>
	<select name="genero" id="sexo" > <br>
		<option name="femenino" <?php ($cliente->getgenero() == 'F')?  "checked": "";?> value="F" >F</option>
		<option name="masculino" <?php ($cliente->getgenero() == 'M')? "checked": "";?> value="M">M</option>
	</select> <br>
	<label for="idUser">ID Usuario: </label>
	<input id="idUser" type="number" name="idUsuario" value="<?php echo $cliente->getidUsuario(); ?>" required> <br> <br>
	<button type="submit" name="Actualizar">Actualizar</button>
</form>
</body>
<script>
</script>
</html>
