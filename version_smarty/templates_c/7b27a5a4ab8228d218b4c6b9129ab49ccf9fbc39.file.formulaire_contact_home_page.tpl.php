<?php /* Smarty version Smarty-3.1.13, created on 2015-01-15 01:04:12
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_contact_home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656837054b626095d1e36-46047182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b27a5a4ab8228d218b4c6b9129ab49ccf9fbc39' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_contact_home_page.tpl',
      1 => 1421280064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656837054b626095d1e36-46047182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b626095d3452_36214451',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b626095d3452_36214451')) {function content_54b626095d3452_36214451($_smarty_tpl) {?><form method="post" action="htdocs/traitement_contact_home_page.php">

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