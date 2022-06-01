<?php
require_once('conexion.php');

class CrudUsuario{
    public function validarAcceso($usuario){
      $baseDatos = Conexion::conectar();
      $sql = $baseDatos->query("SELECT * FROM usuario WHERE email='".$usuario->getemail()."'AND contrasenia='".$usuario->getcontrasenia()."'");
      try{
        $sql->execute();
        if($sql->rowCount()>0){
          $datosUsuario = $sql->fetch();
          $usuario->setlogueado(true);
          $usuario->setidRol($datosUsuario['idRol']);
        }
      }catch(Exception $e){

      }
      Conexion::desconectar($baseDatos);
      return($sql->fetch());
    }
}
?>