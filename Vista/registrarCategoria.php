<?php require_once('layoutSuperior.php') ?>
    <form style="text-align:center;" action="../Controlador/controladorCategoria.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" id="nombre" />
        <br> <br>
        <button type="submit" name="Registrar">Registrar</button>
    </form>
<?php require_once('layoutInferior.php') ?>