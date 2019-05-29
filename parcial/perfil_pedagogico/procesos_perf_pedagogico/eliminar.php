<?php 

	include("../../conexion.php") ;
	include("../metodosCrudPerfilPedagogico.php");
	
					$id=$_GET['idE'];
						$obj= new metodos();
						if($obj->eliminarDatosNombre($id)==1){
						header("location:../list_perfil.php");
						}else{
							echo "fallo al agregar";
						}
 ?>