<?php 

require('lib/sql_connect.php');
require('lib/recaptchalib.php');
require('lib/lib.php');
require('lib/auth.php');

if(!isset($_SESSION)){
		session_start();
}

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass']) && captcha_valid())
{
	extract($_POST);
	$pass = sha1($pass);
	$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
	$req = $pdo->query($sql);
	if($req->rowCount()> 0)
	{
		$data = $req->fetch();
		$_SESSION['Auth'] = array(
		'login' => $login,
		'pass' => $pass,
		'role' => $data['role']
		);
		header('Location:account.php');
	} 
	else{
		echo '<div class="information_invalide">Erreur : Mauvais idendifiants</div>';
	}
	$req->closeCursor();
}//Si il est deja log on le redirige direct vers la page mon compte
else if(Auth::isLogged('admin')|| Auth::isLogged('client') ){ 
	header('Location:account.php');
}

else if(isset($_POST['creeAcc']) && !empty($_POST['creeAcc']))
{
	extract($_POST);
	if(verifierAdresseMail($creeAcc))
	{
		$creeAcc = $pdo->quote($creeAcc);
		$sql = "SELECT * FROM user WHERE login=$creeAcc";
		$req = $pdo->query($sql);
		if( !$req->rowCount()> 0)
		{
			header("Location:register.php?email=".$creeAcc);
		} 
		else
		{
			echo '<div class="information_invalide">Erreur : Email déjà utilisé</div>';
		}
	}
	else 
		echo '<div class="information_invalide">Erreur : Email invalide</div>';
}

?>

<script type="text/javascript">
var RecaptchaOptions = { theme : 'clean' };
</script>

	<div class="content">
		<div class ="principal">
			<?php
			if(isset($_GET['acc']) && !empty($_GET['acc']))
			{
				echo '</br></br><div class="information_valide" style="margin-bottom:-50px;">Félicitations! Votre compte vient d\'être creé!!
						</br></br> Vous pouvez vous connecter</div>';
			} ?>
			<div class="login">
				<div class="loginAut">
					<h1>J'ai deja un compte</h1>
					<form action="login.php" method="post">
						<label for="login">Email : </label></br>
						<input type="text" name="login" placeholder="nom@domain.fr"value=""/></br>
						<label for="email">Mon mot de passe : </label></br>
						<input type="password" class="pass" name="pass" placeholder="votre mot de passe" /></br>
						<?php echo recaptcha_get_html('6LeGG-sSAAAAAMMefaLjooNSBcBEqg61a6IhhpTE'); ?>
						<input type ="submit" value="Ok" />
					</form>
				</div>
				<div class="loginNewAcc">
					<h1>Je crée mon compte</h1>
					<form action="login.php" method="post">
						<label for="creeAcc">Email : </label></br>
						<input type="email" name="creeAcc" placeholder="adresse@domain.fr" value="" /></br>
						<input type ="submit" value="Je cree mon compte" />
					</form>
				</div>
			</div>
		</div>
	</div>
