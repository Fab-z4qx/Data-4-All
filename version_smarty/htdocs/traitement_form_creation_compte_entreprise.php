<?php 
include("common.inc.php");

require(ROOT_DIR.INCLUDES.'fonctions.php');
require(ROOT_DIR.INCLUDES.'lib/lib.php');
require(ROOT_DIR.INCLUDES.'lib/recaptchalib.php');

$valid=true;

if(isset($_POST) && !empty($_POST))
{	
	if(DEBUG_MODE == 1)
	{
		echo PRE;
	 	echo print_r($_POST); 
	 	echo PREC;
	}

	extract($_POST);
	if( !verifierAdresseMail($email_entreprise) ) //Si les emails sont invalides
	{
		echo('<div class="information_invalide">Les emails ne sont pas des mail!</div>');
		$valid = false;
	}

	if( isset($nom_entreprise) && !empty($nom_entreprise) ) // Si le nom ou le prenom n'est pas valide != ^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,30})$
	{
		if(!verifierName($nom_entreprise)){
			echo('<div class="information_invalide">Nom invalide!</div>');
			$valid = false;
		}
	}
	else{
		echo('<div class="information_invalide">Pas de nom donné!</div>');
		$valid = false;
	}

	if(isset($adresse) && !empty($adresse))
	{
		if( !verifierAdresse($adresse) )
		{
			echo('<div class="information_invalide">Adresse invalide</div>');
			$valid = false;
		}
	}
	else{ 
		echo('<div class="information_invalide">Adresse non renseigné!</div>');
		$valid = false;
	}


	if(isset($adresse_complementaire) && !empty($adresse_complementaire) && !verifierAdresse($adresse_complementaire) ){
			echo('<div class="information_invalide">Complement d\'adresse invalide</div>');
			$valid = false;
	}

	if(isset($code_postal) && !empty($code_postal))
	{
		if( !verifierCodePostal($code_postal) ){
			echo('<div class="information_invalide">Code postal invalide</div>');
			$valid = false;
		}
	}
	else {
		echo('<div class="information_invalide">Code postal non renseigné!</div>');
		$valid = false;
	}

	if(isset($ville) && !empty($ville))
	{
		if( !verifierVille($ville) ){
			echo('<div class="information_invalide">Ville invalide</div>');
			$valid = false;
		}
	}
	else {
		echo('<div class="information_invalide">Ville non renseigné!</div>');
		$valid = false;
	}

	if(isset($pays) && !empty($pays))
	{
		if( !verifierPays($pays) ){
			echo('<div class="information_invalide">Pays invalide</div>');
			$valid = false;
		}
	}
	else {
		echo('<div class="information_invalide">Pays non renseigné!</div>');
		$valid = false;
	}

	if(isset($tel_entreprise) && !empty($tel_entreprise) && !verifierMobile($tel_entreprise) ){
			echo('<div class="information_invalide">Numero de fix invalide</div>');
			$valid = false;
	}

	if( isset($password) && !empty($password) && isset($password_confirmation) && !empty($password_confirmation))
	{
		if( $password != $password_confirmation )
		{
			echo('<div class="information_invalide">La verification du password est incorrecte</div>');
			$valid = false;
		}
	}
	else { 
		echo('<div class="information_invalide">Password non définit</div>');
		$valid = false;
	}

if($valid == true && captcha_valid())
{   //On ajoute l'user puis on recupere son id pour l'ajouter dans la bdd client
	$pdo = getPDOConnection();

	/* Ajout de l'adresse */
	// Check if addresse exist !
	$adresse_sql_req = "INSERT INTO `adresse` 
	(`id_adresse`, 
	`numero_rue`, 
	`code_postal`, 
	`pays`, 
	`adresse`, 
	`adresse_complementaire`, 
	`ville`) 
	VALUES (NULL, 
	".$pdo->quote($numero_rue).", 
	".$pdo->quote($code_postal).", 
	".$pdo->quote($pays).", 
	".$pdo->quote($adresse).",
	".$pdo->quote($adresse_complementaire).",
	".$pdo->quote($ville).");"; 

	/* Ajout dans la table Entreprise */
	if($pdo->exec($adresse_sql_req))
	{
		$id = $pdo->lastInsertId();
		$entreprise_sql_req = "INSERT INTO `entreprise` (
		`id_entreprise`, 
		`nom_entreprise`, 
		`email_entreprise`, 
		`siret_entreprise`, 
		`tel_entreprise`, 
		`fax_entreprise`, 
		`id_bdd_entreprise`, 
		`date_immat_rcs_entreprise`, 
		`forme_juridique_entreprise`, 
		`num_tva_entreprise`, 
		`activite_entreprise`, 
		`id_adresse`) 
		VALUES (NULL, 
		".$pdo->quote($nom_entreprise).",  
		".$pdo->quote($email_entreprise).", 
		".$pdo->quote($siret_entreprise).",  
		".$pdo->quote($tel_entreprise).", 
		".$pdo->quote($fax_entreprise).", 
		".$pdo->quote(null).", 
		".$pdo->quote($date_immat_rcs_entreprise).", 
		".$pdo->quote($forme_juridique_entreprise).", 
		".$pdo->quote($num_tva_entreprise).", 
		".$pdo->quote($activite_entreprise).", 
		".$id.");";

		if($pdo->exec($entreprise_sql_req))
		{

		}
		else
		{
			echo "Probleme avec l'insetion de l'entreprise";
			echo $entreprise_sql_req;
		}	
	}
	else {
		echo $adresse_sql_req;
		echo "Probleme avec l'insetion de l'adresse";
	}
		
	
	/* Ajout dans la table user */
	$id = $pdo->lastInsertId();
	$sql_user = "INSERT INTO `user` 
	(`id_user`, 
	`password`, 
	`login`, 
	`role`, 
	`id_entreprise`) 
	VALUES 
	(NULL, 
	".$pdo->quote(sha1($password)).",
	".$pdo->quote($email_entreprise).", 
	".$pdo->quote(ROLE_ENTREPRISE).", 
	".$id.");";
	
	if($pdo->exec($sql_user))
	{ //On à bien cree le compte du nouvelle utilisateur!
		header('Location:login.php?acc=ok');
	}
}

}

