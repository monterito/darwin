<?php

class Conexion extends mysqli{
    
    public function __construct(){
        parent::__construct('127.0.0.1','root','','darwin');
        $this->query("SET NAMES 'utf8';");
        
        $this->connect_errno ? die('Error con la conexion'): $x ='Conectado';
        unset($x);
    }

}

?>