<?php 

	include("../conexion.php");
    include("metodosCrudPerfilPedagogico.php");
    

    $id=$_REQUEST['idE'];
    
    $obj= new metodos();
	
	
    $sql="SELECT id,
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
                 estrategias 
            from perfil_pedagogico where id='$id'";

    $datos=$obj->mostrarDatos($sql);
	foreach ($datos as $key ) 

    //$result=mysqli_query($conexion,$sql);
	//$ver=mysqli_fetch_row($result);
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Consultar</title>
</head>

<body>

    <nav class=" navbar  navbar-dark  navbar-lig navbar-expand-lg fixed-top  text-uppercase" style="background-color:	#000000 ;">
        <?php include("nav.html");?>
    </nav><br><br><br><br><br>



    <div class="container " style="text-align:center">
        <div class="form-row">
            <div class="col-1">
            </div>
            <div class="col-10">
                <form name="formulario" action="procesos_perf_pedagogico/actualizar.php?ida=<?php echo $key['id'];?>"
                    method="POST" class="needs-validation" novalidate>
                    <?php  include("form_cons_perfil_pedagogico.php");?>
                </form> <br>
            </div>
        </div>
    </div>






    <script src=../JS/validar.js> </script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="JS/del_edit.js"></script>
</body>

</html>