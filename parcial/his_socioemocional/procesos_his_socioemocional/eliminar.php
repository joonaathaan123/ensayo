<?php 

	include("../../conexion.php") ;
	include("../metodosCrud_his_socioemocional.php");
	
					$id=$_GET['idE'];
						$obj= new metodos();
						if($obj->eliminarDatosNombre($id)==1){
						header("location:../list_his_socioemocional.php");
						}else{
							echo "fallo al agregar";
						}
 ?>