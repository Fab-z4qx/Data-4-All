<?php /* Smarty version Smarty-3.1.13, created on 2015-01-12 08:29:39
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126194531554b377e3218801-91766433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3031521a73e31b8ec826f8dfc35e96a7f1cc5462' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_particulier.tpl',
      1 => 1421017324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126194531554b377e3218801-91766433',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b377e321bf55_02175838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b377e321bf55_02175838')) {function content_54b377e321bf55_02175838($_smarty_tpl) {?><form method="post" action="traitement.php">
		<p><label for="name_entreprise">Nom entreprise :</label><input type="text" name="name_entreprise" id="name_entreprise" size="30" maxlength="10" /> </p>
		<p><label for="email">Email :</label><input type="email" /></p>
		<p><label for="url_website">Adresse site web :</label><input type="url" /></p>
		<p><label for="number_street">Numéro de rue :</label><input type="text" name="number_street" id="pseudo" size="30" maxlength="10" /> </p>
		<p><label for="name_street">Rue :</label><input type="text" name="name_street" id="name_street" size="30" maxlength="10" /> </p>
		<p><label for="name_city">Ville :</label><input type="text" name="name_city" id="name_city" size="30" maxlength="10" /> </p>
		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>