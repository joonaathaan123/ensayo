<?php


	class metodos{

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT INTO notificacion_caso  (nr,
												  fecha,
												  edad,
												  grado,
												  estudiante,
												  asistencia,
												  motivo,
												  descripcion,
												  comentariog,
												  compromisodoc,
												  compromisopad,
												  conclusiones	
			
												   )
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

			$sql="UPDATE notificacion_caso set fecha = '$datos[0]',
												  edad = '$datos[1]',
												  grado = '$datos[2]',
												  estudiante = '$datos[3]',
												  asistencia = '$datos[4]',
												  motivo = '$datos[5]',
												  descripcion = '$datos[6]',
												  comentariog = '$datos[7]',
												  compromisodoc = '$datos[8]',
												  compromisopad = '$datos[9]',
												  conclusiones = '$datos[10]'
									   			  where nr	 = '$datos[11]'";
			return $result=mysqli_query($conexion,$sql);

			

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from notificacion_caso where nr='$id'";

			return $result=mysqli_query($conexion,$sql);
		}

		



	}
    


?>