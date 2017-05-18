<?php
session_start();
include 'lib/Conexion.php';
include 'lib/Usuario.php';

$oUsr = new Usuario();

$oUsr->nombre=$_POST['usuario'];
$oUsr->clave=$_POST['clave'];



if( $oUsr->VerificarUsuarioClave()){
    $_SESSION['USR']=$oUsr;
}

header('Location:http://localhost:8081/proy1605/');