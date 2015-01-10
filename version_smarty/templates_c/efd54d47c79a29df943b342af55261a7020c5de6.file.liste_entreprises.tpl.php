<?php /* Smarty version Smarty-3.1.13, created on 2015-01-10 17:41:57
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/liste_entreprises.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151382946754b15655868f03-98486138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efd54d47c79a29df943b342af55261a7020c5de6' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/liste_entreprises.tpl',
      1 => 1420823917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151382946754b15655868f03-98486138',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b156558aa645_18952269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b156558aa645_18952269')) {function content_54b156558aa645_18952269($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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