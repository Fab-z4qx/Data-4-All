{include file='header.tpl'}

<section id="page_contact">

<div class="sous_titre">
	Formulaire de Contact
</div>

<div class="formulaire_contact">

<form method="post" action="traitement_contact.php">

<div class="form-left">
<h3 class="label"><label for="nom_contact">Nom</label> </h3><input type="text" name="nom_contact" id="nom_contact"/>
<h3 class="label"><label for="email_contact">Email</label> </h3><input type="email_contact" id="email_contact"/>
<h3 class="label"><label for="sujet_contact">Sujet</label> </h3><input type="text" name="sujet_contact" id="sujet_contact" />
</div>


<div class="form-right">
<h3 class="label"><label for="message_contact">Messages</label></h3><textarea style="resize:none;" rows="11" cols="25" name="message_contact" id="message_contact"></textarea>
</div>
<br><br><br>
<input class="bouton_submit_home_page" type="submit" value="Envoyer">
</form>
</div>

</section>

{include file='footer.tpl'}

