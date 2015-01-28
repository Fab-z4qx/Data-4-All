<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 11:23:58
         compiled from "F:\wamp\www\D4A\version_smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1289154b17730204305-74596800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c3c35a1464975189a65bc56a94f1f584e465c76' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\login.tpl',
      1 => 1422443974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1289154b17730204305-74596800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1773026c5e2_09849200',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1773026c5e2_09849200')) {function content_54b1773026c5e2_09849200($_smarty_tpl) {?>
<div class="page_creation_compte">

<div id="titre_creation_compte">
		<div class="titre_left">
				Particulier
		</div>

		<div class="titre_right">
				Entreprise
		</div>
</div>

<div id="row">
		<div class="block_left">
				<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_creation_compte_particulier.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>

		<div class="block_right">
				<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_creation_compte_entreprise.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>