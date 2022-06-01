<?php session_start(); 
    if(!isset($_SESSION['idRol'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .superior{
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding:10px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="superior">
             Bienvenido <?php echo $_SESSION['email']; ?> 
             <a href="Controlador/controladorUsuario.php?CerrarSesion">Cerrar Sesion</a>
        </div>
        <div class="medio">
            <div class="izquierdo">
                <?php
                if($_SESSION['idRol'] == 2){
                ?>
                    <a href="Vista/listarCategoria.php">Categoria</a> <br>
                    <a href="Vista/listarProducto.php">Producto</a>
                <?php
                }else {
                    ?>
                    <a href="Vista/listarProducto.php">Producto</a>
                    <?php
                }
                ?>
                
            </div>
            <div class="derecho">
                Crud Basico    
            </div>
        </div>
    </div>
    
</body>
</html>