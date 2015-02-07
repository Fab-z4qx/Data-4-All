<?php
//On démarre la session
include('app/config/config_init.php');
//On inclut le logo du site et le menu
//include 'vues/logo.php';
//include 'vues/menu.php';  
 
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file(_CTRL_.$_GET['page'].'.php'))
{
        include _CTRL_.$_GET['page'].'.php';
        
}
else
{
        include _CTRL_.'accueil.php';
        $index = new IndexController();
        $index->display();
}
//echo php_uname("s");

//On inclut le pied de page
include _TPL_.'footer.tpl';
 
//On ferme la connexion à MySQL

?>
