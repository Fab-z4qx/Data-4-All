<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 09:57:21
         compiled from "F:\wamp\www\D4A\version_smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1289154b17730204305-74596800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c3c35a1464975189a65bc56a94f1f584e465c76' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\login.tpl',
      1 => 1422438821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1289154b17730204305-74596800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1773026c5e2_09849200',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1773026c5e2_09849200')) {function content_54b1773026c5e2_09849200($_smarty_tpl) {?>
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
		<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_connexion_compte_entreprise.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">a</p><p id="w">.</p>
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
		<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_creation_compte_particulier.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
-->
	<div class="formulaire_creation_compte_entreprise" id="formulaire_creation_compte_entreprise">
		<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_creation_compte_entreprise.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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