<?php
//error_reporting(E_ERROR | E_PARSE);

	function debug($var) //display var
	{
		if(DEBUG_MODE == 1)
		{
			echo PRE;
			echo $var;
			echo PREC;
		}
	}

	function getPDOConnection()
	{
		try
		{   // On se connecte à MySQL
		    $pdo = new PDO('mysql:host=127.0.0.1;dbname=BDD_D4A', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')); 
		}
		catch(Exception $e)
		{   // En cas d'erreur, on affiche un message et on arrête tout
		    die('Erreur : '.$e->getMessage());

		}
		return $pdo;
	}

	function connexion_serveur()
	{
		//echo "****  THIS FUNCION IS DEPRECIATED !!! ***** ";
		$con = mysql_connect("localhost","root","");

		if (!$con) die('Could not connect: ' . mysql_error());
			mysql_select_db("BDD_D4A", $con);
		//echo "****  THIS FUNCION IS DEPRECIATED !!! ***** ";
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
							ROOT_TO_DIR.STYLE."home_page/jauge-circulaire.css",
							ROOT_TO_DIR.STYLE."liste_entreprises/style_liste_entreprises.css",
							ROOT_TO_DIR.STYLE."liste_entreprises/style_entreprises.css",
							ROOT_TO_DIR.STYLE."contact/style_contact.css",
							ROOT_TO_DIR.STYLE."login/style_login.css",
							ROOT_TO_DIR.STYLE."home_page/bootstrap.min.css",
							ROOT_TO_DIR.STYLE."guide/style_guide.css",
							ROOT_TO_DIR.STYLE."offres/style_offres.css",
							ROOT_TO_DIR.STYLE."search/style_search.css",
							ROOT_TO_DIR.STYLE."a_propos/style_a_propos.css",
							ROOT_TO_DIR.STYLE."color.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_changer_offre.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_contact.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_import_fichiers.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_infos_compte.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_stats_compte.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_visualisation.css",
							ROOT_TO_DIR.STYLE."admin_entreprise/style_admin_entreprise_home_page.css"
							);
		return $CSS_TAB;
	}
	
	function inser_js(){
		$JS_TAB = array(ROOT_TO_DIR.JS_DIR."googleMap.js",
						ROOT_TO_DIR.JS_DIR."rubrique_connexion.js",
						ROOT_TO_DIR.JS_DIR."progressbar.js",
						ROOT_TO_DIR.JS_DIR."jquery.js",
						ROOT_TO_DIR.JS_DIR."bootstrap.min.js");
		return $JS_TAB;
	}


	function echo_captcha()
	{
		return recaptcha_get_html('6LeGG-sSAAAAAMMefaLjooNSBcBEqg61a6IhhpTE'); 
	}
?>

