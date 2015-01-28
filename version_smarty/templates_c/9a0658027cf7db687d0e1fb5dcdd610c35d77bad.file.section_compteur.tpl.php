<?php /* Smarty version Smarty-3.1.13, created on 2015-01-12 11:48:08
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_compteur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35408778954b14541c558b8-16722244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0658027cf7db687d0e1fb5dcdd610c35d77bad' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_compteur.tpl',
      1 => 1421059494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35408778954b14541c558b8-16722244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b14541c57056_90566660',
  'variables' => 
  array (
    'nbr_entreprise' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14541c57056_90566660')) {function content_54b14541c57056_90566660($_smarty_tpl) {?><section id="compteur">

	
		<div id="titre_compteur">Compteurs</div>
	
		<div class="count">
			<center>
			<div class="titre_count">Nombre d'entreprise</div>
			<div class="nombre_count"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
</div>
			</center>
		</div>

</section><?php }} ?>