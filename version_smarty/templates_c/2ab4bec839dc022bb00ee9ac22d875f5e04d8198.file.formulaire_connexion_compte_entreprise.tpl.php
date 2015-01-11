<?php /* Smarty version Smarty-3.1.13, created on 2015-01-11 19:00:28
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaire_connexion_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49046341254b2a05c647f24-59118021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab4bec839dc022bb00ee9ac22d875f5e04d8198' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaire_connexion_compte_entreprise.tpl',
      1 => 1420999208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49046341254b2a05c647f24-59118021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b2a05c64c0d1_86489207',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2a05c64c0d1_86489207')) {function content_54b2a05c64c0d1_86489207($_smarty_tpl) {?><form method="post" action="traitement.php">
			<p><label for="number_siret">Numéro Siret :</label><input type="text" name="number_siret" id="number_siret" size="30" maxlength="10" /> </p>
			<p><label for="password">Mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
			<input class="bouton_submit" type="submit" value="Submit">
</form><?php }} ?>