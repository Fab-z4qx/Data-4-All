<?php
include('app/config/config_init.php');
include _TPL_COMMON_.'head.tpl';

if(!isset($_SESSION)){
        session_start();
}

if(!Auth::isLogged('entreprise') || empty($_SESSION))
{
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
            if(isset($_GET['value']))
            {
                $value = $_GET['value'];
                $controleur->$actionName($value);
            }
            else   
        	   $controleur->$actionName();
        }
}// Redirection vers la partie privé entreprise
else{
        include (_CTRL_ENT_.'HomeEntrepriseController.php'); //ucfirst() met la 1er lettre en majuscule pour respecter la convention objet 
        $controleur = new HomeEntrepriseController(); 
        $controleur->display();
}
//On inclut le pied de page
include _TPL_COMMON_.'footer.tpl';

?>
