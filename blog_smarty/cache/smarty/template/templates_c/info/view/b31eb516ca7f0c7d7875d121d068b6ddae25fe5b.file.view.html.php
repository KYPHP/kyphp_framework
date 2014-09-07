<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 05:30:58
         compiled from "E:\www\kyphp_framework\blog_smarty\app\tpl\default\info\view.html" */ ?>
<?php /*%%SmartyHeaderCode:20462540bed92c25370-16326015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b31eb516ca7f0c7d7875d121d068b6ddae25fe5b' => 
    array (
      0 => 'E:\\www\\kyphp_framework\\blog_smarty\\app\\tpl\\default\\info\\view.html',
      1 => 1383486314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20462540bed92c25370-16326015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'bloginfo' => 0,
    'bloginfo2' => 0,
    'info_title' => 0,
    'content' => 0,
    'right' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540bed92c64898_07867803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540bed92c64898_07867803')) {function content_540bed92c64898_07867803($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div><h1><?php echo $_smarty_tpl->tpl_vars['bloginfo']->value;?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['bloginfo2']->value;?>
</h2>

</div>
<!-- Content START -->
<div id="Content">

<!-- Side ContentWrapper START -->
<div id="ContentWrapper">

<!-- Side SC START -->
<div class="SC">

<div class="Post" style="padding-bottom: 50px;">

<div class="PostHead">
 <h1><?php echo $_smarty_tpl->tpl_vars['info_title']->value;?>
</h1>
</div>
  
<div class="PostContent">
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

 </div>

</div>
<!-- Post END -->

<?php echo $_smarty_tpl->tpl_vars['right']->value;?>

</div>
<!-- Content END -->
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
