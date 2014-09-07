<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
    'URL_ROUTER_ON' => true,
    'DEFAULT_MODULE' =>'',
	'DEFAULT_C_PATH' =>'lib',
	'app_dir' =>'.',
   
    
);
return array_merge($config,$array);
?>