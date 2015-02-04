<?php /* Smarty version Smarty-3.1.13, created on 2015-02-02 18:24:26
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/panel_entreprise/home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70776583854cfb2ca95d0b8-60420311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b582e82ab5ed0aeac6804e4599fcd8de09edde2' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/panel_entreprise/home_page.tpl',
      1 => 1422035192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70776583854cfb2ca95d0b8-60420311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbr_entreprise' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54cfb2ca9a78a5_40931051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cfb2ca9a78a5_40931051')) {function content_54cfb2ca9a78a5_40931051($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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