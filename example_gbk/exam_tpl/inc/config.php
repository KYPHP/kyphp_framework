<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
    'URL_ROUTER_ON' => true,
    'DEFAULT_MODULE' =>'',
   
    
);
return array_merge($config,$array);
?>