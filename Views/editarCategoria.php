<?php

require_once('../Controller/controladorCategoria.php');
$categoria = $controladorCategoria->buscarCategoria($_REQUEST['idCategoria']);
//var_dump($categoria);
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="../Controller/controladorCategoria.php" method="post" style="text-align:center">
            <label for="id">Id: </label> 
            <input type="number" id="id" value='<?php echo $categoria->getid();?>' name="idCategoria" readonly  > <br> <br>
            <label for="name">Name: </label> 
            <input type="text" id="name" name="nombre" value='<?php echo $categoria->getnombre();?>' > <br>    <br>
            <input type="submit" name="Actualizar" value="Actualizar">
        </form>
    </body>
    </html>
