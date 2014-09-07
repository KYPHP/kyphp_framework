<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
 'PATH_KEY'=>3, // URL类型,兼容模式请设置为3,1为path_info ,2为伪静态，4为静态
    'URL_ROUTER_ON' => false,//静态自动跳转
    'DEFAULT_MODULE' =>'',	//默认index
	'DEFAULT_HTML_PATH' =>'html',//指定生成HTML文件路径，空为'html'
	'DEFAULT_M_PATH' =>'m',//指定生成M文件路径
	'DEFAULT_LIB_PATH' =>'c',//指定生成LIB文件路径，空为'lib'	
	'DEFAULT_TPL_PATH' =>'v',//指定生成TPL文件路径，空为'tpl'
	'DEFAULT_CMD_PATH' =>'cmd',//指定生成cmd文件路径，空为'cmd'
    'CACHE_ON'=> true,//页面缓存开启
    
);
return array_merge($config,$array);
?>