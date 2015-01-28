
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
		{include file='formulaires/formulaire_connexion_compte_entreprise.tpl'}
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
		{include file='formulaires/formulaire_creation_compte_particulier.tpl'}
	</div>
-->
	<div class="formulaire_creation_compte_entreprise" id="formulaire_creation_compte_entreprise">
		{include file='formulaires/formulaire_creation_compte_entreprise.tpl'}
	</div>
	
	<script type="text/javascript">
        afficher_cacher('formulaire_creation_compte_entreprise');
        afficher_cacher('formulaire_creation_compte_particulier');
    </script>

</div>

</section>

</div>

{include file='footer.tpl'}