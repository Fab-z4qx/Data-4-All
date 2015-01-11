

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
?>