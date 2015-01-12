<?php /* Smarty version Smarty-3.1.13, created on 2015-01-12 09:17:38
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_connexion_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133442113254b377e320e037-03258322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0039c2d88b17a3033e4935f7787bc5ecce14d75' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_connexion_compte_entreprise.tpl',
      1 => 1421050623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133442113254b377e320e037-03258322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b377e3210685_58354129',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b377e3210685_58354129')) {function content_54b377e3210685_58354129($_smarty_tpl) {?><form method="post" action="traitement_form_connexion_entreprise.php">
			<p><label for="number_siret">Numéro Siret :</label><input type="text" name="number_siret" id="number_siret" size="30" maxlength="10" /> </p>
			
			<p><label for="password">Mot de passe :</label><input type="password" name="password" id="password" size="30" maxlength="10" /> </p>
			<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>