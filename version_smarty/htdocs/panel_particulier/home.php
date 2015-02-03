

<?php
	require('common.inc.php');
	require(ROOT_DIR.INCLUDES.'data4all.inc.php');
	require(ROOT_DIR.INCLUDES.'lib/recaptchalib.php');
	require(ROOT_DIR.INCLUDES.'fonctions.php');

	$smarty =new Smarty_datat4all();
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();

	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);

/*
	$smarty->assign('header', 'login');
	$smarty->assign('footer', 'index');

	$smarty->registerPlugin('function', 'echo_captcha','echo_captcha');
	*/

	echo('compte client home page.php');
	//$smarty->display('login.tpl');
?>

