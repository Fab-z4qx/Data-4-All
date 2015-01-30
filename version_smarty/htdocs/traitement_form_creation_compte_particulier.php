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
	if( !verifierAdresseMail($email) ) //Si les emails sont invalides
	{
		echo('<div class="information_invalide">l\'email n\'est pas valide</div>');
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




// Verif if user exist or not 
$user_exist = false;
$pdo = getPDOConnection();
$sql_check_user = "SELECT login FROM user WHERE login=".$pdo->quote($email).";";

$pdo->prepare($sql_check_user);
$req = $pdo->query($sql_check_user);
if($req->rowcount() > 0)
{
	echo "USER EXIST USER EXIST <br/>";
	//$Smarty->display("login.tpl");
	$user_exist = true;
}

if($valid == true  && $user_exist == false) //&& captcha_valid()
{   //On ajoute l'user puis on recupere son id pour l'ajouter dans la bdd client


	/* Ajout dans la table user */
	$sql_user = "INSERT INTO `user` 
	(`id_user`, 
	`password`, 
	`login`, 
	`role`) 
	VALUES 
	(NULL, 
	".$pdo->quote(sha1($password)).",
	".$pdo->quote($email).", 
	".$pdo->quote(ROLE_PARTICULIER).");";
	
	if($pdo->exec($sql_user))
	{ //On à bien cree le compte du nouvelle utilisateur!
		echo "OK - COMPTE CREE ! ";
		//$Smarty->display("login.tpl");
	}
	else
	{
		debug($sql_user);
	}
}
else{
	echo "Saisie invalide";
}

}
?>
