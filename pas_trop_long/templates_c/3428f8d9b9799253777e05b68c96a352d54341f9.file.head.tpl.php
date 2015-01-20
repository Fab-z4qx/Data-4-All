<?php /* Smarty version Smarty-3.1.13, created on 2015-01-20 18:44:12
         compiled from "/Users/Timohee/Desktop/Data4All/pas_trop_long/templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185672239054be914d539bf8-29746075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3428f8d9b9799253777e05b68c96a352d54341f9' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/pas_trop_long/templates/head.tpl',
      1 => 1421775851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185672239054be914d539bf8-29746075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54be914d56d816_97156776',
  'variables' => 
  array (
    'js_tab' => 0,
    'js' => 0,
    'css_tab' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be914d56d816_97156776')) {function content_54be914d56d816_97156776($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
  
	<head>
		
	  	<meta charset="utf-8" />
	    <title>Data 4 All</title>

	    <link rel="icon" type="image/png" href="images/...png" />
		<link rel="apple-touch-icon-precomposed" href="images/...png" />

		<?php if ((count($_smarty_tpl->tpl_vars['js_tab']->value))!=0){?>
		<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"></script>
		<?php } ?>
		<?php }?>	

		<?php if ((count($_smarty_tpl->tpl_vars['css_tab']->value))!=0){?>
		<?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_tab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?>
			<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/>
		<?php } ?>
		<?php }?>	

		<p>
			head
		</p>
  	</head><?php }} ?>