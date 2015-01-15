<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 00:09:06
         compiled from "C:\wamp\www\Data4All\version_smarty\templates\body\section_compteur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1335654b6f712a0c4a5-44563099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdbad7be26da540d3eaacd4a8710b2d9a10dbf6c' => 
    array (
      0 => 'C:\\wamp\\www\\Data4All\\version_smarty\\templates\\body\\section_compteur.tpl',
      1 => 1421276824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335654b6f712a0c4a5-44563099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbr_entreprise' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b6f712a2fbd1_65028312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6f712a2fbd1_65028312')) {function content_54b6f712a2fbd1_65028312($_smarty_tpl) {?><section id="compteur">

	
		<div id="titre_compteur">Compteurs</div>
	
		<div class="count">
			<center>
			<div class="titre_count">Nombre d'entreprise</div>
			<div class="nombre_count"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
</div>
			</center>
		</div>

</section><?php }} ?>