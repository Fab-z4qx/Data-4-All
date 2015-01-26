<?php /* Smarty version Smarty-3.1.13, created on 2015-01-25 19:31:45
         compiled from "/opt/lampp/htdocs/Data4All/version_smarty/templates/formulaires/formulaire_connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82971211954c53691d51c59-93620222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76c8223c87b22fb963ba26f4dd45b7e360befff4' => 
    array (
      0 => '/opt/lampp/htdocs/Data4All/version_smarty/templates/formulaires/formulaire_connexion.tpl',
      1 => 1421777328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82971211954c53691d51c59-93620222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c53691d52669_83962565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c53691d52669_83962565')) {function content_54c53691d52669_83962565($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<input type="text" placeholder="adresse email" name="id" id="id"/>&nbsp;&nbsp;
		<input type="password" placeholder="mot de passe" name="mdp"  id="mdp"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input class="con" type="submit" value="Sign It">

</form><?php }} ?>