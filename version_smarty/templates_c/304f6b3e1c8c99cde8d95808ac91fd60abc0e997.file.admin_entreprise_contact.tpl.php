<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 00:50:03
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199434614654b6df42d1d237-79674790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '304f6b3e1c8c99cde8d95808ac91fd60abc0e997' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_contact.tpl',
      1 => 1421279401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199434614654b6df42d1d237-79674790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b6df42d57376_98049841',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6df42d57376_98049841')) {function content_54b6df42d57376_98049841($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="page_contact">

<div class="sous_titre">
	Formulaire de Contact D4A
</div>

<div class="formulaire_contact">

<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_contact.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>