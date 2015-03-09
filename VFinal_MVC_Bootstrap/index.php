<?php

include('app/config/config_init.php');
 
//On inclut le contrôleur s'il existe et s'il est spécifié
function startController()

{
	include (_CTRL_PUBLIC_.ucfirst($_GET['page']).'Controller.php'); //ucfirst() met la 1er lettre en majuscule pour respecter la convention objet 
    $className = ucfirst($_GET['page']).'Controller';
    $controleur = new $className; 
    if(isset($_GET['action']))
    	$actionName = $_GET['action'];
    
    if(empty($_GET['action'])){
    	$controleur->display();
    }
    else
    {
    	$controleur->$actionName();
    }
}
/* LIST OF CONTROLLER WITHOUT INCLUDE TPL */
$controler_with_no_include  = array('connect', 'formulaire');	
if (!empty($_GET['page']) && is_file(_CTRL_PUBLIC_.ucfirst($_GET['page']).'Controller.php'))
{
	include (_CTRL_PUBLIC_.ucfirst($_GET['page']).'Controller.php'); //ucfirst() met la 1er lettre en majuscule pour respecter la convention objet 
    $className = ucfirst($_GET['page']).'Controller';
    $controleur = new $className; 
    
    if(isset($_GET['action']))
    	$actionName = $_GET['action'];
    
    if(empty($_GET['action'])){
    	$controleur->display();
    }
    else
    {
    	$controleur->$actionName();
    }
}

$controler_with_no_include  = array('connect', 'formulaire');	
if (!empty($_GET['page']) && is_file(_CTRL_PUBLIC_.ucfirst($_GET['page']).'Controller.php'))
{
	if( in_array($_GET['page'], $controler_with_no_include) )  //si dans le tableau in include pas les TPL
	{
		startController();
	}
	else 
	{
		include _TPL_COMMON_.'head.tpl';
		startController();
		include _TPL_COMMON_.'footer.tpl';
	}  
}
else
{
	include _TPL_COMMON_.'head.tpl';
    include _CTRL_PUBLIC_.'IndexController.php';
    $index = new IndexController();
    $index->display();
    include _TPL_COMMON_.'footer.tpl';
}
?>
