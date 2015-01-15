<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 00:33:49
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_titre_principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144993407054b14541c4af80-11112342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15f78286a70a676957aa38fb69897bc3f0c0fb7f' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_titre_principal.tpl',
      1 => 1421278427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144993407054b14541c4af80-11112342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b14541c4c1e2_04563518',
  'variables' => 
  array (
    'header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14541c4c1e2_04563518')) {function content_54b14541c4c1e2_04563518($_smarty_tpl) {?><section id="titrePrincipal">
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