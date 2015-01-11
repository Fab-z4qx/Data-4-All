<?php /* Smarty version Smarty-3.1.13, created on 2015-01-10 17:36:43
         compiled from ".\templates\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2567854b1632bdd80c0-24475075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f06355d2da203e3a3e8b170089ea5f4d06cd0da9' => 
    array (
      0 => '.\\templates\\head.tpl',
      1 => 1420902592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2567854b1632bdd80c0-24475075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js_tab' => 0,
    'js' => 0,
    'css_tab' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1632be2a8c5_71588664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1632be2a8c5_71588664')) {function content_54b1632be2a8c5_71588664($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
  
	<head>
		
	  	<meta charset="utf-8" />
	    <title>Data 4 All</title>

	    <link rel="icon" type="image/png" href="images/logo_site.png" />
		<link rel="apple-touch-icon-precomposed" href="images/logo_site.png" />

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
  	</head><?php }} ?>