<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 15:18:31
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaires\formulaire_contact_home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1751654b7da47e896b1-85627403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb7883651b6f3b4f42c60d20a75c8199a3da4e8' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaires\\formulaire_contact_home_page.tpl',
      1 => 1421334847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1751654b7da47e896b1-85627403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b7da47ea81a5_90330954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7da47ea81a5_90330954')) {function content_54b7da47ea81a5_90330954($_smarty_tpl) {?><form method="post" action="htdocs/traitement_contact_home_page.php">

<div class="form-left">
		<h3 class="label"><label for="nom_contact">Nom</label> </h3><input type="text" name="nom_contact" id="nom_contact"/>
		<h3 class="label"><label for="email_contact">Email</label> </h3><input type="email_contact" name="email_contact" id="email_contact"/>
		<h3 class="label"><label for="sujet_contact">Sujet</label> </h3><input type="text" name="sujet_contact" id="sujet_contact" />
</div>


<div class="form-right">
		<h3 class="label"><label for="message_contact">Messages</label></h3><textarea style="resize:none;" rows="11" cols="25" name="message_contact" id="message_contact"></textarea>
		</div>

<br><br><br>
<input class="bouton_submit_home_page" type="submit" value="Envoyer">

</form><?php }} ?>