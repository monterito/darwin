<?php

include('includes/conexion.php');
include('includes/comun.php');
date_default_timezone_set('America/Los_Angeles');

$db = new Conexion();
$modo = isset($_GET['modo'])?$_GET['modo']:'default';

switch($modo){
    case 'login':
        echo 'capture login';
    break;
    case 'registro':
        echo 'esto es el registro';
    break;
    case 'claveperdida':
        echo 'clave perdida';
    break;
    default:
        $template  = new Smarty();
        $template -> display('index.tpl');
}



?>