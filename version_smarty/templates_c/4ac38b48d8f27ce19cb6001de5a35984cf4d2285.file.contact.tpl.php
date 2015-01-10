<?php /* Smarty version Smarty-3.1.13, created on 2015-01-10 20:38:12
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75999129654b145448f5849-75146890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ac38b48d8f27ce19cb6001de5a35984cf4d2285' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/contact.tpl',
      1 => 1420918685,
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

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>