<?php /* Smarty version Smarty-3.1.13, created on 2015-01-11 18:48:26
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298954b2c57a233290-33273384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fb32125d60e70d420ae57281da013c9b19ebd5' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaire_creation_compte_particulier.tpl',
      1 => 1421002058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298954b2c57a233290-33273384',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b2c57a238051_46181079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2c57a238051_46181079')) {function content_54b2c57a238051_46181079($_smarty_tpl) {?><form method="post" action="traitement.php">
		<p><label for="name_entreprise">Nom entreprise :</label><input type="text" name="name_entreprise" id="name_entreprise" size="30" maxlength="10" /> </p>
		<p><label for="email">Email :</label><input type="email" /></p>
		<p><label for="url_website">Adresse site web :</label><input type="url" /></p>
		<p><label for="number_street">Numéro de rue :</label><input type="text" name="number_street" id="pseudo" size="30" maxlength="10" /> </p>
		<p><label for="name_street">Rue :</label><input type="text" name="name_street" id="name_street" size="30" maxlength="10" /> </p>
		<p><label for="name_city">Ville :</label><input type="text" name="name_city" id="name_city" size="30" maxlength="10" /> </p>
		<input class="bouton_submit" type="submit" value="Submit">
</form><?php }} ?>