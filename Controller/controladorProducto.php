<?php
require_once('../Model/Producto.php');
require_once('../Model/crudProducto.php');

class controladorCategoria{
   
    public function __construct(){

    }

    public function listarProducto(){
        $crudProducto = new crudProducto();
        $listaProducto = $crudProducto->listarProducto();
        return $listaProducto;
    }
	
	public function registrarProducto($nombre){
		$categoria = new Producto();
		$categoria->setid('');
		$categoria->setnombre($nombre);
		
		//solicitar al crudcategoria realice la inserccion
		$crudProducto = new crudProducto();
		$mensaje = $crudProducto->registrarProducto($categoria);
		
		// echo "
		//  	<script>
		//  		alert('$mensaje');
		//  		document.location.href = '../Views/listarProducto.php';
		//  	</script>
		// ";
		
		
		echo "
			<script>
		 		const form = document.querySelector('form');
		  		form.appendchild('afterend',$mensaje);
		 		document.location.href = '../Views/listarProducto.php';
		 	</script>
		";
	}

	public function buscarCategoria($id){
		$categoria = new Categoria();
		$categoria->setid($id);
		//$categoria->setid($nombre);

		$crudCategoria = new crudCategoria();
		$datosCategoria =  $crudCategoria->buscarCategoria($categoria);//Llamar método del CRUD
		//var_dump($datosCategoria);
		$categoria->setnombre($datosCategoria['nombre']);
		return $categoria;
	}

	public function actualizarCategoria($idCategoria,$nombre){
		$categoria = new Categoria();
		$categoria->setid($idCategoria);
		$categoria->setnombre($nombre);
		
		//solicitar al crudcategoria realice la actualizacion
		$crudCategoria = new crudCategoria();
		$crudCategoria->actualizarCategoria($categoria);
	}

	public function eliminarCategoria($idCategoria){
		$categoria = new Categoria();
		$categoria->setid($idCategoria);
		
		//solicitar al crudcategoria realice la actualizacion
		$crudCategoria = new crudCategoria();
		$crudCategoria->eliminarCategoria($categoria);
	}

	public function desplegarVista($pagina){
		header("Location:../Views/".$pagina);
	}

}

$controladorCategoria = new controladorCategoria();
$listaCategoria = $controladorCategoria->listarCategoria();
//var_dump($controladorCategoria->listarCategoria()); 
  
if(isset($_POST['Registrar'])){
	$nombre = $_POST['nombre'];
	$controladorCategoria->registrarCategoria($nombre);
}else if(isset($_POST['Editar'])){
	$idCategoria = $_POST['idCategoria'];
	$controladorCategoria->desplegarVista("editarCategoria.php?idCategoria=$idCategoria");
}else if(isset($_REQUEST['Actualizar'])){
	$idCategoria = $_REQUEST['idCategoria'];
	$nombre = $_REQUEST['nombre'];
	$controladorCategoria->actualizarCategoria($idCategoria,$nombre);
}else if(isset($_REQUEST['vista'])){
	$controladorCategoria->desplegarVista($_REQUEST['vista']);
}else if(isset($_REQUEST['Eliminar'])){
	$idCategoria = $_REQUEST['idCategoria'];
	$controladorCategoria->eliminarCategoria($idCategoria);
}


// //Crear o instanciar 1 objeo de la clase Categoria
// $categoria1 = new Categoria();

// //var_dump($categoria1);
// $categoria1->setid($_POST["id"]);
// $categoria1->setnombre($_POST["nombre"]);


// echo " <br> El id de la categoria es: ". $categoria1->getid(). "<br>";
// echo " <br> El Nombre de la categoria es: ". $categoria1->getnombre(). "<br>";
?>