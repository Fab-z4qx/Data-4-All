<?php /* Smarty version Smarty-3.1.13, created on 2015-01-11 18:48:29
         compiled from "F:\wamp\www\D4A\version_smarty\templates\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:650854b18dc5bce0c8-95907284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751228044518608ee28da6a3f39ac19c45a35af0' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\contact.tpl',
      1 => 1421002058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650854b18dc5bce0c8-95907284',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b18dc5cdf6d9_88789352',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b18dc5cdf6d9_88789352')) {function content_54b18dc5cdf6d9_88789352($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
<br><br><br>
<input class="bouton_submit_home_page" type="submit" value="Submit">
</form>
</div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>