
<?php
//error_reporting(E_ERROR | E_PARSE);

if(!isset($_SESSION)){
		session_start();
}
	
require('common.inc.php');
require(ROOT_DIR.INCLUDES.'data4all.inc.php');
require(ROOT_DIR.INCLUDES.'fonctions.php');
require(ROOT_DIR.INCLUDES.'lib/lib.php');
require(ROOT_DIR.INCLUDES.'lib/recaptchalib.php');
require(ROOT_DIR.INCLUDES.'lib/auth.php');

$smarty = new Smarty_datat4all();

$CSS_TAB = inser_css();
$JS_TAB = inser_js();
$smarty->assign('js_tab', $JS_TAB);
$smarty->assign('css_tab', $CSS_TAB);


$smarty->assign('footer', 'index');

$pdo = getPDOConnection();

if( isset($_POST) && !empty($_POST['login']) && !empty($_POST['password']) ) 
{
	extract($_POST);
	$pass = sha1($password);
	$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'"; ////// INJECTION SQL ICI //// LOLOOLOL === ==== ===== $$$$$*****
	$req = $pdo->query($sql);

	if($req->rowCount()> 0) // Si l'utilisateur existe
	{
		$data = $req->fetch();
		$_SESSION['Auth'] = array( //On créer la session ! 
		'login' => $login,
		'pass' => $pass,
		'role' => $data['role']
		);

		if($data['role'] == ROLE_ENTREPRISE)
		{
			echo('log as entreprise');
			$smarty->assign('header', 'admin_entreprise');
			$smarty->assign('admin_entreprise', 'home_page');
			$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');
		}
		else if($data['role'] == ROLE_PARTICULIER)
		{
			//echo('log as client');
			header('Location:compte_particulier/home.php');
			exit();

			/*
			$smarty->assign('header', 'admin_particulier');
			$smarty->assign('admin_particulier', 'home_page');
			$smarty->display('particulier/home_page.tpl');*/
		}
		else if($data['role'] == ROLE_ADMIN)
		{
			echo('log as Admin');
			$smarty->assign('header', 'admin_admin');
			$smarty->assign('admin_admin', 'home_page');
			$smarty->display('admin/home_page.tpl');
		}
	} 
	else
	{
		$smarty->display('login.tpl');
		echo '<div class="information_invalide">Erreur : Mauvais idendifiants</div>';
	}
	$req->closeCursor();
}//Si il est deja log on le redirige direct vers la page mon compte
else if(Auth::isLogged('client'))
{
	echo('log as client');
	$smarty->display('particulier/home_page.tpl');
}
else if( Auth::isLogged('admin') )
{ 
	echo('log as Admin');
	$smarty->display('admin/home_page.tpl');
}
else if( Auth::isEntreprise())
{
	echo('log as Admin');
	$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');
}
else
{
	echo "no session";
	$smarty->assign('error', 'information invalide');
	$smarty->display('login.tpl'); // I NEED TO DISPLAY THE LAST PAGE BUT I DON'T KNOW HOW 
}

?>