<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:14:33
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173410248954ca4e59c3e6d3-37824036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd238fe853f64f48c979ac5e1eb6efe4ff9e1d927' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_connexion.tpl',
      1 => 1422392629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173410248954ca4e59c3e6d3-37824036',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca4e59c40d74_02931731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca4e59c40d74_02931731')) {function content_54ca4e59c40d74_02931731($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<input type="text" placeholder="adresse email" name="id" id="id"/>&nbsp;&nbsp;
		<input type="password" placeholder="mot de passe" name="mdp"  id="mdp"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="con" type="submit" value="Connexion">

</form><?php }} ?>