<?php /* Smarty version Smarty-3.1.13, created on 2015-01-12 00:02:30
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85211957854b2a077a45983-12520133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a9111d555e8d67b3a874696b9b704e44aec1766' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaire_creation_compte_particulier.tpl',
      1 => 1421017324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85211957854b2a077a45983-12520133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b2a077a49d14_47123609',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2a077a49d14_47123609')) {function content_54b2a077a49d14_47123609($_smarty_tpl) {?><form method="post" action="traitement.php">
		<p><label for="name_entreprise">Nom entreprise :</label><input type="text" name="name_entreprise" id="name_entreprise" size="30" maxlength="10" /> </p>
		<p><label for="email">Email :</label><input type="email" /></p>
		<p><label for="url_website">Adresse site web :</label><input type="url" /></p>
		<p><label for="number_street">Numéro de rue :</label><input type="text" name="number_street" id="pseudo" size="30" maxlength="10" /> </p>
		<p><label for="name_street">Rue :</label><input type="text" name="name_street" id="name_street" size="30" maxlength="10" /> </p>
		<p><label for="name_city">Ville :</label><input type="text" name="name_city" id="name_city" size="30" maxlength="10" /> </p>
		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>