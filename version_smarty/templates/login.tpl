{include file='header.tpl'}

<div class="page_creation_compte">

<script type="text/javascript">
	var RecaptchaOptions = { theme : 'clean' };
</script>	


{if ({$header} == 'index')}
<div id="titre_creation_compte">
		<div class="titre_left">
				Particulier
		</div>

		<div class="titre_right">
				Entreprise
			</div>
	</div>

	<div id="row">
			<div class="block_left">
					{include file='formulaires/formulaire_creation_compte_particulier.tpl'}
			</div>

			<div class="block_right">
					{include file='formulaires/formulaire_creation_compte_entreprise.tpl'}
			</div>
	</div>

	<div id="titre_creation_compte">
		<div class="titre_left">
				Particulier
		</div>

		<div class="titre_right">
				Entreprise
			</div>
	</div>

	<div id="row">
			<div class="block_left">
					{include file='formulaires/formulaire_creation_compte_particulier.tpl'}
			</div>

			<div class="block_right">
					{include file='formulaires/formulaire_creation_compte_entreprise.tpl'}
			</div>
	</div>
{elseif ({$header} == 'compte_cree')}
	<div id="titre_creation_compte">
		<div class="validation">
				Le compte à été crée avec success
		</div>
	</div>
{elseif ({$header} == 'error')}
	<div id="Error">
		<div class="error">
				Le compte n'as pas été créer !
				l'erreur suivante à été détécté : {$error}
		</div>
	</div>

{elseif ({$header} == 'compte_exist')}
	<div id="Error">
		<div class="error">
				Le compte n'as pas été créer car il existe déja !
		</div>
	</div>
{else}
<div id="titre_creation_compte">
		<div class="titre_left">
				Particulier
		</div>

		<div class="titre_right">
				Entreprise
			</div>
	</div>

	<div id="row">
			<div class="block_left">
					{include file='formulaires/formulaire_creation_compte_particulier.tpl'}
			</div>

			<div class="block_right">
					{include file='formulaires/formulaire_creation_compte_entreprise.tpl'}
			</div>
	</div>

	<div id="titre_creation_compte">
		<div class="titre_left">
				Particulier
		</div>

		<div class="titre_right">
				Entreprise
			</div>
	</div>

	<div id="row">
			<div class="block_left">
					{include file='formulaires/formulaire_creation_compte_particulier.tpl'}
			</div>

			<div class="block_right">
					{include file='formulaires/formulaire_creation_compte_entreprise.tpl'}
			</div>
	</div>
{/if}

</div>
{include file='footer.tpl'}