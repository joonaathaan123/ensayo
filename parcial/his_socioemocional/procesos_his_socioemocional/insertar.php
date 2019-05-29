
<?php

include("../../conexion.php");
include("../metodosCrud_his_socioemocional.php");


$identificacion = $_POST['identificacion'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tiempoLibre = $_POST['tiempoLibre'];
$relacionesInterpersonales = $_POST['relacionesInterpersonales'];
$comportamiento = $_POST['comportamiento'];
$eventosTraumaticos = $_POST['eventosTraumaticos'];
$proyectoVida = $_POST['proyectoVida'];
$antecedenteSalud = $_POST['antecedenteSalud'];
$antecedenteAtencion = $_POST['antecedenteAtencion'];



$obj= new metodos();


        $datos=array(
            
            $identificacion,
            $nombres,
            $apellidos,
            $tiempoLibre,
            $relacionesInterpersonales,
            $comportamiento,
            $eventosTraumaticos,
            $proyectoVida,
            $antecedenteSalud,
            $antecedenteAtencion
    
                );
    
    
        if($obj->insertarDatosNombre($datos)==1){
            header("location:../list_his_socioemocional.php");
        
        }else{
            print_r($datos);
            echo "fallo al agregar";
        }

    
     



?> 
