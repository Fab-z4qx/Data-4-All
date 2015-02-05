<?php
//On démarre la session
include('config/config_init.php');
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
echo php_uname("s");

//On inclut le pied de page
include 'controllers/footer.php';
 
//On ferme la connexion à MySQL


?>
