<?php
if (!defined('KY_PATH'))	exit();

$config=require('../config.php');
$array = array(
    'DEFAULT_TPL'=>'blue',
    'URL_ROUTER_ON' => true,
    'DEFAULT_MODULE' =>'',
    'CACHE_ON'=>false,
    'DEFAULT_C_PATH' =>'lib',
	'app_dir' =>'.',
	'DIR_CACHE'=>'cache',//cache·��,���ļ�cache
	'CACHE_TIME_EXPIRE'=>120,//���ù���ʱ��
	'CACHE_CONTENT_WITHTIME'=>'off',//���û����ļ����ݺ�׺ offΪ��,Ϊ�����Դ���׺�������ַ�����ֱ����ʾ��ҳ��ײ�
	'CACHE_HASH'=>'on',//�Ƿ���hash����Ŀ¼�����ҳ��϶ཨ������Ϊon
	
);
return array_merge($config,$array);
?>