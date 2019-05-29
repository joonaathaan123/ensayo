<?php


	class metodos{

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT INTO historial_socioemocional( id,	 	 	
														numeroid,
														nombres,
														apellidos,
														tiempo_libre,
														r_interpersonale,
														com_est_animo,
														eventos_trau,
														proy_vida,
														antecedente_salud,
														antecedente_ap
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
														'$datos[9]')";

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

			$sql="UPDATE historial_socioemocional set numeroid = '$datos[0]',
													  nombres= '$datos[1]',
													  apellidos= '$datos[2]',
													  tiempo_libre= '$datos[3]',
													  r_interpersonale= '$datos[4]',
													  com_est_animo= '$datos[5]',
													  eventos_trau= '$datos[6]',
													  proy_vida= '$datos[7]',
													  antecedente_salud= '$datos[8]',
													  antecedente_ap= '$datos[9]' 	 
									   where id = '$datos[10]'";
			return $result=mysqli_query($conexion,$sql);

			

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from historial_socioemocional where id='$id'";

			return $result=mysqli_query($conexion,$sql);
		}

		



	}
    


?>