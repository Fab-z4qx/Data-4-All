<?php /* Smarty version Smarty-3.1.13, created on 2015-01-31 10:52:23
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192490745854cca5d7e57937-28950571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af53c32dcfcc7e5bfd6824ac0f77044bec2d99b' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/search.tpl',
      1 => 1420822666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192490745854cca5d7e57937-28950571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54cca5d7ea08d3_94678892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cca5d7ea08d3_94678892')) {function content_54cca5d7ea08d3_94678892($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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