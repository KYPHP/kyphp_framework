<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 06:12:09
         compiled from "E:\www\kyphp_framework\blog_smarty\app2\tpl\default\info\test\info.html" */ ?>
<?php /*%%SmartyHeaderCode:17261540becdd901df5-20534406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf32487adda9eed938f00c54482cf94ba1a7a226' => 
    array (
      0 => 'E:\\www\\kyphp_framework\\blog_smarty\\app2\\tpl\\default\\info\\test\\info.html',
      1 => 1410070325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17261540becdd901df5-20534406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540becddbc4e33_98303095',
  'variables' => 
  array (
    'header' => 0,
    'right' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540becddbc4e33_98303095')) {function content_540becddbc4e33_98303095($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>

<div><h1>这是 app2 下的test info</h1>

</div>
<!-- Content START -->
<div id="Content">

<!-- Side ContentWrapper START -->
<div id="ContentWrapper">

<!-- Side SC START -->
<div class="SC">

<div class="Post" style="padding-bottom: 50px;">

<div class="PostHead">
<a href="<<?php ?>?php echo $this->url->link('info/test/view2');?<?php ?>>"> 打开新的方法,注意url</a>
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
