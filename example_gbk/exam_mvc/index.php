<?php
// +----------------------------------------------------------------------
// | ����php by ����ͯ
// +----------------------------------------------------------------------

// ���� ����php���·��
define('APP_PATH',dirname(__FILE__));//��ǰ��Ŀ·��
define('KYPHP_PATH',APP_PATH.'/../../kyphp/');//KYPHP���·��
define('__CHARSET__','gbk');
require KYPHP_PATH."kyphp.php";

//���Ҫ�Զ���config·������Ҫ����__CONFIG__
//define('__CONFIG__',APP_PATH.'/config.php');
//$config=require(__CONFIG__);
KYPHP::Run();
//ʵ����һ����վӦ��ʵ��

?>