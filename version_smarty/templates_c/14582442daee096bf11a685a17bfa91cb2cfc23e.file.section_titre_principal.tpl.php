<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 15:18:31
         compiled from "F:\wamp\www\D4A\version_smarty\templates\body\section_titre_principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104954b16414f2d200-91550735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14582442daee096bf11a685a17bfa91cb2cfc23e' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\body\\section_titre_principal.tpl',
      1 => 1421334847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104954b16414f2d200-91550735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b16414f2f203_90495902',
  'variables' => 
  array (
    'header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b16414f2f203_90495902')) {function content_54b16414f2f203_90495902($_smarty_tpl) {?><section id="titrePrincipal">
	<div id="titreHome">
		Data 4 All 
		<br>
		<span>L'Open Data des Entreprises</span>
	</div>

	<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1=='index')){?>
			<div id="navHorizontal_connexion">
				<a class="con" href="htdocs/login.php">Connexion</a>
			</div>	
		<?php }?>

</section><?php }} ?>