<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:53:56
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93654378654ca579403b369-74689588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99cdea6f77215a1038527f4d64c5dc56ada1c847' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_home_page.tpl',
      1 => 1422035192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93654378654ca579403b369-74689588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbr_entreprise' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca57940810b7_64406585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca57940810b7_64406585')) {function content_54ca57940810b7_64406585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="head_entreprise">
		<div id="header_entreprise">
			<div id="logo_enteprise"><img id="logo" src="../images/logoefrei.png"></div>
			<div id="nom_entreprise">nom - </div>
			<div id="siret_entreprise">siret</div>
		</div>
</div>

<div id="meilleur_offre">
	go best offre
</div>


		<section id="compteur_entreprise">

			<div class="count_entreprise">
				<center>
				<div class="titre_count_entreprise">Nombre de Fichiers chargés</div>
				<div class="nombre_count_entreprise"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
10</div>
				</center>
			</div>

			<div class="count_entreprise">
				<center>
				<div class="titre_count_entreprise">Nombre de Graphes</div>
				<div class="nombre_count_entreprise"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
10</div>
				</center>
			</div>

			<div class="count_entreprise">
				<center>
				<div class="titre_count_entreprise">Dernière mise à jour</div>
				<div class="nombre_count_entreprise"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
10</div>
				</center>
			</div>

		</section>


<div id="progressbar"></div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>