<?php
	function connexion_serveur(){
		$con = mysql_connect("localhost","root","root");
		//$con = mysql_connect("localhost","root","");
	
		if (!$con) die('Could not connect: ' . mysql_error());

		mysql_select_db("BDD_D4A", $con);
		
		
		return $con;
	}
	
	function inser_css(){
		$CSS_TAB = array(ROOT_TO_DIR.STYLE."style_index.css",
				ROOT_TO_DIR.STYLE."style_head.css",
				ROOT_TO_DIR.STYLE."index/style_arg_demarche.css",
				ROOT_TO_DIR.STYLE."index/style_arg_gagner.css",
				ROOT_TO_DIR.STYLE."index/style_arg_open_data.css",
				ROOT_TO_DIR.STYLE."index/style_arg_transparence.css",
				ROOT_TO_DIR.STYLE."index/style_contact.css",
				ROOT_TO_DIR.STYLE."index/style_content.css",
				ROOT_TO_DIR.STYLE."index/style_counter.css",
				ROOT_TO_DIR.STYLE."index/style_footer.css",
				ROOT_TO_DIR.STYLE."index/style_google_maps.css",
				ROOT_TO_DIR.STYLE."index/style_header.css",
				ROOT_TO_DIR.STYLE."index/style_header_con.css",
				ROOT_TO_DIR.STYLE."index/style_logo_entreprise.css",
				ROOT_TO_DIR.STYLE."index/style_search.css",
				ROOT_TO_DIR.STYLE."index/style_title.css"		
				);
		return $CSS_TAB;
	}
	
	function inser_js(){
		$JS_TAB = array("https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js",
				ROOT_TO_DIR.JS_DIR."js/jquery-1.8.3.min.js",
				ROOT_TO_DIR.JS_DIR."js/simple.carousel.js");
		return $JS_TAB;
	}
	
?>
