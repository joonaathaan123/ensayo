<?php 

	include( "../../conexion.php");
    include("../metodosCrud_seguimiento.php");


    $id=$_GET['ida'];
    $fecha = $_POST['fecha'];
    $nombreEstudiate = $_POST['nombreEstudiate'];
    $identificacion = $_POST['identificacion'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $ciUdadOrigen = $_POST['ciUdadOrigen'];
    $edadActual = $_POST['edadActual'];
    $cursoActual = $_POST['cursoActual'];
    $Repitenciacurso = $_POST['Repitenciacurso'];
    $viveEstudiante = $_POST['viveEstudiante'];
    $nombreV = $_POST['nombrev'];
    $edadV = $_POST['edadv'];
    $direccioV = $_POST['direccionv'];
    $telefonoV = $_POST['telefonov'];
    $profesionV = $_POST['profesionv'];
    $nombreP = $_POST['nombreP'];
    $escolarizacionP = $_POST['escolarizacionP'];
    $direccionP = $_POST['direccionP'];
    $edadP = $_POST['edadP'];
    $ocupacionP = $_POST['ocupacionP'];
    $telefonoP = $_POST['telefonoP'];
    $nombreM = $_POST['nombreM'];
    $escolarizacionM = $_POST['escolarizacionM'];
    $direccionM = $_POST['direccionM'];
    $edadM = $_POST['edadM'];
    $ocupacionM = $_POST['ocupacionM'];
    $telefonoM = $_POST['telefonoM'];
    $nombreO = $_POST['nombreO'];
    $escolarizacionO = $_POST['escolarizacionO'];
    $direccionO = $_POST['direccionO'];
    $edadO = $_POST['edadO'];
    $ocupacionO = $_POST['ocupacionO'];
    $telefonoO = $_POST['telefonoO'];



$obj= new metodos();


        $datos=array(
            
            $fecha,
            $nombreEstudiate,
            $identificacion,
            $fechaNacimiento,
            $ciUdadOrigen,
            $edadActual,
            $cursoActual,
            $Repitenciacurso,
            $viveEstudiante,
            $nombreV,
            $edadV,
            $direccioV,
            $telefonoV,
            $profesionV,
            $nombreP,
            $escolarizacionP,
            $direccionP,
            $edadP,
            $ocupacionP,
            $telefonoP,
            $nombreM,
            $escolarizacionM,
            $direccionM,
            $edadM,
            $ocupacionM,
            $telefonoM,
            $nombreO,
            $escolarizacionO,
            $direccionO,
            $edadO,
            $ocupacionO,
            $telefonoO,
            $id
            );
    
            



	$obj= new metodos();

	if($obj->actualizaDatos($datos)==1){
        header("location:../list_seguimiento.php");
	}else{
        print_r($datos);
		echo "fallo al agregar";
        }
    
 ?> 