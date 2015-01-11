<?php /* Smarty version Smarty-3.1.13, created on 2015-01-10 19:01:31
         compiled from "F:\wamp\www\D4A\version_smarty\templates\liste_entreprises.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2102354b1770b2769c8-68607351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '439226b1054c27a556de04ab7cd01cbf3b1be7ac' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\liste_entreprises.tpl',
      1 => 1420902592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102354b1770b2769c8-68607351',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1770b371151_75362810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1770b371151_75362810')) {function content_54b1770b371151_75362810($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section class="contentListeEntreprise">
	<div class="titreContent">Nom Entreprise 1</div>
	<a class="boutonListeEntreprise" href="entreprise1.php"> voir plus </a>
</section>

<section class="contentListeEntreprise">
	<div class="titreContent">Nom Entreprise 2</div>
	<a class="boutonListeEntreprise" href="entreprise2.php"> voir plus </a>
</section>

<section class="contentListeEntreprise">
	<div class="titreContent">Nom Entreprise 3</div>
	<a class="boutonListeEntreprise" href="entreprise3.php"> voir plus </a>
</section>

<section class="contentListeEntreprise">
	<div class="titreContent">Nom Entreprise 4</div>
	<a class="boutonListeEntreprise" href="entreprise4.php"> voir plus </a>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>