<?php
	//define('ROOT_DIR','/Users/Timohee/Desktop/site/version_smarty_8_12_14/');
	//define('REAL_PATH',realpath('../')); //chemin de l'index sur le serveur
	//define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT'].'D4A/version_smarty/');
	//print_r(realpath('./'));
	//print_r($_SERVER['DOCUMENT_ROOT']);
	
	//str_remplace(REAL_PATH, "/", '\\');
	$str = str_replace('\\','/',realpath('../'));
	$string = str_replace($_SERVER['DOCUMENT_ROOT'],'',$str );
	
	define('INDEX_DIR',$string);
	define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT'].INDEX_DIR.'/');
	
	$str = str_replace('\\','/',realpath('./'));
	$string = str_replace($_SERVER['DOCUMENT_ROOT'],'',$str );

	define('ROOT_DIR_INDEX',$_SERVER['DOCUMENT_ROOT'].$string.'/');
	define('SMARTY_DIR',ROOT_DIR.'smarty/');
	define('ROOT_TO_DIR','/');
	define('DOC_DIR','htdocs/');
	define('JS_DIR','js/');
	define('INCLUDES','includes/');
	define('STYLE',INDEX_DIR.'/styles/');
	define('IMAGE','images/');
?>