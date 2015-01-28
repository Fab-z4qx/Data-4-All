<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 09:23:01
         compiled from "main.php" */ ?>
<?php /*%%SmartyHeaderCode:98843030954b6276566f755-16611954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06370fed83f151c0b3e9a3b83e47f5e5fff99d56' => 
    array (
      0 => 'main.php',
      1 => 1421067260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98843030954b6276566f755-16611954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b627656b2053_33345495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b627656b2053_33345495')) {function content_54b627656b2053_33345495($_smarty_tpl) {?>
<<?php ?>?php
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR_INDEX.INCLUDES.'data4all.inc.php');
	$smarty =new Smarty_datat4all();
	
	require(ROOT_DIR_INDEX.INCLUDES.'fonctions.php');

	$con = connexion_serveur();
	
	$cpt="SELECT * FROM entreprise";
	$req=mysql_query($cpt);
	$res=mysql_num_rows($req);
	
	
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	$smarty->assign('nbr_entreprise', $res);

	$smarty->assign('header', 'index');
	$smarty->assign('footer', 'index');
	
	$smarty->display('index.tpl');
?<?php ?>><?php }} ?>