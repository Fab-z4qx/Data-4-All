<?php /* Smarty version Smarty-3.1.13, created on 2014-11-30 23:42:37
         compiled from "/Users/Timohee/Desktop/version_smarty/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752055247547b907c065171-34207447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00141cd93f43bfbbe18606c2feb9742f6bf2f113' => 
    array (
      0 => '/Users/Timohee/Desktop/version_smarty/templates/search.tpl',
      1 => 1417387356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752055247547b907c065171-34207447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547b907c0a02b4_24110690',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b907c0a02b4_24110690')) {function content_547b907c0a02b4_24110690($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="titreSearch">
	Recherche
</section>

<section id="formSearch">
<center>
	<div id="span2_search">
			<form class="navbar-search pull-right" action="#">
					<input type="text" class="search-query_span2" placeholder="Nom, Siret">
			</form>
	</div>
</center>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>