?>
<script type="text/javascript">
var RecaptchaOptions = { theme : 'clean' };
</script>
	<div class="content">
		<div class ="principal" style="height:auto;">
			</br>
			<form action="register.php?email=<?php if(isset($_GET['email'])) echo str_replace("'", "", $_GET['email']); ?>" method="post">
				<label for="email">Email : </label>
				<input type="email" class="email" name="email" value="<?php if(isset($_GET['email'])) echo str_replace("'", "", $_GET['email']); ?>"required/>
				<label for="confemail">Confirmation de l'email : </label>
				<input type="email" class="confimail" name="confemail" value="<?php if(isset($confemail)) echo $confemail; else echo "email"; ?>"required/></br>
				<p>Votre civilité :</p>
			       <input type="radio" name="civilite" value="M" id="Monsieur" required/> <label for="Monsieur">Monsieur</label>
			       <input type="radio" name="civilite" value="MMle" id="MMle" /> <label for="Monsieur">MMle</label>
			       <input type="radio" name="civilite" value="Mme" id="Mme" /> <label for="Mme">Mme</label></br>
			       <label for="prenom">Prenom</label> <input type="text" name="prenom" value="<?php if(isset($prenom)) echo $prenom;?>" required/> </br>
			       <label for="nom">Nom</label> <input type="text" name="nom" value="<?php if(isset($nom)) echo $nom; ?>" required/> </br>
			       <label for="jour">Jour</label> 
			        <select name="jour" id="jour" required>
			           <option value="0">- Jour - </option>
			           <option value="1">1</option>
			           <option value="2">2</option>
			           <option value="3">3</option>
			           <option value="4">4</option>
			           <option value="5">5</option>
			           <option value="6">6</option>
			           <option value="7">7</option>
			           <option value="9">9</option>
			           <option value="10">10</option>
			           <option value="11">11</option>
			           <option value="12">12</option>
			           <option value="13">13</option>
			           <option value="13">14</option>
			           <option value="15">15</option>
			           <option value="16">16</option>
			           <option value="17">17</option>
			           <option value="18">18</option>
			           <option value="19">19</option>
			           <option value="20">20</option>
			           <option value="21">21</option>
			           <option value="22">22</option>
			           <option value="23">23</option>
			           <option value="24">24</option>
			           <option value="25">25</option>
			           <option value="26">26</option>
			           <option value="27">27</option>
			           <option value="28">28</option>
			           <option value="29">29</option>
			           <option value="30">30</option>
			           <option value="31">31</option>
			       </select>
			       <label for="mois">Mois</label> 
			        <select name="mois" id="mois" required>
			           <option value="0">- Mois -</option>
			           <option value="1">janvier</option>
			           <option value="2">Février</option>
			           <option value="3">Mars</option>
			           <option value="4">Avril</option>
			           <option value="5">Mai</option>
			           <option value="6">Juin</option>
			           <option value="7">Juillet</option>
			           <option value="8">Aout</option>
			           <option value="9">Septembre</option>
			           <option value="10">Octobre</option>
			           <option value="11">Novembre</option>
			           <option value="12">Decembre</option>
			       </select>
			        <label for="annee">Année</label> 
			      <select name="annee" id="annee" required>
			       	<?php for($i=ANNEE_ACTUEL;$i>(ANNEE_ACTUEL-120);$i--)
			       	{?>
			       		<option value="<?php echo $i ?>"><?php echo $i ?></option><?php
			       	}?>
				  </select></br>
				  <p>Votre adresse :</p>
				 <label for="prenom">Votre adresse : </label> <input type="text" name="adresse" value="<?php if(isset($adresse)) echo $adresse; ?>" required/> </br>
				 <label for="prenom">Complement d'adresse : </label> <input type="text" name="comadresse" value="<?php if(isset($comadresse)) echo $comadresse; ?>"/> </br>
				 <label for="pays">Pays : </label> 
				 <select name="pays"> 
					<option value="France" selected="selected">France </option>
					<option value="Afghanistan">Afghanistan </option>
					<option value="Afrique_Centrale">Afrique_Centrale </option>
					<option value="Afrique_du_sud">Afrique_du_Sud </option> 
					<option value="Albanie">Albanie </option>
					<option value="Algerie">Algerie </option>
					<option value="Allemagne">Allemagne </option>
					<option value="Andorre">Andorre </option>
					<option value="Angola">Angola </option>
					<option value="Anguilla">Anguilla </option>
					<option value="Arabie_Saoudite">Arabie_Saoudite </option>
					<option value="Argentine">Argentine </option>
					<option value="Armenie">Armenie </option> 
					<option value="Australie">Australie </option>
					<option value="Autriche">Autriche </option>
					<option value="Azerbaidjan">Azerbaidjan </option>
					<option value="Bahamas">Bahamas </option>
					<option value="Bangladesh">Bangladesh </option>
					<option value="Barbade">Barbade </option>
					<option value="Bahrein">Bahrein </option>
					<option value="Belgique">Belgique </option>
					<option value="Belize">Belize </option>
					<option value="Benin">Benin </option>
					<option value="Bermudes">Bermudes </option>
					<option value="Bielorussie">Bielorussie </option>
					<option value="Bolivie">Bolivie </option>
					<option value="Botswana">Botswana </option>
					<option value="Bhoutan">Bhoutan </option>
					<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
					<option value="Bresil">Bresil </option>
					<option value="Brunei">Brunei </option>
					<option value="Bulgarie">Bulgarie </option>
					<option value="Burkina_Faso">Burkina_Faso </option>
					<option value="Burundi">Burundi </option>
					<option value="Caiman">Caiman </option>
					<option value="Cambodge">Cambodge </option>
					<option value="Cameroun">Cameroun </option>
					<option value="Canada">Canada </option>
					<option value="Canaries">Canaries </option>
					<option value="Cap_vert">Cap_Vert </option>
					<option value="Chili">Chili </option>
					<option value="Chine">Chine </option> 
					<option value="Chypre">Chypre </option> 
					<option value="Colombie">Colombie </option>
					<option value="Comores">Colombie </option>
					<option value="Congo">Congo </option>
					<option value="Congo_democratique">Congo_democratique </option>
					<option value="Cook">Cook </option>
					<option value="Coree_du_Nord">Coree_du_Nord </option>
					<option value="Coree_du_Sud">Coree_du_Sud </option>
					<option value="Costa_Rica">Costa_Rica </option>
					<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
					<option value="Croatie">Croatie </option>
					<option value="Cuba">Cuba </option>
					<option value="Danemark">Danemark </option>
					<option value="Djibouti">Djibouti </option>
					<option value="Dominique">Dominique </option>
					<option value="Egypte">Egypte </option> 
					<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
					<option value="Equateur">Equateur </option>
					<option value="Erythree">Erythree </option>
					<option value="Espagne">Espagne </option>
					<option value="Estonie">Estonie </option>
					<option value="Etats_Unis">Etats_Unis </option>
					<option value="Ethiopie">Ethiopie </option>
					<option value="Falkland">Falkland </option>
					<option value="Feroe">Feroe </option>
					<option value="Fidji">Fidji </option>
					<option value="Finlande">Finlande </option>
					<option value="France">France </option>
					<option value="Gabon">Gabon </option>
					<option value="Gambie">Gambie </option>
					<option value="Georgie">Georgie </option>
					<option value="Ghana">Ghana </option>
					<option value="Gibraltar">Gibraltar </option>
					<option value="Grece">Grece </option>
					<option value="Grenade">Grenade </option>
					<option value="Groenland">Groenland </option>
					<option value="Guadeloupe">Guadeloupe </option>
					<option value="Guam">Guam </option>
					<option value="Guatemala">Guatemala</option>
					<option value="Guernesey">Guernesey </option>
					<option value="Guinee">Guinee </option>
					<option value="Guinee_Bissau">Guinee_Bissau </option>
					<option value="Guinee equatoriale">Guinee_Equatoriale </option>
					<option value="Guyana">Guyana </option>
					<option value="Guyane_Francaise ">Guyane_Francaise </option>
					<option value="Haiti">Haiti </option>
					<option value="Hawaii">Hawaii </option> 
					<option value="Honduras">Honduras </option>
					<option value="Hong_Kong">Hong_Kong </option>
					<option value="Hongrie">Hongrie </option>
					<option value="Inde">Inde </option>
					<option value="Indonesie">Indonesie </option>
					<option value="Iran">Iran </option>
					<option value="Iraq">Iraq </option>
					<option value="Irlande">Irlande </option>
					<option value="Islande">Islande </option>
					<option value="Israel">Israel </option>
					<option value="Italie">italie </option>
					<option value="Jamaique">Jamaique </option>
					<option value="Jan Mayen">Jan Mayen </option>
					<option value="Japon">Japon </option>
					<option value="Jersey">Jersey </option>
					<option value="Jordanie">Jordanie </option>
					<option value="Kazakhstan">Kazakhstan </option>
					<option value="Kenya">Kenya </option>
					<option value="Kirghizstan">Kirghizistan </option>
					<option value="Kiribati">Kiribati </option>
					<option value="Koweit">Koweit </option>
					<option value="Laos">Laos </option>
					<option value="Lesotho">Lesotho </option>
					<option value="Lettonie">Lettonie </option>
					<option value="Liban">Liban </option>
					<option value="Liberia">Liberia </option>
					<option value="Liechtenstein">Liechtenstein </option>
					<option value="Lituanie">Lituanie </option> 
					<option value="Luxembourg">Luxembourg </option>
					<option value="Lybie">Lybie </option>
					<option value="Macao">Macao </option>
					<option value="Macedoine">Macedoine </option>
					<option value="Madagascar">Madagascar </option>
					<option value="Madère">Madère </option>
					<option value="Malaisie">Malaisie </option>
					<option value="Malawi">Malawi </option>
					<option value="Maldives">Maldives </option>
					<option value="Mali">Mali </option>
					<option value="Malte">Malte </option>
					<option value="Man">Man </option>
					<option value="Mariannes du Nord">Mariannes du Nord </option>
					<option value="Maroc">Maroc </option>
					<option value="Marshall">Marshall </option>
					<option value="Martinique">Martinique </option>
					<option value="Maurice">Maurice </option>
					<option value="Mauritanie">Mauritanie </option>
					<option value="Mayotte">Mayotte </option>
					<option value="Mexique">Mexique </option>
					<option value="Micronesie">Micronesie </option>
					<option value="Midway">Midway </option>
					<option value="Moldavie">Moldavie </option>
					<option value="Monaco">Monaco </option>
					<option value="Mongolie">Mongolie </option>
					<option value="Montserrat">Montserrat </option>
					<option value="Mozambique">Mozambique </option>
					<option value="Namibie">Namibie </option>
					<option value="Nauru">Nauru </option>
					<option value="Nepal">Nepal </option>
					<option value="Nicaragua">Nicaragua </option>
					<option value="Niger">Niger </option>
					<option value="Nigeria">Nigeria </option>
					<option value="Niue">Niue </option>
					<option value="Norfolk">Norfolk </option>
					<option value="Norvege">Norvege </option>
					<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
					<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
					<option value="Oman">Oman </option>
					<option value="Ouganda">Ouganda </option>
					<option value="Ouzbekistan">Ouzbekistan </option>
					<option value="Pakistan">Pakistan </option>
					<option value="Palau">Palau </option>
					<option value="Palestine">Palestine </option>
					<option value="Panama">Panama </option>
					<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
					<option value="Paraguay">Paraguay </option>
					<option value="Pays_Bas">Pays_Bas </option>
					<option value="Perou">Perou </option>
					<option value="Philippines">Philippines </option> 
					<option value="Pologne">Pologne </option>
					<option value="Polynesie">Polynesie </option>
					<option value="Porto_Rico">Porto_Rico </option>
					<option value="Portugal">Portugal </option>
					<option value="Qatar">Qatar </option>
					<option value="Republique_Dominicaine">Republique_Dominicaine </option>
					<option value="Republique_Tcheque">Republique_Tcheque </option>
					<option value="Reunion">Reunion </option>
					<option value="Roumanie">Roumanie </option>
					<option value="Royaume_Uni">Royaume_Uni </option>
					<option value="Russie">Russie </option>
					<option value="Rwanda">Rwanda </option>
					<option value="Sahara Occidental">Sahara Occidental </option>
					<option value="Sainte_Lucie">Sainte_Lucie </option>
					<option value="Saint_Marin">Saint_Marin </option>
					<option value="Salomon">Salomon </option>
					<option value="Salvador">Salvador </option>
					<option value="Samoa_Occidentales">Samoa_Occidentales</option>
					<option value="Samoa_Americaine">Samoa_Americaine </option>
					<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
					<option value="Senegal">Senegal </option> 
					<option value="Seychelles">Seychelles </option>
					<option value="Sierra Leone">Sierra Leone </option>
					<option value="Singapour">Singapour </option>
					<option value="Slovaquie">Slovaquie </option>
					<option value="Slovenie">Slovenie</option>
					<option value="Somalie">Somalie </option>
					<option value="Soudan">Soudan </option> 
					<option value="Sri_Lanka">Sri_Lanka </option> 
					<option value="Suede">Suede </option>
					<option value="Suisse">Suisse </option>
					<option value="Surinam">Surinam </option>
					<option value="Swaziland">Swaziland </option>
					<option value="Syrie">Syrie </option>
					<option value="Tadjikistan">Tadjikistan </option>
					<option value="Taiwan">Taiwan </option>
					<option value="Tonga">Tonga </option>
					<option value="Tanzanie">Tanzanie </option>
					<option value="Tchad">Tchad </option>
					<option value="Thailande">Thailande </option>
					<option value="Tibet">Tibet </option>
					<option value="Timor_Oriental">Timor_Oriental </option>
					<option value="Togo">Togo </option> 
					<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
					<option value="Tristan da cunha">Tristan de cuncha </option>
					<option value="Tunisie">Tunisie </option>
					<option value="Turkmenistan">Turmenistan </option> 
					<option value="Turquie">Turquie </option>
					<option value="Ukraine">Ukraine </option>
					<option value="Uruguay">Uruguay </option>
					<option value="Vanuatu">Vanuatu </option>
					<option value="Vatican">Vatican </option>
					<option value="Venezuela">Venezuela </option>
					<option value="Vierges_Americaines">Vierges_Americaines </option>
					<option value="Vierges_Britanniques">Vierges_Britanniques </option>
					<option value="Vietnam">Vietnam </option>
					<option value="Wake">Wake </option>
					<option value="Wallis et Futuma">Wallis et Futuma </option>
					<option value="Yemen">Yemen </option>
					<option value="Yougoslavie">Yougoslavie </option>
					<option value="Zambie">Zambie </option>
					<option value="Zimbabwe">Zimbabwe </option>
					</select></br> 
				 	<label for="Ville">Ville : </label> <input type="text" name="ville" value="<?php if(isset($ville)) echo $ville; ?>" required/> </br>
					<label for="codepostal">Code postal : </label> <input type="text" name="codepostal" value="<?php if(isset($codepostal)) echo $codepostal; ?>" required/> </br>
					<p>Numeros de téléphone pour vous joindres : </p>
					<label for="telfix">Domicile : </label> <input type="text" name="telfix" value="<?php if(isset($telfix)) echo $telfix; ?>"/>
					<label for="mobile">Mobile : </label> <input type="text" name="mobile" value="<?php if(isset($mobile)) echo $mobile; ?>" required/> </br>
					<p>Autres numéros : Facultatif </p>
					<label for="fax">Fax : </label> <input type="text" name="fax" value="<?php if(isset($fax)) echo $fax; ?>"/>
					<label for="bureau">Bureau : </label> <input type="text" name="bureau" value="<?php if(isset($bureau)) echo $bureau; ?>"/> </br>
					
					<label for="password">Votre mot de passe : </label> <input type="password" name="password" value="" required>
					<label for="verifpassword">Confirmation du mot de passe : </label> <input type="password" name="verifpassword" value="" required/> </br></br></p>
					<div style="margin-left:auto; margin-right:auto; width:425px;"><?php echo recaptcha_get_html('6LeGG-sSAAAAAMMefaLjooNSBcBEqg61a6IhhpTE'); ?> </div></br>
					<input type ="submit" value="S'enregister" />
			</form>
		</div>
	</div>
