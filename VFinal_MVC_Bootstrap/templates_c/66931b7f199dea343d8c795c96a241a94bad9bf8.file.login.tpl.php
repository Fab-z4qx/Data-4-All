<?php /* Smarty version Smarty-3.1.13, created on 2015-02-01 16:53:22
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137393907954ca57965d05e7-05333717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66931b7f199dea343d8c795c96a241a94bad9bf8' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/login.tpl',
      1 => 1422805932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137393907954ca57965d05e7-05333717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca579661c8c4_22260874',
  'variables' => 
  array (
    'header' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca579661c8c4_22260874')) {function content_54ca579661c8c4_22260874($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="page_creation_compte">

<script type="text/javascript">
	var RecaptchaOptions = { theme : 'clean' };
</script>	
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1=='index')){?>

<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2=='compte_cree')){?>
	<div id="titre_creation_compte">
		<div class="validation">
				Le compte à été crée avec success
		</div>
	</div>
<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3=='error')){?>
	<div id="Error">
		<div class="error">
				Le compte n'as pas été créer !
				l'erreur suivante à été détécté : <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

		</div>
	</div>

<?php }else{?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if (($_tmp4=='compte_exist')){?>
	<div id="Error">
		<div class="error">
				Le compte n'as pas été créer car il existe déja !
		</div>
	</div>
<?php }else{ ?>
<div id="titre_creation_compte">
		<div class="titre_left">
				Particulier
		</div>

		<div class="titre_right">
				Entreprise
		</div>
	</div>

	<div id="row">
			<div class="block_left">
					<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_creation_compte_particulier.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>

			<div class="block_right">
				<div id="offres_entreprise">
			       <a id="offres_bouton_contact" href="register_entreprise.php">Entreprise</a>
			   </div>
			</div>
	</div>
<?php }}}}?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>