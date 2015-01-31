
<?php
	error_reporting(E_ERROR | E_PARSE);
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR_INDEX.INCLUDES.'data4all.inc.php');
	$smarty =new Smarty_datat4all();
	
	require(ROOT_DIR_INDEX.INCLUDES.'fonctions.php');

	$con = connexion_serveur();
	
	$cpt="SELECT * FROM entreprise";
	$req=mysql_query($cpt);
	$res=mysql_num_rows($req);
	
	mysql_close($con);	
	
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	$smarty->assign('nbr_entreprise', $res);

	$smarty->assign('header', 'index');
	$smarty->assign('footer', 'index');
	
	$smarty->display('index.tpl');
?>