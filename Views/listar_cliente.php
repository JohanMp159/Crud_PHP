<?php
include_once('../Controller/controlador_cliente.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<header>
	<h1>Clientes Registrados</h1>
	<a href="../Controller/controlador_cliente.php?views=registrar-cliente.php">Registrar Cliente</a>
</header>	
<table>
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Télefono</th>
			<th>Fecha nacminiento</th>
			<th>Email</th>
			<th>Género</th>
			<th>Id Usuario</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach($listaCliente as $cliente){
			echo '
				<tr>
					<td>'.$cliente["nombre"].'</td>
					<td>'.$cliente["apellido"].'</td>
					<td>'.$cliente["telefono"].'</td>
					<td>'.$cliente["fechaNacimiento"].'</td>
					<td>'.$cliente["email"].'</td>
					<td>'.$cliente["genero"].'</td>
					<td>'.$cliente["idUsuario"].'</td>
					<td> 
						<form id="frm'.$cliente["idCliente"].'" action="../Controller/controlador_cliente.php" method="POST">
							<input type="hidden" name="idCliente" value="'.$cliente["idCliente"].'" />
							<button type="submit" name="Editar" >Editar</button>
							
							<input type="hidden" name="Eliminar" value="'.$cliente["idCliente"].'" >
							<button type="button" id="'.$cliente["idCliente"].'" onclick="validarEliminacion('.$cliente['idCliente'].')" name="Eliminar"> Eliminar </button>
						</form>
					</td>
				</tr>
			';
		}
	?>
	</tbody>
</table>
<script>

	 function validarEliminacion(idCategoria){
            if(confirm('¿Realmente desea eliminar?')){
               console.log(document.getElementById('frm'+idCategoria));
               document.getElementById('frm'+idCategoria).submit();
            }
        }
        
</script>
</body>
</html>