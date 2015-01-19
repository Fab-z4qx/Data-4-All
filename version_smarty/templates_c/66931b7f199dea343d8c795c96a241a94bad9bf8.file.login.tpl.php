<?php /* Smarty version Smarty-3.1.13, created on 2015-01-19 22:54:12
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151395077454b15997c55918-96455028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66931b7f199dea343d8c795c96a241a94bad9bf8' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl',
      1 => 1421704451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151395077454b15997c55918-96455028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b15997c91167_50831945',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b15997c91167_50831945')) {function content_54b15997c91167_50831945($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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