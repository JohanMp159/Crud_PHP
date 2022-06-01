<?php
session_start(); //Iniciamos la variable session_Start()
require_once('../modelo/Usuario.php');
require_once('../modelo/crudUsuario.php');

class ControladorUsuario{
    public function __construct(){  }

    public function validarAcceso($email,$contrasenia){
        $usuario = new Usuario();
        $usuario->setemail($email);
        $usuario->setcontrasenia(hash('sha512',$contrasenia));
        $usuario->setlogueado(false);
        $crudUsuario = new CrudUsuario();
        $crudUsuario->validarAcceso($usuario);
        //var_dump($usuario);
        if($usuario->getlogueado()===true){
            $_SESSION['idRol'] = $usuario->getidRol();
            $_SESSION['email'] = $usuario->getemail();
            header("Location:../home.php");
        }else{
            echo
            " <script>
                alert('Usuario y/o Contraseña incorrecta!..')
                document.location.href = '../index.php';
            </script> ";
        }
    }

    public function cerrarSesion(){
        session_destroy();
        header('Location: ../index.php');
    }
}

$controladorUsuario = new ControladorUsuario();
if(isset($_REQUEST['Acceder'])){
    $email = $_REQUEST['email'];
    $contrasenia = $_REQUEST['contrasenia'];
    $controladorUsuario->validarAcceso($email,$contrasenia); 
}

if(isset($_REQUEST['CerrarSesion'])){
    $controladorUsuario->cerrarSesion();
}

?>
