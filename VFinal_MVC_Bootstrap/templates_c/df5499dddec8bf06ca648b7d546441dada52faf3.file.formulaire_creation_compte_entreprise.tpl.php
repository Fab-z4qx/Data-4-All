<?php /* Smarty version Smarty-3.1.13, created on 2015-02-01 16:53:25
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72266650754ca579662b864-36635110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5499dddec8bf06ca648b7d546441dada52faf3' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_entreprise.tpl',
      1 => 1422805932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72266650754ca579662b864-36635110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca5796633606_28033389',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca5796633606_28033389')) {function content_54ca5796633606_28033389($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
	var RecaptchaOptions = { theme : 'clean' };
</script>	

<div id="offres_entreprise">		   

<form method="post" action="traitement_form_creation_compte_entreprise.php">

		<label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label>
		<input type="text" name="nom_entreprise" id="nom_entreprise"/><br><br>
		
		<label class="form_entreprise" for="email_entreprise">Email :</label>
		<input type="email_entreprise" name="email_entreprise" id="email_entreprise" require /><br><br>

		<label class="form_entreprise" for="adresse">Adresse :</label>
		<input type="text" name="adresse" id="adresse" require/><br><br>

		<label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label>
		<input type="text" name="adresse_complementaire" id="adresse_complementaire"/><br><br>
		
		<label class="form_entreprise" for="ville">Ville :</label>
		<input type="text" name="ville" id="ville"/><br><br>
		
		<label class="form_entreprise" for="code_postal">Code Postale :</label>
		<input type="text" name="code_postal" id="code_postal"/><br><br>
		
		<label class="form_entreprise" for="pays">Pays :</label>
		<input type="text" name="pays" id="pays"/><br><br>
		
		<label class="form_entreprise" for="tel_entreprise">Tel :</label>
		<input type="text" name="tel_entreprise" id="tel_entreprise"/><br><br>

		<label class="form_entreprise" for="fax_entrepirse">Fax :</label>
		<input type="text" name="fax_entreprise" id="fax_entreprise"/><br><br>

		<label class="form_entreprise" for="num_tva_entreprise">Numéro de TVA Intracommunautaire :</label>
		<input type="text" name="num_tva_entreprise" id="num_tva_entreprise"/><br><br>
		
		<label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label>
		<input type="text" name="siret_entreprise" id="siret_entreprise"/><br><br>
		
		<label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique RCS :</label>
		<input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise"/><br><br>
		
		<label class="form_entreprise" for="date_immat_rcs_entreprise">Date immatriculation RCS :</label>
		<input type="text" name="date_immat_rcs_entreprise" id="date_immat_rcs_entreprise"/><br><br>
		
		<label class="form_entreprise" for="activite_entreprise">Description de l'activité de l'entreprise :</label>
		<textarea style="resize:none;" rows="1" cols="18" name="activite_entreprise" id="activite_entreprise"></textarea><br><br>
		
		<label class="form_entreprise" for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" require /><br><br>
		
		<label class="form_entreprise" for="password_confirmation">Confirmation du mot de passe :</label>
		<input type="password" name="password_confirmation" id="password_confirmation" require /><br><br>
		<div id="captcha">
			<?php echo echo_captcha(array(),$_smarty_tpl);?>

		</div>
		<input class="bouton_submit" type="submit" value="Continuer">
</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>