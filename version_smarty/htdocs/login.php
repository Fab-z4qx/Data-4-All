<!-- Page login -->

<?php
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR.INCLUDES.'data4all.inc.php');
	$smarty =new Smarty_datat4all();


	require(ROOT_DIR.INCLUDES.'fonctions.php');
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();

	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);

	$smarty->assign('header', 'login');
	$smarty->assign('footer', 'index');
	
	$smarty->registerPlugin('function', 'echo_captcha','echo_captcha');
	$smarty->display('login.tpl');

?>