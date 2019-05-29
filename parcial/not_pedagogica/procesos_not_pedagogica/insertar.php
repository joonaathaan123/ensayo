
<?php

include("../../conexion.php");
include("../metodosCrudnot_pedagogica.php");



$fecha = $_POST['fecha'];
$edad = $_POST['edad'];
$grado = $_POST['grado'];
$estudiante = $_POST['estudiante'];
$asistentes = $_POST['asistentes'];
$motivo = $_POST['motivo'];
$descripcion = $_POST['descripcion'];
$comentariosGenerales = $_POST['comentariosGenerales'];
$compromisoDocente = $_POST['compromisoDocente'];
$compromisoPadres = $_POST['compromisoPadres'];
$conclusiones = $_POST['conclusiones'];




$obj= new metodos();


        $datos=array(
            
            $fecha,
            $edad,
            $grado,
            $estudiante,
            $asistentes,
            $motivo,
            $descripcion,
            $comentariosGenerales,
            $compromisoDocente,
            $compromisoPadres,
            $conclusiones);
    
    
        if($obj->insertarDatosNombre($datos)==1){
            header("location:../list_not_pedagogica.php");
        
        }else{
         
            echo "fallo al agregar";
        }

    
     



?> 
