<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 00:28:31
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/liste_entreprises.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151382946754b15655868f03-98486138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd54d47c79a29df943b342af55261a7020c5de6' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/liste_entreprises.tpl',
      1 => 1421257675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151382946754b15655868f03-98486138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b156558aa645_18952269',
  'variables' => 
  array (
    'req_tab' => 0,
    'req' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b156558aa645_18952269')) {function content_54b156558aa645_18952269($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



	<?php if ((count($_smarty_tpl->tpl_vars['req_tab']->value))!=0){?>
		<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['req']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value){
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
			<section class="contentListeEntreprise">
			<div class="titreContent"><?php echo $_smarty_tpl->tpl_vars['req']->value[$_smarty_tpl->getVariable('smarty')->value['section']['nr']['index']]['nom_entreprise'];?>
</div>
			<a class="boutonListeEntreprise" href="entreprise1.php"> voir plus </a>
			</section>
		<?php } ?>
	<?php }?>	

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>