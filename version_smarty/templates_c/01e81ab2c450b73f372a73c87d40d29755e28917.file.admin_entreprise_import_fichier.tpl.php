<?php /* Smarty version Smarty-3.1.13, created on 2015-01-20 23:44:26
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_import_fichier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30656099454b6df3aefa360-30265205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e81ab2c450b73f372a73c87d40d29755e28917' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_import_fichier.tpl',
      1 => 1421793862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30656099454b6df3aefa360-30265205',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b6df3af32fe5_07898280',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6df3af32fe5_07898280')) {function content_54b6df3af32fe5_07898280($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="import_fichier">
	<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_import_fichiers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>