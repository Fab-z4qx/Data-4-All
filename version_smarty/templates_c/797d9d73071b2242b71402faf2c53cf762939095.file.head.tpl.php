<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:13:06
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12606457054ca4e02efcf47-78612774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797d9d73071b2242b71402faf2c53cf762939095' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/head.tpl',
      1 => 1421673876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12606457054ca4e02efcf47-78612774',
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
  'unifunc' => 'content_54ca4e02f25985_02438649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca4e02f25985_02438649')) {function content_54ca4e02f25985_02438649($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
  
	<head>
		
	  	<meta charset="utf-8" />
	    <title>Data 4 All</title>

	    <link rel="icon" type="image/png" href="images/logo_site_TEAL.png" />
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