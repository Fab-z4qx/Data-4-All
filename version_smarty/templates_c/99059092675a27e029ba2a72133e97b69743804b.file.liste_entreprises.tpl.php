<?php /* Smarty version Smarty-3.1.13, created on 2014-11-30 17:44:50
         compiled from "/Users/Timohee/Desktop/version_smarty/templates/liste_entreprises.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2120881065547b121466bec9-79007527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99059092675a27e029ba2a72133e97b69743804b' => 
    array (
      0 => '/Users/Timohee/Desktop/version_smarty/templates/liste_entreprises.tpl',
      1 => 1417365888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2120881065547b121466bec9-79007527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547b12146a7198_21175959',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b12146a7198_21175959')) {function content_547b12146a7198_21175959($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="titreListeEntreprise">
	Liste Entreprises
</section>

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