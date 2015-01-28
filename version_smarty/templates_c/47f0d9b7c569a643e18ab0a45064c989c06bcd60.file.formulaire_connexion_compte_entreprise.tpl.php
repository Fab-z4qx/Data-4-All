<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 09:44:03
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaires\formulaire_connexion_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:588454c8af63119d69-65062943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f0d9b7c569a643e18ab0a45064c989c06bcd60' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaires\\formulaire_connexion_compte_entreprise.tpl',
      1 => 1421334847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '588454c8af63119d69-65062943',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c8af63120891_56778870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8af63120891_56778870')) {function content_54c8af63120891_56778870($_smarty_tpl) {?><form method="post" action="traitement_form_connexion_entreprise.php">
			<p><label for="number_siret">Numéro Siret :</label><input type="text" name="number_siret" id="number_siret" size="30" maxlength="10" /> </p>
			
			<p><label for="password">Mot de passe :</label><input type="password" name="password" id="password" size="30" maxlength="10" /> </p>
			<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>