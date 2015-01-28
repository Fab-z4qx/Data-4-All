<?php /* Smarty version Smarty-3.1.13, created on 2015-01-19 23:31:16
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194718486954b377e3220f40-90515759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df5499dddec8bf06ca648b7d546441dada52faf3' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaires/formulaire_creation_compte_entreprise.tpl',
      1 => 1421706673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194718486954b377e3220f40-90515759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b377e3223628_72794874',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b377e3223628_72794874')) {function content_54b377e3223628_72794874($_smarty_tpl) {?><form method="post" action="traitement_form_creation_compte_entreprise.php">
		<label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label><input type="text" name="nom_entreprise" id="nom_entreprise"/><br><br>
		
		<label class="form_entreprise" for="email_entreprise">Email :</label><input type="email_entreprise" /><br><br>
		
		<label class="form_entreprise" for="numero_rue">Numéro de rue :</label><input type="text" name="numero_rue" id="numero_rue"/><br><br>

		<label class="form_entreprise" for="adresse">Adresse :</label><input type="text" name="adresse" id="adresse"/><br><br>

		<label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label><input type="text" name="adresse_complementaire" id="adresse_complementaire"/><br><br>
		
		<label class="form_entreprise" for="ville">Ville :</label><input type="text" name="ville" id="ville"/><br><br>
		
		<label class="form_entreprise" for="code_postal">Code Postale :</label><input type="text" name="code_postal" id="code_postal"/><br><br>
		
		<label class="form_entreprise" for="pays">Pays :</label><input type="text" name="pays" id="pays"/><br><br>
		
		<label class="form_entreprise" for="tel_entreprise">Tel :</label><input type="text" name="tel_entreprise" id="tel_entreprise"/><br><br>

		<label class="form_entreprise" for="fax_entrepirse">Fax :</label><input type="text" name="fax" id="fax"/><br><br>

		<label class="form_entreprise" for="num_tva_entreprise">Numéro de TVA Intracommunautaire :</label><input type="text" name="num_tva_entreprise" id="num_tva_entreprise"/><br><br>
		
		<label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label><input type="text" name="siret_entreprise" id="siret_entreprise"/><br><br>
		
		<label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique RCS :</label><input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise"/><br><br>
		
		<label class="form_entreprise" for="date_immat_rcs_entreprise">Date immatriculation RCS :</label><input type="text" name="date_immat_rcs_entreprise" id="date_immat_rcs_entreprise"/><br><br>
		
		<label class="form_entreprise" for="activite_entreprise">Description de l'activité de l'entreprise :</label><textarea style="resize:none;" rows="1" cols="18" name="activite_entreprise" id="activite_entreprise"></textarea><br><br>
		
		<label class="form_entreprise" for="password">Mot de passe :</label><input type="password" name="pass" id="pass"/><br><br>
		
		<label class="form_entreprise" for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="pass" id="pass"/><br><br>
		
		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>