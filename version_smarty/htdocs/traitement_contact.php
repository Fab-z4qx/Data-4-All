
<?php
	include("common.inc.php");
	//Nouvelle objet smarty
	require(ROOT_DIR.INCLUDES.'data4all.inc.php');
	$smarty =new Smarty_datat4all();
	
	require(ROOT_DIR.INCLUDES.'fonctions.php');


	$nom_contact = $_POST[nom_contact];
	$email_contact = $_POST[email_contact];
	$sujet_contact = $_POST[sujet_contact];
	$message_contact = $_POST[message_contact];

	$con = connexion_serveur();
	
	$sql = "INSERT INTO contact (nom_contact, email_contact, sujet_contact, message_contact) VALUES('$nom_contact', '$email_contact', '$sujet_contact', '$message_contact')";

	try {
		if (!mysql_query($sql,$con)){
  			echo 'Error: ' . mysql_error();
  		}
  		else{
			$MESSAGE_SUCCESS = "Message envoyé";
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
	$smarty->assign('message_success', $MESSAGE_SUCCESS);

	$smarty->assign('header', 'contact');
	$smarty->assign('footer', 'index');
	
	$smarty->display('contact.tpl');
?>