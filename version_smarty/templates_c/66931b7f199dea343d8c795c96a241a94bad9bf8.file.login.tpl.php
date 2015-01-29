<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:13:06
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116121163654ca4e02da7247-12823966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66931b7f199dea343d8c795c96a241a94bad9bf8' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl',
      1 => 1422544373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116121163654ca4e02da7247-12823966',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca4e02dea9a4_09711878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca4e02dea9a4_09711878')) {function content_54ca4e02dea9a4_09711878($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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