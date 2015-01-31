
<form method="post" action="traitement_form_creation_compte_entreprise.php">

		<label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label>
		<input type="text" name="nom_entreprise" id="nom_entreprise"/><br><br>
		
		<label class="form_entreprise" for="email_entreprise">Email :</label>
		<input type="email_entreprise" name="email_entreprise" id="email_entreprise" require /><br><br>
		
		<label class="form_entreprise" for="numero_rue">Numéro de rue :</label>
		<input type="text" name="numero_rue" id="numero_rue" require/><br><br>

		<label class="form_entreprise" for="adresse">Adresse :</label>
		<input type="text" name="adresse" id="adresse" require/><br><br>

		<label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label>
		<input type="text" name="adresse_complementaire" id="adresse_complementaire"/><br><br>
		
		<label class="form_entreprise" for="ville">Ville :</label>
		<input type="text" name="ville" id="ville"/><br><br>
		
		<label class="form_entreprise" for="code_postal">Code Postale :</label>
		<input type="text" name="code_postal" id="code_postal"/><br><br>
		
		<label class="form_entreprise" for="pays">Pays :</label>
		<input type="text" name="pays" id="pays"/><br><br>
		
		<label class="form_entreprise" for="tel_entreprise">Tel :</label>
		<input type="text" name="tel_entreprise" id="tel_entreprise"/><br><br>

		<label class="form_entreprise" for="fax_entrepirse">Fax :</label>
		<input type="text" name="fax_entreprise" id="fax_entreprise"/><br><br>

		<label class="form_entreprise" for="num_tva_entreprise">Numéro de TVA Intracommunautaire :</label>
		<input type="text" name="num_tva_entreprise" id="num_tva_entreprise"/><br><br>
		
		<label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label>
		<input type="text" name="siret_entreprise" id="siret_entreprise"/><br><br>
		
		<label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique RCS :</label>
		<input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise"/><br><br>
		
		<label class="form_entreprise" for="date_immat_rcs_entreprise">Date immatriculation RCS :</label>
		<input type="text" name="date_immat_rcs_entreprise" id="date_immat_rcs_entreprise"/><br><br>
		
		<label class="form_entreprise" for="activite_entreprise">Description de l'activité de l'entreprise :</label>
		<textarea style="resize:none;" rows="1" cols="18" name="activite_entreprise" id="activite_entreprise"></textarea><br><br>
		
		<label class="form_entreprise" for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" require /><br><br>
		
		<label class="form_entreprise" for="password_confirmation">Confirmation du mot de passe :</label>
		<input type="password" name="password_confirmation" id="password_confirmation" require /><br><br>
	
		<div id="captcha2"></div>
		<input class="bouton_submit" type="submit" value="Continuer">
</form>