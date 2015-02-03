

<?php

	if(    dirname($_SERVER['SCRIPT_NAME']) == '/htdocs' 
		|| dirname($_SERVER['SCRIPT_NAME']) == 'htdocs/'
		|| dirname($_SERVER['SCRIPT_NAME']) == '/htdocs/'	
		|| dirname($_SERVER['SCRIPT_NAME']) == '/'	) // Site directement à la racine du serveur web
	{
		define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME']).'/'));
	}
	else{
		define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME']).'/').'/');
	}
	
	define('ROOT_DIR',dirname(dirname(__FILE__).'/').'/');
	define('SMARTY_DIR',ROOT_DIR.'smarty/');
	define('ROOT_TO_DIR','');
	define('DOC_DIR','htdocs/');
	define('JS_DIR',BASE_URL.'js/');
	define('INCLUDES','includes/');
	define('STYLE',BASE_URL.'styles/');
	define('IMAGE','images/');

  	define('ROLE_PARTICULIER',1); //public
	define('ROLE_ENTREPRISE',2);
	define('ROLE_ADMIN',3);


	/* DEGUB CONST */
	define('DEBUG_MODE', 1); //SET TO 0 FOR PRODUCT MODE
	define('PRE','<pre>');
	define('PREC','</pre>');

?>



