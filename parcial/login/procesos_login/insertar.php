
<?php

include("../../conexion.php");
include("../metodosCrud_login.php");







$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$password=$_POST['password'];
$comprobar_password=$_POST['comprobar_password'];
if($password == $comprobar_password){

    $obj= new metodos();


        $datos=array(
            
            $identificacion,
            $nombres,
            $apellidos,
            $password
            
            );
    
    
        if($obj->insertarDatosNombre($datos)==1){
            header("location:../login.php");
        
        }else{
            print_r($datos);
            echo "fallo al agregar";
        }

}elseif($password != $comprobar_password){
    echo('contraseñas diferentes');
}


    
     



?> 
