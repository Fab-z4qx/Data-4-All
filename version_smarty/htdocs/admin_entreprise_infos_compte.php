
<?php
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR.INCLUDES.'data4all.inc.php');
	$smarty = new Smarty_datat4all();
	
	require(ROOT_DIR.INCLUDES.'fonctions.php');
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	
	$smarty->assign('header', 'admin_entreprise');
	$smarty->assign('admin_entreprise', 'infos_compte');
	$smarty->assign('footer', 'index');

	$smarty->display('admin_entreprise/admin_entreprise_infos_compte.tpl');
?>