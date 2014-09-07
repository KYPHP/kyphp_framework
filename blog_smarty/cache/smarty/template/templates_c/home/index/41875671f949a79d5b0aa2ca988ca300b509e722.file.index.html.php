<?php /* Smarty version Smarty-3.1.19, created on 2014-09-07 06:13:26
         compiled from "E:\www\kyphp_framework\blog_smarty\app\tpl\default\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25343540bf786663a69-49418663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41875671f949a79d5b0aa2ca988ca300b509e722' => 
    array (
      0 => 'E:\\www\\kyphp_framework\\blog_smarty\\app\\tpl\\default\\index\\index.html',
      1 => 1409994163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25343540bf786663a69-49418663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'test' => 0,
    'form_list' => 0,
    'value' => 0,
    'pagination' => 0,
    'right' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_540bf78674d247_55274612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_540bf78674d247_55274612')) {function content_540bf78674d247_55274612($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>



<!-- Content START -->
<div id="Content">

<!-- Side ContentWrapper START -->
<div id="ContentWrapper">

<!-- Side SC START -->
<div class="SC">

<div class="Post" style="padding-bottom: 50px;">

<div class="PostHead">
 <<?php ?>?php foreach($head_list as $list){
 
 
 }?<?php ?>>
</div>
  
<div class="PostContent">
<p><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</p>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['form_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>


  
<p><a href="<<?php ?>?php echo $this->url->link('info/view' ,"&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
");?<?php ?>>"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></p>
<p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
<?php } ?>
<pre></pre>
 </div>
 
<ul class="PostCom">
 <li><span>Comments Off</span></li>
</ul>
<div><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>
</div>
<!-- Post END -->

<?php echo $_smarty_tpl->tpl_vars['right']->value;?>

</div>
<!-- Content END -->
 
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
