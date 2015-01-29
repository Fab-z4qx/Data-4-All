

<form method="post" action="traitement_form_creation_compte_entreprise.php">
<<<<<<< HEAD
<script type="text/javascript">
var RecaptchaOptions = { theme : 'clean' };
</script>

		<!-- Entreprise -->
		<p><label for="nom">Nom entreprise :</label><input type="text" name="nom_entreprise" id="nom_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="email">Email :</label><input type="email" name="email_entreprise" require/></p>
		
		<!--<p><label for="url_website">Adresse site web :</label><input type="url" /></p>-->
		
		<p><label for="numero">Tel :</label><input type="text" name="tel_entreprise" id="tel_entreprise" size="30" maxlength="10" /></p>

		<p><label for="fax">Fax :</label><input type="text" name="fax_entreprise" id="fax_entreprise" size="30" maxlength="10" /></p>

		<p><label for="num_tva">Numéro de TVA Intracommunautaire :</label><input type="text" name="num_tva_entreprise" id="num_tva_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="siret">Numéro Siret :</label><input type="text" name="siret_entreprise" id="siret_entreprise" size="30" maxlength="10" /> </p>
		
		<!--<p><label for="number_siret_siege">Numéro de Siret (Siège) :</label><input type="text" name="number_siret_siege" id="number_siret_siege" size="30" maxlength="10" /> </p>-->
		
		<p><label for="forme_juridique">Forme juridique RCS :</label><input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="date_immat_rcs">Date immatriculation RCS :</label><input type="text" name="date_immat_rcs_entreprise" id="date_immat_rcs_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="activite">Description de l'activité de l'entreprise :</label><textarea style="resize:none;" rows="1" cols="25" name="activite_entreprise" id="activite_entreprise"></textarea> </p>

		<!-- ADRESSE -->
		<p><label for="numero_rue">Numéro de rue :</label><input type="text" name="numero_rue" id="numero_rue" size="30" maxlength="10" /> </p>
		
		<p><label for="adresse">Rue :</label><input type="text" name="adresse" id="adresse" size="70" maxlength="70" /> </p>

		<p><label for="adresse_complementaire">Rue (complémentaire) :</label><input type="text" name="adresse_complementaire" id="adresse_complementaire" size="30" maxlength="50" /> </p>
		
		<p><label for="ville">Ville :</label><input type="text" name="ville" id="ville" size="20" maxlength="20" /> </p>
		
		<p><label for="code_postal">Code Postale :</label><input type="text" name="code_postal" id="code_postal" size="30" maxlength="10" /> </p>
		
		<p><label for="pays">Pays :</label><input type="text" name="pays" id="pays" size="30" maxlength="20" /> </p>
		
		<!-- USER -->
		<p><label for="password">Mot de passe :</label><input type="password" name="password" id="password" size="30" maxlength="10" /> </p>
		
		<p><label for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="password_confirmation" id="pass" size="30" maxlength="10" /> </p>

		{get_captcha}
=======
		<label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label><input type="text" name="nom_entreprise" id="nom_entreprise"/><br><br>
		
		<label class="form_entreprise" for="email_entreprise">Email :</label><input type="email_entreprise" /><br><br>
		
		<label class="form_entreprise" for="numero_rue">Numéro de rue :</label><input type="text" name="numero_rue" id="numero_rue"/><br><br>

		<label class="form_entreprise" for="adresse">Adresse :</label><input type="text" name="adresse" id="adresse"/><br><br>

		<label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label><input type="text" name="adresse_complementaire" id="adresse_complementaire"/><br><br>
		
		<label class="form_entreprise" for="ville">Ville :</label><input type="text" name="ville" id="ville"/><br><br>
		
		<label class="form_entreprise" for="code_postal">Code Postale :</label><input type="text" name="code_postal" id="code_postal"/><br><br>
		
		<label class="form_entreprise" for="pays">Pays :</label><input type="text" name="pays" id="pays"/><br><br>
		
		<label class="form_entreprise" for="tel_entreprise">Tel :</label><input type="text" name="tel_entreprise" id="tel_entreprise"/><br><br>

		<label class="form_entreprise" for="fax_entrepirse">Fax :</label><input type="text" name="fax" id="fax"/><br><br>

		<label class="form_entreprise" for="num_tva_entreprise">Numéro de TVA Intracommunautaire :</label><input type="text" name="num_tva_entreprise" id="num_tva_entreprise"/><br><br>
		
		<label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label><input type="text" name="siret_entreprise" id="siret_entreprise"/><br><br>
		
		<label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique RCS :</label><input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise"/><br><br>
		
		<label class="form_entreprise" for="date_immat_rcs_entreprise">Date immatriculation RCS :</label><input type="text" name="date_immat_rcs_entreprise" id="date_immat_rcs_entreprise"/><br><br>
		
		<label class="form_entreprise" for="activite_entreprise">Description de l'activité de l'entreprise :</label><textarea style="resize:none;" rows="1" cols="18" name="activite_entreprise" id="activite_entreprise"></textarea><br><br>
		
		<label class="form_entreprise" for="password">Mot de passe :</label><input type="password" name="pass" id="pass"/><br><br>
		
		<label class="form_entreprise" for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="pass" id="pass"/><br><br>
		

		<p><label for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>

<<<<<<< HEAD
		<script type="text/javascript">
			var RecaptchaOptions = { theme : 'clean' };
		</script>
		
		{echo_captcha}
>>>>>>> 9952cd1bd0e30f1088acbc0a094e31f4e28872a7
=======
>>>>>>> edfe924021ae68699438c1b785edb3fa868cf93f
		<input class="bouton_submit" type="submit" value="Continuer">
</form>