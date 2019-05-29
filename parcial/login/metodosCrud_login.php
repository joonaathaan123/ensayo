<?php


	class metodos{

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT INTO login_p  (id,
			nombres,
			apellidos,
			pass
			 )
		  VALUES (
		  '$datos[0]', 
		  '$datos[1]',
		  '$datos[2]',
		  '$datos[3]')";

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

			$sql="UPDATE seguimiento set fecha  = '$datos[0]', 
			nombreEstudiate = '$datos[1]', 
			identificacion  = '$datos[2]', 
			fechaNacimiento  = '$datos[3]', 
			ciUdadOrigen  = '$datos[4]', 
			edadactual  = '$datos[5]', 
			cursoActual  = '$datos[6]', 
			Repitenciacurso  = '$datos[7]', 
			viveEstudiante  = '$datos[8]', 
			nombreV  = '$datos[9]', 
			edadV  = '$datos[10]', 
			direccioV  = '$datos[11]', 
			telefonoV  = '$datos[12]', 
			profesionV  = '$datos[13]', 
			nombreP  = '$datos[14]', 
			escolarizacionP  = '$datos[15]', 
			direccionP  = '$datos[16]', 
			edadP  = '$datos[17]', 
			ocupacionP  = '$datos[18]', 
			telefonoP  = '$datos[19]', 
			nombreM  = '$datos[20]', 
			escolarizacionM  = '$datos[21]', 
			direccionM  = '$datos[22]', 
			edadM  = '$datos[23]', 
			ocupacionM  = '$datos[24]', 
			telefonoM = '$datos[25]', 
			nombreO  = '$datos[26]', 
			escolarizacionO = '$datos[27]', 
			direccionO = '$datos[28]', 
			edadO = '$datos[29]', 
			ocupacionO = '$datos[30]', 
			telefonoO = '$datos[31]'
									     where ID = '$datos[32]'";
			return $result=mysqli_query($conexion,$sql);

			

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from seguimiento where id='$id'";

			return $result=mysqli_query($conexion,$sql);
		}

		



	}
    


?>