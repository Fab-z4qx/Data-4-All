<?php /* Smarty version Smarty-3.1.13, created on 2015-01-31 10:53:11
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56874837354cca6075b5f37-38407643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac38b48d8f27ce19cb6001de5a35984cf4d2285' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/contact.tpl',
      1 => 1421223346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56874837354cca6075b5f37-38407643',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54cca60760a514_43211112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cca60760a514_43211112')) {function content_54cca60760a514_43211112($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="page_contact">

<div class="sous_titre">
	Formulaire de Contact
</div>

<div class="formulaire_contact">

<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_contact.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>