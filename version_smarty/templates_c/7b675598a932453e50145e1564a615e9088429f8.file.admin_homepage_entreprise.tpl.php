<?php /* Smarty version Smarty-3.1.13, created on 2015-01-14 17:17:36
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_homepage_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47546216254b696a0687176-10870566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b675598a932453e50145e1564a615e9088429f8' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_homepage_entreprise.tpl',
      1 => 1421053014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47546216254b696a0687176-10870566',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b696a06c2a02_72575330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b696a06c2a02_72575330')) {function content_54b696a06c2a02_72575330($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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