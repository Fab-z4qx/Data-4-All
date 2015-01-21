<?php /* Smarty version Smarty-3.1.13, created on 2015-01-21 00:14:51
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102525982854b6d6a3d536e3-17305614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99cdea6f77215a1038527f4d64c5dc56ada1c847' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/admin_entreprise/admin_entreprise_home_page.tpl',
      1 => 1421795676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102525982854b6d6a3d536e3-17305614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b6d6a3d8c9f0_67427353',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6d6a3d8c9f0_67427353')) {function content_54b6d6a3d8c9f0_67427353($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="home_left">
		<div id="header_entreprise">
			<div id="logo_enteprise"><img id="logo" src="../images/logoefrei.png"></div>
			<div id="nom_entreprise">nom - </div>
			<div id="siret_entreprise">siret</div>
		</div>

		<div id="compteurs_entreprise">
			<div id="nombre_fichier">Nombre de Fichiers chargés: </div>
			<div id="nombre_graphe">Nombre de Graphes: </div>
		</div>

		<div id="derniere_maj">
			Dernière mise à jour: 
		</div>
</div>

<div id="meilleur_offre">
	go best offre
</div>

<div id="nombre_data">

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>