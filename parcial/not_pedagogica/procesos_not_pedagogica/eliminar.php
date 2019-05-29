<?php 

	include("../../conexion.php") ;
	include("../metodosCrudnot_pedagogica.php");
	
					$id=$_GET['idE'];
						$obj= new metodos();
						if($obj->eliminarDatosNombre($id)==1){
						header("location:../list_not_pedagogica.php");
						}else{
							echo "fallo al agregar";
						}
 ?>