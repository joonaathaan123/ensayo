<?php 

	include( "../../conexion.php");
    include("../metodosCrudnot_pedagogica.php");


    $id=$_GET['ida'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $grado = $_POST['grado'];
    $estudiante = $_POST['estudiante'];
    $asistentes = $_POST['asistentes'];
    $motivo = $_POST['motivo'];
    $descripcion = $_POST['descripcion'];
    $comentariosGenerales = $_POST['comentarios'];
    $compromisoDocente = $_POST['compromisoDocente'];
    $compromisoPadres = $_POST['compromisoPadres'];
    $conclusiones = $_POST['conclusiones'];
    
    
 
    $datos=array(
            
        $fecha,
        $edad,
        $grado,
        $estudiante,
        $asistentes,
        $motivo,
        $descripcion,
        $comentariosGenerales,
        $compromisoDocente,
        $compromisoPadres,
        $conclusiones,
        $id);
        
        print_r ($datos); 
	$obj= new metodos();

	if($obj->actualizaDatos($datos)==1){
        header("location:../list_not_pedagogica.php");
	}else{
		echo "fallo al agregar";
    }
    
 ?>