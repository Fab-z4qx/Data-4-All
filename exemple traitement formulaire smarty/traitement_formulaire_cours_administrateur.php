<?php
	include("common.inc.php");

	require(ROOT_DIR.INCLUDES.'fonctions.php');

	$con = connexion_serveur();
	
	$sql="INSERT INTO cours (titre_cours, date_cours, description_cours, illustration_cours, contenu_cours) VALUES('" . $_POST[titre_cours] . "','" . $_POST[date_cours] . "', '" . $_POST[description_cours] . "', '" . $_POST[illustration_cours] . "', '" . $_POST[contenu_cours] . "')";

	try {
		if (!mysql_query($sql,$con)){
  			echo 'Error: ' . mysql_error();
  		}
  		else{
			echo'Cours '. $_POST[titre_cours] .' enregistré';
		}
	mysql_close($con);
  	}
  	catch (Exception $e){
  		echo 'erreur : ' . $e->getMessage();
  	}
?>