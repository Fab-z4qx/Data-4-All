
<?php
try
{   // On se connecte à MySQL
	$host = '127.0.0.1';
	$dbname = 'd4a';
	$db_user = 'root'
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', ''.$db_user.'', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')); 
}
catch(Exception $e)
{   // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>