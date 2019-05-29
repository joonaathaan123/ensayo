<?php 

	include("../../conexion.php") ;
	include("../metodosCrud_seguimiento.php");
	
					$id=$_GET['idE'];
						$obj= new metodos();
						if($obj->eliminarDatosNombre($id)==1){
						header("location:../list_seguimiento.php");
						}else{
							echo "fallo al agregar";
						}
 ?>