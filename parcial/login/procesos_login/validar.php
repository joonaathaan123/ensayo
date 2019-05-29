<?php 

	include( "../../conexion.php");
    include("../metodosCrud_login.php");

    $id =$_POST['id'];
    $contraseña =$_POST['contraseña'];
    
    $obj= new metodos();
    $sql="SELECT id,
                pass
        from login_p   where id='$id'";

$datos=$obj->mostrarDatos($sql);
foreach ($datos as $key )

if( $key['id']==$id &&  $key['pass']==$contraseña){
    header("location:../../perfil_pedagogico/list_perfil.php");

}else{
    header("location:../login.php");
}
    

    
 ?> 