<?php

$usuario=$_POST['usuario'];
$pass=$_POST['contra'];
require_once('../modelo/obtenerusuario.php');
$sesion=new obtenerusuario();
$user=$sesion->obtenerusuarios($usuario, $pass);
if(!$user){
    header('Location: ../index.php');
}
else{
    header('Location: ../Vistas/inicio.php');
}

?>
