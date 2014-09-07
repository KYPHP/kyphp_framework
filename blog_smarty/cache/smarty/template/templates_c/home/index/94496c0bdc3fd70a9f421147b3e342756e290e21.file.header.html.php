<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 06:13:26
         compiled from "E:\www\kyphp_framework\blog_smarty\app\tpl\default\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:25248540bf786372fd5-21961880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94496c0bdc3fd70a9f421147b3e342756e290e21' => 
    array (
      0 => 'E:\\www\\kyphp_framework\\blog_smarty\\app\\tpl\\default\\public\\header.html',
      1 => 1384061732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25248540bf786372fd5-21961880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'http' => 0,
    'sitetitle' => 0,
    'test' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540bf7864f2201_45912955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540bf7864f2201_45912955')) {function content_540bf7864f2201_45912955($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0022)http://hotue.blog.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Blog example</title>

<link href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/wp-layout-large.css" title="normal">

<meta name="robots" content="index,follow">

<meta property="og:type" content="blog">

<link rel="stylesheet" id="admin-bar-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/admin-bar.css" type="text/css" media="all">
<link rel="stylesheet" id="blogcom-admin-bar-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/blogcom-admin-bar.css" type="text/css" media="all">
<link rel="stylesheet" id="NextGEN-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/nggallery.css" type="text/css" media="screen">
<link rel="stylesheet" id="shutter-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/shutter-reloaded.css" type="text/css" media="screen">
<link rel="stylesheet" id="yui-cssreset-context-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/cssreset-context.css" type="text/css" media="all">
<link rel="stylesheet" id="blogcom_oauth_comments_style-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/base.css" type="text/css" media="all">
<link rel="stylesheet" id="blogcom_oauth_comments_twitter_style-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/twitter.css" type="text/css" media="all">
<link rel="stylesheet" id="blogcom_oauth_comments_google_style-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/google.css" type="text/css" media="all">
<link rel="stylesheet" id="blogcom_oauth_comments_browserid_style-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/browserid.css" type="text/css" media="all">
<link rel="stylesheet" id="blogcom_oauth_comments_facebook_style-css" href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/css/facebook.css" type="text/css" media="all">

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
/public/js/jquery.js"></script>


<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css">
	html { margin-top: 28px !important; }
	* html body { margin-top: 28px !important; }
</style>
			

			
	</head> 

<body class="home blog admin-bar">
<!-- bgcontain & bgcontainIn START -->
<div id="bgcontain"><div id="bgcontainIn">

<!-- Header START -->
<div class="HeaderBG">
 <div class="Header">
 <h1><a href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</a></h1>
 <div class="TagLine"><lable name="title"></div>
 <div class="CornerLeft"></div><div class="CornerRight"></div>
 
   <div class="TopMenu">
    <ul>
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['http']->value;?>
">Home</a></li>  </ul>
  </div>
 
</div> 
<!-- Header END -->

<!-- Menu START -->
<div class="Menu">
    <div class="MainMenu">
   <ul>
    <li class="page_item page-item-2"><a href="<<?php ?>?php echo $this->url->link('info/test');?<?php ?>>" title="<?php echo $_smarty_tpl->tpl_vars['test']->value;?>
"><<?php ?>?php echo $test;?<?php ?>></a></li>
	<li class="page_item page-item-2"><a href="<<?php ?>?php echo $this->url->link('info/test','&app=app2');?<?php ?>>" title="<?php echo $_smarty_tpl->tpl_vars['test']->value;?>
">APP2 <<?php ?>?php echo $test;?<?php ?>></a></li>
 
 
   </ul>
  </div>
    
  <div class="MainSyn">
  
  </div>
  
</div>
 
</div> 
<!-- Menu END -->
<?php }} ?>
