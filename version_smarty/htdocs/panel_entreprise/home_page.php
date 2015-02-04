
<?php
version_smarty/htdocs/panel_entreprise/home_page.php
	include("common.inc.php");
	//Nouvelle objet smarty



	require(ROOT_DIR.INCLUDES.'data4all.inc.php');
=======
require('common.inc.php');
require(ROOT_DIR.INCLUDES.'data4all.inc.php');
require(ROOT_DIR.INCLUDES.'fonctions.php');
require(ROOT_DIR.INCLUDES.'lib/auth.php');

if(!isset($_SESSION)){
		session_start();
}
if( !Auth::isLogged('entreprise'))
{
	debug("you are not logged");
	header('Location:../index.php');
	exit();
}

/*
function getInfoEntreprise()
{
	$sql = 'SELECT * FROM entreprise WHERE id_entreprise ='.$_SESSION['Auth']['id_entreprise'].';';
	$pdo = getPDOConnection();
	$req = $pdo->query($sql);
	$data = $req->fetch(PDO::FETCH_ASSOC);
	//debug($data);
	return $data;
}
*/


version_smarty/htdocs/admin_entreprise_home_page.php
	$smarty = new Smarty_datat4all();
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();


debug($_SESSION);
//$data = getInfoEntreprise();
//debug($data);
	

	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	
	$smarty->assign('header', 'admin_entreprise');
	$smarty->assign('admin_entreprise', 'home_page');
	$smarty->assign('footer', 'index');

version_smarty/htdocs/panel_entreprise/home_page.php
	$smarty->display('./panel_entreprise/home_page.tpl');

	$smarty->assign('nbr_entreprise', '10');
	$smarty->assign('nom_entreprise', $_SESSION['info']['nom_entreprise']);

	$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');

version_smarty/htdocs/admin_entreprise_home_page.php
?>