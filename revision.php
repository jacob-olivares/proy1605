<?php

include 'lib/Conexion.php';
include 'lib/Usuario.php';

$oUsr = new Usuario();

$oUsr->nombre=$_POST['usuario'];
$oUsr->clave=$_POST['clave'];


if( $oUsr->VerificarUsuarioClave()){
    echo "Existe clave";
}else{
    echo "No Existe clave";
}
