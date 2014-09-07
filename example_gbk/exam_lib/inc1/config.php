<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
 'PATH_KEY'=>4, // URL类型,兼容模式请设置为3,1为path_info ,2为伪静态，4为静态
    'URL_ROUTER_ON' => false,//静态自动跳转
    'DEFAULT_MODULE' =>'',	
	'DEFAULT_HTML_PATH' =>'html1',//指定生成HTML文件路径，空为'html'
	'DEFAULT_LIB_PATH' =>'lib1',//指定生成LIB文件路径，空为'lib'	
	'DEFAULT_TPL_PATH' =>'tpl1',//指定生成TPL文件路径，空为'tpl'
	'DEFAULT_CMD_PATH' =>'cmd1',//指定生成cmd文件路径，空为'cmd'
	'app_dir' =>'.',
   
    
);
return array_merge($config,$array);
?>