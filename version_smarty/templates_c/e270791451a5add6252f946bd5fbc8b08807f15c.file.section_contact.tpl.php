<?php /* Smarty version Smarty-3.1.13, created on 2015-01-11 11:50:53
         compiled from "F:\wamp\www\D4A\version_smarty\templates\body\section_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:610754b1641504dde8-92915101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e270791451a5add6252f946bd5fbc8b08807f15c' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\body\\section_contact.tpl',
      1 => 1420923587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '610754b1641504dde8-92915101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1641504fc37_77768963',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1641504fc37_77768963')) {function content_54b1641504fc37_77768963($_smarty_tpl) {?><section id="contact">
	<div class="sectionContact">
		<center>

			<div class="titreSectionContact">Contact</div>

			<div class="section_contact" id="membres">
				
			</div>

		</center>
		
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

	</div>

	<div id="Gmap">
		<iframe id="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.6434946481468!2d2.363700000000005!3d48.788696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sfr!2sfr!4v1417033586096"></iframe>
	</div>
	
	
</section>
<?php }} ?>