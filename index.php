<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Acceso</h1>
    <form action="Controlador/controladorUsuario.php" method="POST">
        <label for="email"></label>
        <input type="text" id="email" name="email"> <br>
        <label for="contrasenia"></label>
        <input type="password" id="contrasenia" name="contrasenia"> <br> <br>
        <input type="submit" name="Acceder" value="Acceder">
    </form>
</body>
</html>