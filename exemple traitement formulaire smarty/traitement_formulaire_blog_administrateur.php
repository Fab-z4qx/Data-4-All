<?php
	include("common.inc.php");

	require(ROOT_DIR.INCLUDES.'fonctions.php');

	$con = connexion_serveur();
	
	$sql="INSERT INTO blog (titre_blog, date_blog, description_blog, illustration_blog, contenu_blog) VALUES('" . $_POST[titre_blog] . "','" . $_POST[date_blog] . "', '" . $_POST[description_blog] . "', '" . $_POST[illustration_blog] . "', '" . $_POST[contenu_blog] . "')";

	try {
		if (!mysql_query($sql,$con)){
  			echo 'Error: ' . mysql_error();
  		}
  		else{
			echo'Article '. $_POST[titre_blog] .' enregistré';
		}
	mysql_close($con);
  	}
  	catch (Exception $e){
  		echo 'erreur : ' . $e->getMessage();
  	}
?>
