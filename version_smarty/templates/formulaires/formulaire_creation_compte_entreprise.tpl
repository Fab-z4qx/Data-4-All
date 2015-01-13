<form method="post" action="traitement_form_creation_compte_entreprise.php">
		<p><label for="nom">Nom entreprise :</label><input type="text" name="nom" id="nom_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="email">Email :</label><input type="email" /></p>
		
		<!--<p><label for="url_website">Adresse site web :</label><input type="url" /></p>-->
		
		<p><label for="numero_rue">Numéro de rue :</label><input type="text" name="numero_rue" id="numero_rue" size="30" maxlength="10" /> </p>
		
		<p><label for="adresse">Rue :</label><input type="text" name="adresse" id="adresse" size="30" maxlength="10" /> </p>

		<p><label for="adresse_complementaire">Rue (complémentaire) :</label><input type="text" name="adresse_complementaire" id="adresse_complementaire" size="30" maxlength="10" /> </p>
		
		<p><label for="ville">Ville :</label><input type="text" name="ville" id="ville" size="30" maxlength="10" /> </p>
		
		<p><label for="code_postal">Code Postale :</label><input type="text" name="code_postal" id="code_postal" size="30" maxlength="10" /> </p>
		
		<p><label for="pays">Pays :</label><input type="text" name="pays" id="pays" size="30" maxlength="10" /> </p>
		
		<p><label for="numero">Tel :</label><input type="text" name="numero" id="numero" size="30" maxlength="10" /></p>

		<p><label for="fax">Fax :</label><input type="text" name="fax" id="fax" size="30" maxlength="10" /></p>

		<p><label for="num_tva">Numéro de TVA Intracommunautaire :</label><input type="text" name="num_tva" id="num_tva" size="30" maxlength="10" /> </p>
		
		<p><label for="siret">Numéro Siret :</label><input type="text" name="siret" id="siret" size="30" maxlength="10" /> </p>
		
		<!--<p><label for="number_siret_siege">Numéro de Siret (Siège) :</label><input type="text" name="number_siret_siege" id="number_siret_siege" size="30" maxlength="10" /> </p>-->
		
		<p><label for="forme_juridique">Forme juridique RCS :</label><input type="text" name="forme_juridique" id="forme_juridique" size="30" maxlength="10" /> </p>
		
		<p><label for="date_immat_rcs">Date immatriculation RCS :</label><input type="text" name="date_immat_rcs" id="date_immat_rcs" size="30" maxlength="10" /> </p>
		
		<p><label for="activitee">Description de l'activité de l'entreprise :</label><textarea style="resize:none;" rows="1" cols="25" name="activitee" id="activitee"></textarea> </p>
		
		<p><label for="password">Mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
		
		<p><label for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
		<input class="bouton_submit" type="submit" value="Continuer">
</form>