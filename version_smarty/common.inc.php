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
	echo('ROOT DIR =............. ' .ROOT_DIR);
		?>
	<pre>
		<?php print_r($_SERVER); ?>
	</pre>
	<?php
	
	echo(dirname(__FILE__));
	*/
	
	define('ROOT_DIR',dirname(__FILE__).'/');
	define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']).'/');
	define('ROOT_DIR_INDEX','./');
	define('SMARTY_DIR','smarty/');
	define('ROOT_TO_DIR','');
	define('DOC_DIR','htdocs/');
	define('JS_DIR','js/');
	define('INCLUDES','includes/');
	define('STYLE','styles/');
	define('IMAGE','images/');
?>