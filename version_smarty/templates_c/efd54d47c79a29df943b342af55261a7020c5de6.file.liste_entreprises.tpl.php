<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:33:09
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/liste_entreprises.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119922403254ca52b57d1246-24345059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '119922403254ca52b57d1246-24345059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'req_tab' => 0,
    'req' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca52b5841f56_07827043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca52b5841f56_07827043')) {function content_54ca52b5841f56_07827043($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



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