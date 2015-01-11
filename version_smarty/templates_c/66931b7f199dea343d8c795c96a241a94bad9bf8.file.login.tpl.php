<?php /* Smarty version Smarty-3.1.13, created on 2015-01-11 19:18:38
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151395077454b15997c55918-96455028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66931b7f199dea343d8c795c96a241a94bad9bf8' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl',
      1 => 1421000316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151395077454b15997c55918-96455028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b15997c91167_50831945',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b15997c91167_50831945')) {function content_54b15997c91167_50831945($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="page_rubrique">
<section id="titres_rubriques_connexion">
	<div class="block_0_50">
	<center><div id="titre_deja_membre">Déjà Membre</div></center>
	</div>
	
	<div class="block_50_100">
	<center><div id="titre_pas_membre">Pas encore Membre</div></center>
	</div>
</section>

<section id="choix_connexion">

<div class="block_0_50">

	<div class="block_0_50">
		<center><span class="boutons_connexion" id="bouton_texte" onclick="javascript:afficher_cacher('formulaire_connexion_compte_particulier');">Particulier</span></center>
	</div>
	

	<div class="block_50_100">
		<center><span class="boutons_connexion" id="bouton_texte" onclick="javascript:afficher_cacher('formulaire_connexion_compte_entreprise');">Entreprise</span></center>
	</div>

	<div class="formulaire_connexion_compte_entreprise" id="formulaire_connexion_compte_entreprise">
		<?php echo $_smarty_tpl->getSubTemplate ('formulaire_connexion_compte_entreprise.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p>
	</div>

	<script type="text/javascript">
        afficher_cacher('formulaire_connexion_compte_entreprise');
    </script>

</div>


<div class="block_50_100">

	<div class="block_0_50">
		<center><span class="boutons_connexion" id="bouton_texte" onclick="javascript:afficher_cacher('formulaire_creation_compte_particulier');">Particulier</span></center>
	</div>

	<div class="block_50_100">
		<center><span class="boutons_connexion" id="bouton_texte" onclick="javascript:afficher_cacher('formulaire_creation_compte_entreprise');">Entreprise</span></center>
	</div>

<!--
	<div class="formulaire_creation_compte_particulier" id="formulaire_creation_compte_particulier">
		<?php echo $_smarty_tpl->getSubTemplate ('formulaire_creation_compte_particulier.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
-->
	<div class="formulaire_creation_compte_entreprise" id="formulaire_creation_compte_entreprise">
		<?php echo $_smarty_tpl->getSubTemplate ('formulaire_creation_compte_entreprise.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	
	<script type="text/javascript">
        afficher_cacher('formulaire_creation_compte_entreprise');
        afficher_cacher('formulaire_creation_compte_particulier');
    </script>

</div>

</section>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>