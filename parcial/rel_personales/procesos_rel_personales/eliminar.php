<?php 

	include("../../conexion.php") ;
	include("../metodosCrud_rel_personales.php");
	
					$id=$_GET['idE'];
						$obj= new metodos();
						if($obj->eliminarDatosNombre($id)==1){
						header("location:../list_rel_personales.php");
						}else{
							echo "fallo al agregar";
						}
 ?>