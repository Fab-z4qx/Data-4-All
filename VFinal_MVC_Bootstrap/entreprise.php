<?php
//ob_start();
//On démarre la session
include('app/config/config_init.php');
//On inclut le logo du site et le menu
//include 'vues/logo.php';
//include 'vues/menu.php';  
 
 //On inclut le pied de page
include _TPL_COMMON_.'head.tpl';

//On inclut le contrôleur s'il existe et s'il est spécifié
//print_r($_GET);
//print_r(_CTRL_ENT_.ucfirst($_GET['page']).'Controller.php');

/*********************************************/
/* CONTROLE DE LA SESSION ICI A IMPLEMENTER  */
/*********************************************/
// SI log ok 
// Sinon redirection vers la page de connexion

if(!isset($_SESSION)){
        session_start();
}

if(!Auth::isLogged('entreprise'))
{
    print_r($_SESSION['Auth']);
    header('Location:index.php');      
    exit();    
}

if (!empty($_GET['page']) && is_file(_CTRL_ENT_.ucfirst($_GET['page']).'Controller.php'))
{
        include (_CTRL_ENT_.ucfirst($_GET['page']).'Controller.php'); //ucfirst() met la 1er lettre en majuscule pour respecter la convention objet 
        $className = ucfirst($_GET['page']).'Controller';
        $controleur = new $className; 

        if(isset($_GET['action']))
        	$actionName = $_GET['action'];
        
        if(empty($_GET['action'])){
        	$controleur->display();
        }
        else{
        	$controleur->$actionName();
        }
}// Redirection vers la partie privé entreprise
else{
        include (_CTRL_ENT_.'HomeEntrepriseController.php'); //ucfirst() met la 1er lettre en majuscule pour respecter la convention objet 
        $controleur = new HomeEntrepriseController(); 
        $controleur->display();
       //header('Location:index.php');      
       //exit();    
         /*
        include _CTRL_.'IndexController.php';
        $index = new IndexController();
        $index->display();*/
}
//On inclut le pied de page
include _TPL_COMMON_.'footer.tpl';

?>
