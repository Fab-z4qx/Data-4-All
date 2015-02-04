<?php /* Smarty version Smarty-3.1.13, created on 2015-02-01 16:59:24
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/particulier/home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65918483254ce4d5c832325-54039919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8791a948489bc0941a2a36412ba084638315db1' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/particulier/home_page.tpl',
      1 => 1422805932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65918483254ce4d5c832325-54039919',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ce4d5c8795d7_94121826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ce4d5c8795d7_94121826')) {function content_54ce4d5c8795d7_94121826($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php if (Auth::isLogged('client')==true){?>
<div id="meilleur_offre">
	CLIENT blbqa
</div>
<?php }else{ ?>
	$smarty->display('main.tpl');
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>