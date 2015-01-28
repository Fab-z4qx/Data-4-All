<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 10:12:45
         compiled from "F:\wamp\www\D4A\version_smarty\templates\formulaires\formulaire_creation_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:713054c8af631aee58-87223142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c356b3feeb6affc0851a83f42f2565c7df5e7c42' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\formulaires\\formulaire_creation_compte_entreprise.tpl',
      1 => 1422439965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '713054c8af631aee58-87223142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c8af631f6be8_58463912',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c8af631f6be8_58463912')) {function content_54c8af631f6be8_58463912($_smarty_tpl) {?>

<form method="post" action="traitement_form_creation_compte_entreprise.php">
		<p><label for="nom_entreprise">Nom entreprise :</label><input type="text" name="nom_entreprise" id="nom_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="email_entreprise">Email :</label><input type="email_entreprise" /></p>
		
		<p><label for="numero_rue">Numéro de rue :</label><input type="text" name="numero_rue" id="numero_rue" size="30" maxlength="10" /> </p>

		<p><label for="adresse">Adresse :</label><input type="text" name="adresse" id="adresse" size="30" maxlength="10" /> </p>

		<p><label for="adresse_complementaire">Adresse complémentaire :</label><input type="text" name="adresse_complementaire" id="adresse_complementaire" size="30" maxlength="10" /> </p>
		
		<p><label for="ville">Ville :</label><input type="text" name="ville" id="ville" size="30" maxlength="10" /> </p>
		
		<p><label for="code_postal">Code Postale :</label><input type="text" name="code_postal" id="code_postal" size="30" maxlength="10" /> </p>
		
		<p><label for="pays">Pays :</label><input type="text" name="pays" id="pays" size="30" maxlength="10" /> </p>
		
		<p><label for="tel_entreprise">Tel :</label><input type="text" name="tel_entreprise" id="tel_entreprise" size="30" maxlength="10" /></p>

		<p><label for="fax_entrepirse">Fax :</label><input type="text" name="fax" id="fax" size="30" maxlength="10" /></p>

		<p><label for="num_tva_entreprise">Numéro de TVA Intracommunautaire :</label><input type="text" name="num_tva_entreprise" id="num_tva_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="siret_entreprise">Numéro Siret :</label><input type="text" name="siret_entreprise" id="siret_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="forme_juridique_entreprise">Forme juridique RCS :</label><input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="date_immat_rcs_entreprise">Date immatriculation RCS :</label><input type="text" name="date_immat_rcs_entreprise" id="date_immat_rcs_entreprise" size="30" maxlength="10" /> </p>
		
		<p><label for="activite_entreprise">Description de l'activité de l'entreprise :</label><textarea style="resize:none;" rows="1" cols="25" name="activite_entreprise" id="activite_entreprise"></textarea> </p>
		
		<p><label for="password">Mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
		
		<p><label for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>

		<script type="text/javascript">
			var RecaptchaOptions = { theme : 'clean' };
		</script>

		<?php echo echo_captcha(array(),$_smarty_tpl);?>

		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>