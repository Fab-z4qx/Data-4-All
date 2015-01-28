<?php /* Smarty version Smarty-3.1.13, created on 2015-01-20 20:00:31
         compiled from "/Users/Timohee/Desktop/Data4All/pas_trop_long/templates/formulaires/form_con.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86048034854bea5cf84a779-42114366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f437d3f002010b0ad9aab9e604ba769749d6ffc9' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/pas_trop_long/templates/formulaires/form_con.tpl',
      1 => 1421780424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86048034854bea5cf84a779-42114366',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54bea5cf84c098_24914009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bea5cf84c098_24914009')) {function content_54bea5cf84c098_24914009($_smarty_tpl) {?><form method="post" action="htdocs/traitement_form_connexion.php">

		<input type="text" placeholder="adresse email" name="id" id="id"/>
		<input type="password" placeholder="mot de passe" name="mdp"  id="mdp"/>
		<input class="con" type="submit" value="Sign It">

</form><?php }} ?>