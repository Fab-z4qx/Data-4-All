{include file='header.tpl'}

<section id="page_contact">

<div class="sous_titre">
	Formulaire de Contact
</div>

<div class="formulaire_contact">

<form method="post" action="traitement_contact.php">

<div class="form-left">
<h3 class="label"><label for="nom">Nom</label> </h3><input type="text" name="nom" id="nom"/>
<h3 class="label"><label for="email">Email</label> </h3><input type="email" id="email"/>
<h3 class="label"><label for="sujet">Sujet</label> </h3><input type="text" name="sujet" id="sujet" />
</div>


<div class="form-right">
<h3 class="label"><label for="messages">Messages</label></h3><textarea name="messages" id="messages"></textarea>
</div>

<input type="submit" value="Submit">
</form>
</div>

</section>

{include file='footer.tpl'}

