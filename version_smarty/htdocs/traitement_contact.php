
<?php
	echo "1";
	include("common.inc.php");echo "2";
	//Nouvelle objet smarty
	require(ROOT_DIR.INCLUDES.'data4all.inc.php');echo "3";
	$smarty =new Smarty_datat4all();echo "4";
	
	require(ROOT_DIR.INCLUDES.'fonctions.php');echo "5";


	$nom_contact = $_POST[nom_contact];
	$email_contact = $_POST[email_contact];
	$sujet_contact = $_POST[sujet_contact];
	$message_contact = $_POST[message_contact];


	$con = connexion_serveur();echo "6";
	
	$sql="INSERT INTO contact (nom_contact, email_contact, sujet_contact, message_contact) VALUES('$nom_contact', '$email_contact', '$sujet_contact', '$message_contact')";
echo "7";

	try {
		if (!mysql_query($sql,$con)){
  			echo 'Error: ' . mysql_error();
  		}
  		else{
			echo't';
		}
	mysql_close($con);
  	}
  	catch (Exception $e){
  		echo 'erreur : ' . $e->getMessage();
  	}

  	$CSS_TAB = inser_css();
	$JS_TAB = inser_js();
	
	$smarty->assign('js_tab', $JS_TAB);
	$smarty->assign('css_tab', $CSS_TAB);
	$smarty->assign('nbr_entreprise', $res);

	$smarty->assign('header', 'contact');
	$smarty->assign('footer', 'index');
	
	$smarty->display('contact.tpl');
?>