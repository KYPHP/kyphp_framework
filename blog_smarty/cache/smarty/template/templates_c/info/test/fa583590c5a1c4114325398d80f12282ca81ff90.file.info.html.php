<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 05:28:05
         compiled from "E:\www\kyphp_framework\blog_smarty\app\tpl\default\info\test\info.html" */ ?>
<?php /*%%SmartyHeaderCode:7074540bece51bc724-84863813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa583590c5a1c4114325398d80f12282ca81ff90' => 
    array (
      0 => 'E:\\www\\kyphp_framework\\blog_smarty\\app\\tpl\\default\\info\\test\\info.html',
      1 => 1383493176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7074540bece51bc724-84863813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'right' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540bece52bd3f1_60712782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540bece52bd3f1_60712782')) {function content_540bece52bd3f1_60712782($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div><h1>这是test info</h1>

</div>
<!-- Content START -->
<div id="Content">

<!-- Side ContentWrapper START -->
<div id="ContentWrapper">

<!-- Side SC START -->
<div class="SC">

<div class="Post" style="padding-bottom: 50px;">

<div class="PostHead">
<a href="<<?php ?>?php echo $this->url->link('info/test/view');?<?php ?>>"> 打开新的方法,注意url</a>
</div>
  
<div class="PostContent">

这是一个测试

 </div>

</div>
<!-- Post END -->

<?php echo $_smarty_tpl->tpl_vars['right']->value;?>

</div>
<!-- Content END -->
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
