<?php /* Smarty version Smarty-3.1.13, created on 2015-01-20 23:48:39
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_import_fichiers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7964929954bed9b9d47401-18814618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '7964929954bed9b9d47401-18814618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54bed9b9d48915_33815293',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bed9b9d48915_33815293')) {function content_54bed9b9d48915_33815293($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label>
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <input type="submit" name="submit" value="Envoyer" />
</form><?php }} ?>