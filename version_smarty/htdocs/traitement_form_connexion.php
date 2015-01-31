
<?php
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

$smarty->assign('header', 'admin_entreprise');
$smarty->assign('admin_entreprise', 'home_page');
$smarty->assign('footer', 'index');

$pdo = getPDOConnection();
if(DEBUG_MODE == 1)
debug($_POST);

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
			$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');
		}
		else if($data['role'] == ROLE_PARTICULIER)
		{
			echo('log as client');
			$smarty->display('particulier/home_page.tpl');
		}
		else if($data['role'] == ROLE_ADMIN)
		{
			echo('log as Admin');
			
		}
	} 
	else
	{
		echo '<div class="information_invalide">Erreur : Mauvais idendifiants</div>';
	}
	$req->closeCursor();
}//Si il est deja log on le redirige direct vers la page mon compte
else if(Auth::isLogged('client'))
{
	$smarty->display('particulier/home_page.tpl');
}
else if( Auth::isLogged('admin') ){ 
	//$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');
}
else
{
	//$smarty->assign('error', 'information invalide');
	//$smarty->display('login.tpl'); // I NEED TO DISPLAY THE LAST PAGE BUT I DON'T KNOW HOW 
}

?>