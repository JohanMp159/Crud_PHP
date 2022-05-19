<?php
class  Categoria{
    //Definicion de atributos
    private $id;
    private $nombre;

    //Definir el constructor
    public function __construct(){ 

    }

    //Definicion de métodos set(id), Es decir asignar valores a los atributos.
    public function setid($id){
        $this->id = $id; //Asigno al atributo id el valor de la variable $id
    }

    public function setnombre($nombre){
        $this->nombre = $nombre;
    }

    public function getid(){
        return $this->id;
    } 

    public function getnombre(){
        return $this->nombre;
    }

}

?>