<?php /* Smarty version Smarty-3.1.13, created on 2015-01-13 22:53:23
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75999129654b145448f5849-75146890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac38b48d8f27ce19cb6001de5a35984cf4d2285' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/contact.tpl',
      1 => 1421185928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75999129654b145448f5849-75146890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1454493bfa4_35542716',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1454493bfa4_35542716')) {function content_54b1454493bfa4_35542716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>