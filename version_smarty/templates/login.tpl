{include file='header.tpl'}



{if ({$header} == 'compte_cree')}
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
{/if}

<div class="page_creation_compte">

	<div id="row">
			<div class="block_left">
					<form method="post" action="htdocs/traitement_form_connexion.php">
							<input type="text" placeholder="adresse email" name="login" id="login"/>&nbsp;&nbsp;
							<input type="password" placeholder="mot de passe" name="password"  id="password"/>&nbsp;&nbsp;&nbsp;&nbsp;
							<input class="con" type="submit" value="Connexion">
					</form>
			</div>
			<div class="block_right">
				<div id="offres_entreprise">
			       <a id="offres_bouton_contact" href="register.php">S'enregister</a>
			   </div>
			</div>
	</div>
</div>
{include file='footer.tpl'}