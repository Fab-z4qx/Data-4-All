<form method="post" action="traitement_form_creation_compte_particulier.php">
		<label class="form_particulier" for="email">Email :</label>
		<input type="email" name="email" id="email" require/><br><br>

		<label class="form_particulier" for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" require/><br><br>
		
		<label class="form_particulier" for="password_confirmation">Confirmation :</label>
		<input type="password" name="password_confirmation" id="password_confirmation" require/><br><br>
			<div id="captcha">
		<p></p>
			{echo_captcha}
		<p></p>
		</div>
		<input class="bouton_submit" type="submit" value="Continuer">
</form>