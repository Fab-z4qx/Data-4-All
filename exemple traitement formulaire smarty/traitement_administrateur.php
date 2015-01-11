<!-- Page administrateur -->

<?php
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR.INCLUDES.'sondage_class.inc.php');
	$smarty =new Smarty_sondage();

	require(ROOT_DIR.INCLUDES.'fonctions.php');
	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	
	$smarty->assign('entete', 'administrateur');
	$smarty->assign('pied_de_page', 'administrateur');
	
	$id_saisie = $_POST["id_saisie"];
	$mdp_saisie = $_POST["mdp_saisie"];
	
	if( $id_saisie == "tim" && $mdp_saisie == "ok"){
		$smarty->display('formulaire_administrateur.tpl');				
	}
	else{
		echo "erreur";
		$smarty->display('administrateur.tpl');	
	}
	
	
?>