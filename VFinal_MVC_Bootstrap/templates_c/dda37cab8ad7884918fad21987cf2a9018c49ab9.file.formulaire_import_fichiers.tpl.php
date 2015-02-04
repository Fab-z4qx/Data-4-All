<?php /* Smarty version Smarty-3.1.13, created on 2015-02-01 16:55:15
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_import_fichiers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147976845654ce4c63e931b0-59390616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda37cab8ad7884918fad21987cf2a9018c49ab9' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_import_fichiers.tpl',
      1 => 1421794116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147976845654ce4c63e931b0-59390616',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ce4c63e95022_22478168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce4c63e95022_22478168')) {function content_54ce4c63e95022_22478168($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label>
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <input type="submit" name="submit" value="Envoyer" />
</form><?php }} ?>