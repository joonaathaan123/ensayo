<?php 
	include("../conexion.php");
    include("metodosCrud_his_socioemocional.php");
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
	 crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<title>Lista De Perfil Pedagógico</title>
</head>

<body>


	<nav class=" navbar  navbar-dark  navbar-lig navbar-expand-lg fixed-top  text-uppercase" style="background-color:	#000000 ;">
		<?php include("nav.html");?>
	</nav><br><br><br><br><br><br>



	<div class="container " style="text-align:center">
		<div class="form-row">

			<div class="col-1">
			</div>

			<div class="col-10">


				<h2>Lista De Historial Socioemocional</h2>
				<hr />

				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nº De HistoriaL Socioemocional</th>
							<th scope="col">Nº De Identificacion</th>
							<th scope="col">Nombre</th>
							<th scope="col">apellidos</th>
							<th scope="col">Acciones</th>
						</tr>
					</thead>
					<tbody>

						<?php
					
					

					$c= new conectar();
					$conexion=$c->conexion();
					$sql =  mysqli_query($conexion, "SELECT id, numeroid, nombres, apellidos FROM historial_socioemocional ORDER BY id ASC");

					$row_consulta=mysqli_num_rows($sql);

					if( $row_consulta== 0){
						echo '<tr><td colspan="8">No hay datos.</td></tr>';
					}else{
						$no = 1;
						while($row = mysqli_fetch_assoc($sql)){
						
						echo '	
						<tr>
							<th scope="row">'.$no.'</th>
							<td>'.$row['id'].'</td>
							<td>'.$row['numeroid'].'</td>
							<td>'.$row['nombres'].'</td>
							<td>'.$row['apellidos'].'</td>

							<td>
							<a class="btn btn-primary" href="cons_his_socioemocional.php?idE='.$row['id'].'" title="Editar Datos" ><i class="fas fa-user-edit"></i></a>
							<a class="btn btn-info" href="ver_his_socioemocional.php?idE='.$row['id'].'" title="Ver Datos" ><i class="fas fa-eye"></i></a>
							<a class="btn btn-danger" onclick="return confirm(\'Esta seguro de borrar los datos de '.$row['nombres'].'?\')" href="procesos_his_socioemocional/eliminar.php?idE='.$row['id'].'" title="Eliminar Datos" class="glyphicon glyphicon-trash"><i class="far fa-trash-alt"></i></i></a>
							</td>

						</tr>
							';
							
							$no++;
						}

					}

					

					?>

					</tbody>
				</table>
			</div>
			<div class="col-1">
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
	 crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
					

</body>

</html>