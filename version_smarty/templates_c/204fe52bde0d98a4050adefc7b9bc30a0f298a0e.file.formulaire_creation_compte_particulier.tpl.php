<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 09:44:03
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaires\formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1677354c8af631378d7-05520742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '204fe52bde0d98a4050adefc7b9bc30a0f298a0e' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaires\\formulaire_creation_compte_particulier.tpl',
      1 => 1421334847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1677354c8af631378d7-05520742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c8af63198e53_21450550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8af63198e53_21450550')) {function content_54c8af63198e53_21450550($_smarty_tpl) {?><form method="post" action="traitement.php">
		<p><label for="name_entreprise">Nom entreprise :</label><input type="text" name="name_entreprise" id="name_entreprise" size="30" maxlength="10" /> </p>
		<p><label for="email">Email :</label><input type="email" /></p>
		<p><label for="url_website">Adresse site web :</label><input type="url" /></p>
		<p><label for="number_street">Numéro de rue :</label><input type="text" name="number_street" id="pseudo" size="30" maxlength="10" /> </p>
		<p><label for="name_street">Rue :</label><input type="text" name="name_street" id="name_street" size="30" maxlength="10" /> </p>
		<p><label for="name_city">Ville :</label><input type="text" name="name_city" id="name_city" size="30" maxlength="10" /> </p>
		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>