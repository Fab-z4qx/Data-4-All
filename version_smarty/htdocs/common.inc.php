<?php
	//define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT'].'');
	
	
	/*
	$str = str_replace('\\','/',realpath('../'));
	$string = str_replace($_SERVER['DOCUMENT_ROOT'],'',$str );
	define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT'].$string.'/');
	
	
	$str = str_replace('\\','/',realpath('./'));
	$string = str_replace($_SERVER['DOCUMENT_ROOT'],'',$str );
	define('INDEX_DIR',$string);
	define('ROOT_DIR_INDEX',$_SERVER['DOCUMENT_ROOT'].INDEX_DIR.'/');
	
	
	echo("INDEX DIR =............ ". INDEX_DIR);
	echo("</br>");
	echo("ROOT DIR INDEX = " .ROOT_DIR_INDEX);
	echo("</br>");
	echo('ROOT DIR =............. ' .ROOT_DIR);*/
	
	if(dirname($_SERVER['SCRIPT_NAME']) == '/htdocs') // Site directement à la racine du serveur web
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
	define('JS_DIR','js/');
	define('INCLUDES','includes/');
	define('STYLE',BASE_URL.'styles/');
	define('IMAGE','images/');
?>