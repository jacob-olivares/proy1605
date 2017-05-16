<?php

include 'lib/Conexion.php';
include 'lib/Usuario.php';

$oUsr = new Usuario();

$oUsr->nombre='flopez';

if( $oUsr->VerificarUsuario()){
    echo "Existe";
}else{
    echo "No Existe";
}

