
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
	$smarty->assign('admin_entreprise', 'home_page');
	$smarty->assign('footer', 'index');

	$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');

?>