<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 11:29:17
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaires\formulaire_connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1322454c8c80d7560b3-24017667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '453f0025805ecdb70e24720e42faf929326380c5' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaires\\formulaire_connexion.tpl',
      1 => 1422443974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1322454c8c80d7560b3-24017667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c8c80d757d70_12838454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8c80d757d70_12838454')) {function content_54c8c80d757d70_12838454($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<input type="text" placeholder="adresse email" name="id" id="id"/>&nbsp;&nbsp;
		<input type="password" placeholder="mot de passe" name="mdp"  id="mdp"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="con" type="submit" value="Sign It">

</form><?php }} ?>