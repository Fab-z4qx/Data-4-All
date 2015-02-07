<?php 
// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require_once('defines.inc.php');
require_once('database.php');
require_once('web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// $db = Database::getInstance();
// Connexion Database
/*
try {
	
	if(strpos(php_uname("s"),"Darwin") !== false)
		$bdd = new PDO("mysql:host=localhost;dbname=d4a", "root", "root");
	else{
		$bdd = new PDO("mysql:host=localhost;dbname=d4a", "root", "");
	}
	
$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée D4A...";
    die();
}*/

// Initialisation Smarty
$smarty = new Smarty();
?>