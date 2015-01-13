
<?php
try
{   // On se connecte à MySQL
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=d4a', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')); 
}
catch(Exception $e)
{   // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>