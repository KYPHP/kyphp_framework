<?php
if (!defined('KY_PATH'))	exit();
$config =require '../config.php';

$array = array(
 'PATH_KEY'=>3, // URL����,����ģʽ������Ϊ3,1Ϊpath_info ,2Ϊα��̬��4Ϊ��̬
    'URL_ROUTER_ON' => false,//��̬�Զ���ת
    'DEFAULT_MODULE' =>'',	//Ĭ��index
	'DEFAULT_HTML_PATH' =>'html',//ָ������HTML�ļ�·������Ϊ'html'
	'DEFAULT_M_PATH' =>'m',//ָ������M�ļ�·��
	'DEFAULT_LIB_PATH' =>'c',//ָ������LIB�ļ�·������Ϊ'lib'	
	'DEFAULT_TPL_PATH' =>'v',//ָ������TPL�ļ�·������Ϊ'tpl'
	'DEFAULT_CMD_PATH' =>'cmd',//ָ������cmd�ļ�·������Ϊ'cmd'
    'CACHE_ON'=> true,//ҳ�滺�濪��
    
);
return array_merge($config,$array);
?>