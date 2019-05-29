
<?php

include("../../conexion.php");
include("../metodosCrudPerfilPedagogico.php");

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$socioafectiva = $_POST['socioafectiva'];
$cognitiva = $_POST['cognitiva'];
$comunicacion = $_POST['comunicacion'];
$moral = $_POST['moral'];
$fortalezas = $_POST['fortalezas'];
$debilidades = $_POST['debilidades'];
$barreras = $_POST['barreras'];
$estrategias = $_POST['estrategias'];

$obj= new metodos();


        $datos=array(
            
            $nombre,
            $edad,
            $fecha,
            $socioafectiva,
            $cognitiva,
            $comunicacion,
            $moral,
            $fortalezas,
            $debilidades,
            $barreras,
            $estrategias
    
                );
    
    
        if($obj->insertarDatosNombre($datos)==1){
            header("location:../list_perfil.php");
        
        }else{
            echo "fallo al agregar";
        }

    
     



?> 
