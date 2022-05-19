<?php
require_once('../Controller/controladorCategoria.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Categorias</title>
</head>
<body>
    <a href="../Controller/controladorCategoria.php?vista=registrarCategoria.php">Registrar</a>
    <h1 align="center">Categorías</h1>
    <table border="1" align="center">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listaCategoria as $categoria){
                	echo '<tr>
						<td>'.$categoria['idCategoria'].'</td>
						<td>'.$categoria['nombre'].'</td>
                        <td>
                            <form id="frmCategoria'.$categoria["idCategoria"].'" method="POST" action="../Controller/controladorCategoria.php">
                                <input type="hidden" name="idCategoria" value="'.$categoria["idCategoria"].'">
                                <input type="submit" value="Editar" name="Editar"> 
                                <button type="button" onclick="validarEliminacion('.$categoria["idCategoria"].')"> Eliminar </button>
                                <input type="hidden" name="Eliminar">
                            </form> 
                        </td>
					</tr>';
				}
            ?>
        </tbody>
    </table>
</body>
<script>
   function validarEliminacion(idCategoria){
       if(confirm('Seguro desea eliminar')){
           document.getElementById('frmCategoria'+idCategoria).submit();
       };
   }
</script>
</html>