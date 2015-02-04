
<?php
require('common.inc.php');
require(ROOT_DIR.INCLUDES.'data4all.inc.php');
require(ROOT_DIR.INCLUDES.'fonctions.php');
require(ROOT_DIR.INCLUDES.'lib/auth.php');
if(!isset($_SESSION)){
		session_start();
}
if( !Auth::isLogged('entreprise'))
{
	//retour à la page login
	debug("you are not logged");
	header('Location:../index.php');
	exit();

}
debug($_SESSION);

	$smarty = new Smarty_datat4all();
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	
	$smarty->assign('header', 'admin_entreprise');
	$smarty->assign('admin_entreprise', 'infos_compte');
	$smarty->assign('nom_entreprise', $_SESSION['info']['nom_entreprise']);
	$smarty->assign('email_entreprise', $_SESSION['info']['email_entreprise']);
	$smarty->assign('siret_entreprise', $_SESSION['info']['siret_entreprise']);
	$smarty->assign('tel_entreprise', $_SESSION['info']['tel_entreprise']);
	$smarty->assign('fax_entreprise', $_SESSION['info']['fax_entreprise']);
	$smarty->assign('activite_entreprise', $_SESSION['info']['activite_entreprise']);

	$smarty->assign('footer', 'index');

<<<<<<< HEAD:version_smarty/htdocs/panel_entreprise/infos_compte.php
	$smarty->display('./panel_entreprise/admin_entreprise_infos_compte.tpl');
=======

	$smarty->display('admin_entreprise/admin_entreprise_infos_compte.tpl');
>>>>>>> FETCH_HEAD:version_smarty/htdocs/admin_entreprise_infos_compte.php
?>