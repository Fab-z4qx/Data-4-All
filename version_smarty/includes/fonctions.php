<?php
	function connexion_serveur(){
		$con = mysql_connect("localhost","root","root");
		//$con = mysql_connect("sql.free.fr","tim.robert","trobert1");
	
		if (!$con) die('Could not connect: ' . mysql_error());

		mysql_select_db("BDD_D4A", $con);
		
		
		return $con;
	}
	
	function inser_css(){
		$CSS_TAB = array(   ROOT_TO_DIR.STYLE."style_index.css",
							ROOT_TO_DIR.STYLE."style_header.css",
							ROOT_TO_DIR.STYLE."style_footer.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_titre_principale.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_recherche.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_carrousel.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_compteur.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_guide.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_entreprise_partenaire.css",
							ROOT_TO_DIR.STYLE."home_page/style_section_contact.css",
							ROOT_TO_DIR.STYLE."liste_entreprises/style_liste_entreprises.css",
							ROOT_TO_DIR.STYLE."liste_entreprises/style_entreprises.css",
							ROOT_TO_DIR.STYLE."contact/style_contact.css",
							ROOT_TO_DIR.STYLE."login/style_login.css",
							ROOT_TO_DIR.STYLE."guide/style_guide.css",
							ROOT_TO_DIR.STYLE."offres/style_offres.css",
							ROOT_TO_DIR.STYLE."search/style_search.css",
							ROOT_TO_DIR.STYLE."a_propos/style_a_propos.css",
							ROOT_TO_DIR.STYLE."color.css",
							ROOT_TO_DIR.STYLE."administration_entreprise/style_admin_entreprise.css",);
		return $CSS_TAB;
	}
	
	function inser_js(){
		$JS_TAB = array(ROOT_TO_DIR.JS_DIR."googleMap.js",
						ROOT_TO_DIR.JS_DIR."rubrique_connexion.js");
		return $JS_TAB;
	}
	
?>

