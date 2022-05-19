<?php
require_once('Conexion.php');

class crudCategoria{
    //Aqui haremos las transacciones a la base de datos
    public function __construct(){
        
    }

    public function listarCategoria(){
        $baseDatos = Conexion::conectar();
        $sql = $baseDatos->query('SELECT * FROM categoria');
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetchAll()); //Retornar el resultado de la consulta
    }
	
	public function registrarCategoria($categoria){
		$mensaje = "";
		$baseDatos = Conexion::conectar();
		$sql = $baseDatos->prepare('INSERT INTO categoria (idCategoria,nombre)VALUES(:id,:nombre) '); //e: = datos de entrada (versatil, 																												indicamos los atributos
		$sql->bindValue('id',$categoria->getid());//bindValue(Primer parametro es el valor enviado, el segudo parametro es donde obtenemos la variable)
		$sql->bindValue('nombre',$categoria->getnombre());
		
		try{
			$sql->execute();
			$mensaje = "Registro exitoso";
		} catch (Exception $excepcion) {
			echo $excepcion->getMessage();
		}
        
		Conexion::desconectar($baseDatos);
		return $mensaje;
	}

	public function buscarCategoria($categoria){
        $baseDatos = Conexion::conectar();
        $sql = $baseDatos->query("SELECT * FROM categoria WHERE idCategoria=".$categoria->getid());
        $sql->execute();
        Conexion::desconectar($baseDatos);
        return($sql->fetch()); //Retornar el resultado de la consulta
    }

    public function actualizarCategoria($categoria){
		$baseDatos = Conexion::conectar();
		$sql = $baseDatos->prepare('UPDATE categoria SET nombre = :nombre WHERE idCategoria = :idCategoria'); //e: = datos de entrada (versatil, 																												indicamos los atributos
		$sql->bindValue('idCategoria',$categoria->getid());//bindValue(Primer parametro es el valor enviado, el segudo parametro es donde obtenemos la variable)
		$sql->bindValue('nombre',$categoria->getnombre());
		
		try{
			$sql->execute();
			print "Actualizacion exitosa";
            header('Location: ../Views/listarCategoria.php');
		} catch (Exception $excepcion) {
			echo $excepcion->getMessage();
            echo " Problemas en la actualización";
		}
        
		Conexion::desconectar($baseDatos);
	}

    public function eliminarCategoria($categoria){
		$baseDatos = Conexion::conectar();
		$sql = $baseDatos->prepare('DELETE FROM categoria WHERE idCategoria = :idCategoria'); //e: = datos de entrada (versatil, 																												indicamos los atributos
		$sql->bindValue('idCategoria',$categoria->getid());//bindValue(Primer parametro es el valor enviado, el segudo parametro es donde obtenemos la variable)

		try{
			$sql->execute();
			print "Eliminación exitosa";
            header('Location: ../Views/listarCategoria.php');
		} catch (Exception $excepcion) {
			echo $excepcion->getMessage();
            echo " Problemas en la actualización";
		}
        
		Conexion::desconectar($baseDatos);
	}

}

?>