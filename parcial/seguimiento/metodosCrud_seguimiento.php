<?php


	class metodos{

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT INTO seguimiento ( id,
											fecha,
											nombreestudiate,
											identificacion,
											fechanacimiento,
											ciudadorigen,
											edadactual,
											cursoactual,
											repitenciacurso,
											viveestudiante,
											nombrev,
											edadv,
											direcciov,
											telefonov,
											profesionv,
											nombrep,
											escolarizacionp,
											direccionp,
											edadp,
											ocupacionp,
											telefonop,
											nombrem,
											escolarizacionm,
											direccionm,
											edadm,
											ocupacionm,
											telefonom,
											nombreo,
											escolarizaciono,
											direcciono,
											edado,
											ocupaciono,
											telefonoo
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
												'$datos[10]',
												'$datos[11]',
												'$datos[12]',
												'$datos[13]',
												'$datos[14]',
												'$datos[15]',
												'$datos[16]',
												'$datos[17]',
												'$datos[18]',
												'$datos[19]',
												'$datos[20]',
												'$datos[21]',
												'$datos[22]',
												'$datos[23]',
												'$datos[24]',
												'$datos[25]',
												'$datos[26]',
												'$datos[27]',
												'$datos[28]',
												'$datos[29]',
												'$datos[30]',
												'$datos[31]')";

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