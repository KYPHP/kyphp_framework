<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
    'URL_ROUTER_ON' => true,
    'DEFAULT_MODULE' =>'',
	'app_dir' =>'.',
	'DEFAULT_C_PATH' =>'lib',
	'DB_TYPE'=>'mysql',//ֻ��mysql��������

	
   
    
);
return array_merge($config,$array);
?>