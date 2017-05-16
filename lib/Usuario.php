<?php

class Usuario{
    
    var $idusuario;
    var $nombre;
    var $clave;
    
    /* VALIDA LA EXISTENCIA DEL USUARIO*/
    function VerificarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $sql = "SELECT * FROM acceso WHERE nomusuario='$this->nombre'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }
    
    
}

