
<?php
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR.INCLUDES.'data4all.inc.php');
	$smarty =new Smarty_datat4all();
	
	require(ROOT_DIR.INCLUDES.'fonctions.php');

	$con = connexion_serveur();
	
	$cpt="SELECT nom_entreprise FROM entreprise";
	$req=mysql_query($cpt);

	$NOM_ENTREPRISE_TAB = array();
	
	while ($row = mysql_fetch_assoc($req)) {
		$results[] = $row;
}
	mysql_close($con);	


	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);

	$smarty->assign('req_tab', $results);
	
	$smarty->assign('header', 'liste_entreprises');
	$smarty->assign('footer', 'index');

	$smarty->display('liste_entreprises.tpl');
?>