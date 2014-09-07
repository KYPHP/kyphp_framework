<?php
// +----------------------------------------------------------------------
// | 科亿php by 老顽童
// +----------------------------------------------------------------------

// 定义 科亿php框架路径
define('APP_PATH',dirname(__FILE__));//当前项目路径
define('KYPHP_PATH',APP_PATH.'/../../kyphp/');//KYPHP框架路径
define('__CHARSET__','gbk');
require KYPHP_PATH."kyphp.php";

//如果要自定义config路径，需要定义__CONFIG__
//define('__CONFIG__',APP_PATH.'/config.php');
//$config=require(__CONFIG__);
KYPHP::Run();
//实例化一个网站应用实例

?>