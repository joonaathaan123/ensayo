<?php


	class metodos{

		public function insertarDatosNombre($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT INTO relaciones_familiares(id,
														  numeroid,
														  nombres,
														  apellidos,
														  vr_ep,
														  vr_em,
														  vr_eh,
														  vr_ea,
														  vr_eo,
														  observaciones,
														  historia_escol,
														  habitos_estu)
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

			$sql="UPDATE relaciones_familiares set 
			
			numeroid= '$datos[0]',
        	nombres = '$datos[1]',
        	apellidos  = '$datos[2]',
        	vr_ep  = '$datos[3]',
			vr_em  = '$datos[4]',
			vr_eh  = '$datos[5]',
			vr_ea  = '$datos[6]',
			vr_eo  = '$datos[7]',
			observaciones  = '$datos[8]',
			historia_escol = '$datos[9]',
			habitos_estu = '$datos[10]'
									   where id = '$datos[11]'";
			return $result=mysqli_query($conexion,$sql);


			

		}
		public function eliminarDatosNombre($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from relaciones_familiares where id='$id'";

			return $result=mysqli_query($conexion,$sql);
		}

		



	}
    


?>