<?php
//On démarre la session
session_start();
 
//On se connecte à MySQL
mysql_connect();
//mysql_select_db('tests');
 
//On inclut le logo du site et le menu
//include 'vues/logo.php';
//include 'vues/menu.php';  
 
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controller/'.$_GET['page'].'.php'))
{
        include 'controllers/'.$_GET['page'].'.php';
}
else
{
        include 'controllers/accueil.php';
}
 
//On inclut le pied de page
//include 'vues/pied.php';
 
//On ferme la connexion à MySQL
mysql_close();

?>
