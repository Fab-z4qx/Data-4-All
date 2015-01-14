<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 00:16:00
         compiled from "C:\wamp\www\Data4All\version_smarty\templates\formulaires\formulaire_contact_home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2639254b6f712acd5d2-97914644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9479fea11268c6aa41527900b5f6d1216e8c9a43' => 
    array (
      0 => 'C:\\wamp\\www\\Data4All\\version_smarty\\templates\\formulaires\\formulaire_contact_home_page.tpl',
      1 => 1421277356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2639254b6f712acd5d2-97914644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b6f712ae1809_18728538',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6f712ae1809_18728538')) {function content_54b6f712ae1809_18728538($_smarty_tpl) {?><form method="post" action="htdocs/traitement_contact_home_page.php">

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