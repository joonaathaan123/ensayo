<?php


	class metodos{

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT INTO perfil_pedagogico(id,
			                               		nombre, 
			                               		edad, 
			                               		fecha, 
			                               		socioafectiva, 
			                               		cognitiva, 
												comunicacion, 
												moral, 
												fortalezas, 
												debilidades, 
												barreras, 
												estrategias)
												VALUES (
													'',
												'$datos[0]', 
												'$datos[1]',
												'$datos[2]',
												'$datos[3]',
												'$datos[4]',
												'$datos[5]',
												'$datos[6]',
												'$datos[7]',
												'$datos[8]',
												'$datos[9]',
												'$datos[10]')";

			return $result=mysqli_query($conexion,$sql);
		}																		



		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
	

		public function actualizaDatos($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE perfil_pedagogico set nombre = '$datos[0]',
									   edad = '$datos[1]',
			                           fecha = '$datos[2]',
			                           socioafectiva = '$datos[3]',
									   cognitiva = '$datos[4]',
							     	   comunicacion = '$datos[5]',
							     	   moral = '$datos[6]',
							     	   fortalezas = '$datos[7]',
							     	   debilidades = '$datos[8]',
							     	   barreras = '$datos[9]',
									   estrategias = '$datos[10]'		
									   where id = '$datos[11]'";
			return $result=mysqli_query($conexion,$sql);

			

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from perfil_pedagogico where id='$id'";

			return $result=mysqli_query($conexion,$sql);
		}

		



	}
    


?>