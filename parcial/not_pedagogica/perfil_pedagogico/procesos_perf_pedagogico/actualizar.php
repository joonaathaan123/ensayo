<?php 

	include( "../../conexion.php");
    include("../metodosCrudPerfilPedagogico.php");


    $id=$_GET['ida'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $socioafectiva = $_POST['socioafectiva'];
    $cognitiva = $_POST['cognitiva'];
    $comunicacion = $_POST['comunicacion'];
    $moral = $_POST['moral'];
    $fortalezas = $_POST['fortalezas'];
    $debilidades = $_POST['debilidades'];
    $barreras = $_POST['barreras'];
    $estrategias = $_POST['estrategias'];



	$datos=array(
			$nombre,
            $edad,
            $fecha,
            $socioafectiva,
            $cognitiva,
            $comunicacion,
            $moral,
            $fortalezas,
            $debilidades,
            $barreras,
            $estrategias,
			$id
				);
	$obj= new metodos();

	if($obj->actualizaDatos($datos)==1){
        header("location:../list_perfil.php");
	}else{
		echo "fallo al agregar";
    }
    
 ?>