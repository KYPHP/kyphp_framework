<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
    'URL_ROUTER_ON' => true,
    'DEFAULT_MODULE' =>'',
	'app_dir' =>'.',
	'DEFAULT_C_PATH' =>'lib',
	'DB_TYPE'=>'mysql',//只有mysql开放连接

	
   
    
);
return array_merge($config,$array);
?>