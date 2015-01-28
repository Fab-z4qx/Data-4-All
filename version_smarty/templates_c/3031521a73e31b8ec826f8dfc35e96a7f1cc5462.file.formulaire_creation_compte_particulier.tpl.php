<?php /* Smarty version Smarty-3.1.13, created on 2015-01-19 23:33:48
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126194531554b377e3218801-91766433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3031521a73e31b8ec826f8dfc35e96a7f1cc5462' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_particulier.tpl',
      1 => 1421706825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126194531554b377e3218801-91766433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b377e321bf55_02175838',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b377e321bf55_02175838')) {function content_54b377e321bf55_02175838($_smarty_tpl) {?><form method="post" action="traitement.php">
		<label class="form_particulier" for="name_entreprise">Nom :</label><input type="text" name="name_entreprise" id="name_entreprise"/><br><br>

		<label class="form_particulier" for="email">Email :</label><input type="email" /><br><br>

		<label class="form_particulier" for="password">Mot de passe :</label><input type="password" name="pass" id="pass"/><br><br>
		
		<label class="form_particulier" for="password_confirmation">Confirmation :</label><input type="password" name="pass" id="pass"/><br><br>

		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>