<?php 

class Usuario{
    private $idUsuario;
    private $email;
    private $contrasenia;
    private $idRol;
    private $estado;
    private $logeado;

    public function __contruct(){}

    //Métodos set
    public function setidUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }
    public function setemail($email){
        $this->email = $email;
    }
    public function setcontrasenia($contrasenia){
        $this->contrasenia = $contrasenia;
    }
    public function setidRol($idRol){
        $this->idRol = $idRol;
    }
    public function setestado($estado){
        $this->estado = $estado;
    }
    public function setlogueado($logueado){
        $this->logueado = $logueado;
    }


    //Métodos get
    public function getidUsuario(){
        return $this->idUsuario;
    }
    public function getemail(){
        return $this->email;
    }
    public function getcontrasenia(){
        return $this->contrasenia;
    }
    public function getidRol(){
        return $this->idRol;
    }
    public function getestado(){
        return $this->estado;
    }
    public function getlogueado(){
        return $this->logueado;
    }

}

?>