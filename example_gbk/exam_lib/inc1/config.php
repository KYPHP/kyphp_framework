<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
 'PATH_KEY'=>4, // URL����,����ģʽ������Ϊ3,1Ϊpath_info ,2Ϊα��̬��4Ϊ��̬
    'URL_ROUTER_ON' => false,//��̬�Զ���ת
    'DEFAULT_MODULE' =>'',	
	'DEFAULT_HTML_PATH' =>'html1',//ָ������HTML�ļ�·������Ϊ'html'
	'DEFAULT_LIB_PATH' =>'lib1',//ָ������LIB�ļ�·������Ϊ'lib'	
	'DEFAULT_TPL_PATH' =>'tpl1',//ָ������TPL�ļ�·������Ϊ'tpl'
	'DEFAULT_CMD_PATH' =>'cmd1',//ָ������cmd�ļ�·������Ϊ'cmd'
	'app_dir' =>'.',
   
    
);
return array_merge($config,$array);
?>