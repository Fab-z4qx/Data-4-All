<?php 
// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require('web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// Connexion Database
try {
	$bdd = new PDO("mysql:host=localhost;", "root", "");
	$sql = "CREATE DATABASE IF NOT EXISTS d4a";
	
    // use exec() because no results are returned
    $bdd->exec($sql);
	$bdd = new PDO("mysql:host=localhost;dbname=d4a", "root", "");
	/*if(strpos(php_uname("s"),"mac") !== false || strpos(php_uname("s"),"Mac") !== false)
		$bdd = new PDO("mysql:host=localhost;dbname=d4a", "root", "root");
	else{
		$bdd = new PDO("mysql:host=localhost;dbname=d4a", "root", "");
	}*/
	
$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée D4A...";
    die();
}

// Initialisation Smarty
$smarty = new Smarty();
?>