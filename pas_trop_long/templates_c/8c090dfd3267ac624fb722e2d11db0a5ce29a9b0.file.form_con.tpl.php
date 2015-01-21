<?php /* Smarty version Smarty-3.1.13, created on 2015-01-21 00:55:43
         compiled from "/opt/lampp/htdocs/Data4All/pas_trop_long/templates/formulaires/form_con.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194018880154beeaffe110e1-74724757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c090dfd3267ac624fb722e2d11db0a5ce29a9b0' => 
    array (
      0 => '/opt/lampp/htdocs/Data4All/pas_trop_long/templates/formulaires/form_con.tpl',
      1 => 1421797932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194018880154beeaffe110e1-74724757',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54beeaffe119b5_63052766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54beeaffe119b5_63052766')) {function content_54beeaffe119b5_63052766($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<input type="text" placeholder="adresse email" name="id" id="id"/>
		<input type="password" placeholder="mot de passe" name="mdp"  id="mdp"/>
		<input class="con" type="submit" value="Sign It">

</form><?php }} ?>