<?php 

	include( "../../conexion.php");
    include("../metodosCrud_rel_personales.php");


    $id=$_GET['ida'];
    $identificacion=$_POST['identificacion'];
    $nombres =$_POST['nombres'];
    $apellidos =$_POST['apellidos'];
    $relacionP =$_POST['relacionP'];
    $relacionM =$_POST['relacionM'];
    $relacionH =$_POST['relacionH'];
    $relacionA =$_POST['relacionA'];
    $relacionPM =$_POST['relacionPM'];
    $observaciones =$_POST['observaciones'];
    $hisoria =$_POST['hisoria'];
    $habitos =$_POST['habitos'];


 

	$datos=array(
        $identificacion,   
        $nombres, 
        $apellidos,   
        $relacionP,  
        $relacionM,  
        $relacionH,  
        $relacionA,  
        $relacionPM,  
        $observaciones,  
        $hisoria,
        $habitos,  
			$id
				);
	$obj= new metodos();

	if($obj->actualizaDatos($datos)==1){
        header("location:../list_rel_personales.php");
	}else{
		echo "fallo al agregar";
    }
    
 ?>