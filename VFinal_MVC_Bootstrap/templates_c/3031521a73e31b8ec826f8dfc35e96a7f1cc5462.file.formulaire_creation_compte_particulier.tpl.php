<?php /* Smarty version Smarty-3.1.13, created on 2015-02-01 16:53:22
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_particulier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140318270654ca57966268d0-64015408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3031521a73e31b8ec826f8dfc35e96a7f1cc5462' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_particulier.tpl',
      1 => 1422805932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140318270654ca57966268d0-64015408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca5796628929_23770772',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca5796628929_23770772')) {function content_54ca5796628929_23770772($_smarty_tpl) {?><form method="post" action="traitement_form_creation_compte_particulier.php">
		<label class="form_particulier" for="email">Email :</label>
		<input type="email" name="email" id="email" require/><br><br>

		<label class="form_particulier" for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" require/><br><br>
		
		<label class="form_particulier" for="password_confirmation">Confirmation :</label>
		<input type="password" name="password_confirmation" id="password_confirmation" require/><br><br>

		<div id="captcha">
				<?php echo echo_captcha(array(),$_smarty_tpl);?>

		</div>
		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>