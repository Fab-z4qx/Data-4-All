<?php
	function connexion_serveur(){
		$con = mysql_connect("localhost","root","root");
		//$con = mysql_connect("localhost","root","");
	
		if (!$con) die('Could not connect: ' . mysql_error());

		mysql_select_db("BDD_D4A", $con);
		
		
		return $con;
	}
	
	function inser_css(){
		$CSS_TAB = array(   ROOT_TO_DIR.STYLE."style_index.css");
		return $CSS_TAB;
	}
	
	function inser_js(){
		$JS_TAB = array(ROOT_TO_DIR.JS_DIR."googleMap.js";
		return $JS_TAB;
	}
	
?>

