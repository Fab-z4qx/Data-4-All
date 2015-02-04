<?php /* Smarty version Smarty-3.1.13, created on 2015-01-31 10:52:00
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_compteur.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211828932554ca57954293b7-98429069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0658027cf7db687d0e1fb5dcdd610c35d77bad' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_compteur.tpl',
      1 => 1422697791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211828932554ca57954293b7-98429069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca579543bcb2_34213423',
  'variables' => 
  array (
    'nbr_entreprise' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca579543bcb2_34213423')) {function content_54ca579543bcb2_34213423($_smarty_tpl) {?><section id="compteur">
	<!--
		<div class="count">
			<center>
			<div class="titre_count">Nombre d'entreprise</div>
			<div class="nombre_count"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
</div>
			</center>
		</div>

		<div class="count">
			<center>
			<div class="titre_count">Nombre d'entreprise</div>
			<div class="nombre_count"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
</div>
			</center>
		</div>

		<div class="count">
			<center>
			<div class="titre_count">Nombre d'entreprise</div>
			<div class="nombre_count"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
</div>
			</center>
		</div>

		<div class="count">
			<center>
			<div class="titre_count">Nombre d'entreprise</div>
			<div class="nombre_count"><?php echo $_smarty_tpl->tpl_vars['nbr_entreprise']->value;?>
</div>
			</center>
		</div>
-->
	<center>
		<div class="progress">
		  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
			  <B>Compteur entreprises 1<B>
		  </div>
		</div>
		<div class="progress">
		  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
			  <B>Compteur entreprises 2<B>
		  </div>
		</div>
		<div class="progress">
		  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
			  <B>Compteur entreprises 3<B>
		  </div>
		</div>
		<div class="progress">
		  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
			  <B>Compteur entreprises 4<B>
		  </div>
		</div>
	</center>
</section><?php }} ?>