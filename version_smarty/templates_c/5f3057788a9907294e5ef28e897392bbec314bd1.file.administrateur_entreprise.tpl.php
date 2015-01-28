<?php /* Smarty version Smarty-3.1.13, created on 2015-01-12 09:56:56
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/administrateur_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150608590754b3838ef370b1-84721536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3057788a9907294e5ef28e897392bbec314bd1' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/administrateur_entreprise.tpl',
      1 => 1421053014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150608590754b3838ef370b1-84721536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b3838f02e926_15817201',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3838f02e926_15817201')) {function content_54b3838f02e926_15817201($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="page_admin_entreprise">
<form method="post" action="reception.php" enctype="multipart/form-data">
     <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label>
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br />
     <input type="submit" name="submit" value="Envoyer" />
</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>