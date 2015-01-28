<?php /* Smarty version Smarty-3.1.13, created on 2015-01-12 00:03:36
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaire_creation_compte_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132388330454b2a052bb4fb6-35498449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba2d73739ab88dff650fd67a9e0ff99f6099e2f2' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/formulaire_creation_compte_entreprise.tpl',
      1 => 1421017415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132388330454b2a052bb4fb6-35498449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b2a052bba5f9_45354086',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2a052bba5f9_45354086')) {function content_54b2a052bba5f9_45354086($_smarty_tpl) {?><form method="post" action="traitement.php">
		<p><label for="name_entreprise">Nom entreprise :</label><input type="text" name="name_entreprise" id="name_entreprise" size="30" maxlength="10" /> </p>
		<p><label for="email">Email :</label><input type="email" /></p>
		<p><label for="url_website">Adresse site web :</label><input type="url" /></p>
		<p><label for="number_street">Numéro de rue :</label><input type="text" name="number_street" id="pseudo" size="30" maxlength="10" /> </p>
		<p><label for="name_street">Rue :</label><input type="text" name="name_street" id="name_street" size="30" maxlength="10" /> </p>
		<p><label for="name_city">Ville :</label><input type="text" name="name_city" id="name_city" size="30" maxlength="10" /> </p>
		<p><label for="postcode">Code Postale :</label><input type="text" name="postcode" id="postcode" size="30" maxlength="10" /> </p>
		<p><label for="country">Pays :</label><input type="text" name="country" id="country" size="30" maxlength="10" /> </p>
		<p><label for="number_tva">Numéro de TVA Intracommunautaire :</label><input type="text" name="number_tva" id="number_tva" size="30" maxlength="10" /> </p>
		<p><label for="number_siret">Numéro Siret :</label><input type="text" name="number_siret" id="number_siret" size="30" maxlength="10" /> </p>
		<p><label for="number_siret_siege">Numéro de Siret (Siège) :</label><input type="text" name="number_siret_siege" id="number_siret_siege" size="30" maxlength="10" /> </p>
		<p><label for="former_law">Forme juridique RCS :</label><input type="text" name="former_law" id="former_law" size="30" maxlength="10" /> </p>
		<p><label for="date_immatriculation">Date immatriculation RCS :</label><input type="text" name="date_immatriculation" id="date_immatriculation" size="30" maxlength="10" /> </p>
		<p><label for="description_activity">Description de l'activité de l'entreprise :</label><textarea style="resize:none;" rows="1" cols="25" name="description_activity" id="description_activity"></textarea> </p>
		<p><label for="password">Mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
		<p><label for="password_confirmation">Confirmation du mot de passe :</label><input type="password" name="pass" id="pass" size="30" maxlength="10" /> </p>
		<input class="bouton_submit" type="submit" value="Continuer">
</form><?php }} ?>