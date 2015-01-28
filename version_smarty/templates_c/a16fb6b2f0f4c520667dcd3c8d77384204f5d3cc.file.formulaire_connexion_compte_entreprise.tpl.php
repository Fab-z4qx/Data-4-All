<?php /* Smarty version Smarty-3.1.13, created on 2015-01-11 18:48:26
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaire_connexion_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077254b2c57a21a321-63661802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a16fb6b2f0f4c520667dcd3c8d77384204f5d3cc' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaire_connexion_compte_entreprise.tpl',
      1 => 1421002058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077254b2c57a21a321-63661802',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b2c57a21efa5_95295357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2c57a21efa5_95295357')) {function content_54b2c57a21efa5_95295357($_smarty_tpl) {?><form method="post" action="traitement.php">
			<p><label for="number_siret">Numéro Siret :</label><input type="text" name="number_siret" id="number_siret" size="30" maxlength="10" /> </p>
			<p><label for="password">Mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
			<input class="bouton_submit" type="submit" value="Submit">
</form><?php }} ?>