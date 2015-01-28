<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 11:23:58
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaires\formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677354c8af631378d7-05520742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204fe52bde0d98a4050adefc7b9bc30a0f298a0e' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaires\\formulaire_creation_compte_particulier.tpl',
      1 => 1422443974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677354c8af631378d7-05520742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c8af63198e53_21450550',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8af63198e53_21450550')) {function content_54c8af63198e53_21450550($_smarty_tpl) {?><form method="post" action="traitement.php">
		<label class="form_particulier" for="name_entreprise">Nom :</label><input type="text" name="name_entreprise" id="name_entreprise"/><br><br>

		<label class="form_particulier" for="email">Email :</label><input type="email" /><br><br>

		<label class="form_particulier" for="password">Mot de passe :</label><input type="password" name="pass" id="pass"/><br><br>
		
		<label class="form_particulier" for="password_confirmation">Confirmation :</label><input type="password" name="pass" id="pass"/><br><br>

		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>