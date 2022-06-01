<?php 
    $contrasena = 1234;
    $contrasenaEncriptada = hash('sha512',$contrasena);
    echo $contrasenaEncriptada; 

?>  