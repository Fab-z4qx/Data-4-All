<?php /* Smarty version Smarty-3.1.13, created on 2015-01-25 19:31:45
         compiled from "/opt/lampp/htdocs/Data4All/version_smarty/templates/formulaires/formulaire_contact_home_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53377522954c53691d771a0-28891082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10adde53f709445146529080209584386a76fee5' => 
    array (
      0 => '/opt/lampp/htdocs/Data4All/version_smarty/templates/formulaires/formulaire_contact_home_page.tpl',
      1 => 1421777328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53377522954c53691d771a0-28891082',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c53691d782a0_68896367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c53691d782a0_68896367')) {function content_54c53691d782a0_68896367($_smarty_tpl) {?><form method="post" action="htdocs/traitement_contact_home_page.php">

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