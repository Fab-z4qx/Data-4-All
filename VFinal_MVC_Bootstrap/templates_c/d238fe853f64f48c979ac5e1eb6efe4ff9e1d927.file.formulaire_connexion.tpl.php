<?php /* Smarty version Smarty-3.1.13, created on 2015-02-01 16:53:11
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155410110754ca5795418642-10600248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd238fe853f64f48c979ac5e1eb6efe4ff9e1d927' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_connexion.tpl',
      1 => 1422805932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155410110754ca5795418642-10600248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca5795419ae3_36336469',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca5795419ae3_36336469')) {function content_54ca5795419ae3_36336469($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<input type="text" placeholder="adresse email" name="login" id="login"/>&nbsp;&nbsp;
		<input type="password" placeholder="mot de passe" name="password"  id="password"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="con" type="submit" value="Connexion">

</form><?php }} ?>