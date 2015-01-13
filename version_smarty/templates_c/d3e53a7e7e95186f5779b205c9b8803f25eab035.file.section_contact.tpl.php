<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 22:20:08
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25124144054b14541c61547-22891455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3e53a7e7e95186f5779b205c9b8803f25eab035' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_contact.tpl',
      1 => 1421183916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25124144054b14541c61547-22891455',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b14541c62980_00762446',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14541c62980_00762446')) {function content_54b14541c62980_00762446($_smarty_tpl) {?><section id="contact">
	<div class="sectionContact">
		

			<div class="titreSectionContact">Contact</div>

			<div class="section_contact" id="membres">
				
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








	</div>

	<div id="Gmap">
		<iframe id="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.6434946481468!2d2.363700000000005!3d48.788696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sfr!2sfr!4v1417033586096"></iframe>
	</div>
	
	
</section>
<?php }} ?>