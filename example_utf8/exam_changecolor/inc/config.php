<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
    'DEFAULT_TPL'=>'blue',
    'URL_ROUTER_ON' => true,
    'DEFAULT_MODULE' =>'',
	'app_dir'=>'.',
   'DEFAULT_C_PATH' =>'lib',//ָ������M�ļ�·��
    
);
return array_merge($config,$array);
?>