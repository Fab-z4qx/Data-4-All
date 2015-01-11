<?php /* Smarty version Smarty-3.1.13, created on 2015-01-10 20:33:51
         compiled from "F:\wamp\www\D4A\version_smarty\templates\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:483154b18caf8a6fa0-75916587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2f2f9faac13495666de8122d4c43c9318dc0e3' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\search.tpl',
      1 => 1420902592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483154b18caf8a6fa0-75916587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b18caf96dd00_94376761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b18caf96dd00_94376761')) {function content_54b18caf96dd00_94376761($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="formSearch">
<center>

			<form class="form-wrapper cf">
       			<input type="text" placeholder="Nom, Siret" required>
        		<button type="submit">Recherche</button>
    		</form>
	
</center>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>