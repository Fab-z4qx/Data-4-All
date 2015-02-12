<?php
if(!isset($_SESSION)){
		session_start();
}
  
class ConnectController extends Controller 
{
   private $user;
   public function __construct()
   {
   	 $this->user = new User;
   } 

   public function display() 
   {
   	 $this->login();
   }

   public function logout()
   {
   	 $_SESSION['Auth'] = array();
   	 $_SESSION['info'] = array();
	   header('Location:index.php');
   }

   public function login()
   {
   	if( isset($_POST) && !empty($_POST['login']) && !empty($_POST['password']) ) 
		{
			extract($_POST);
			if($this->user->isExist($login,sha1($password) )) 
			{
				$this->createSession();
				header('Location:entreprise.php?page=HomeEntreprise');
				exit();
			}
			else
      {
        //$smarty->assign('error', 'login invalide');
        header('Location:index.php');      
        exit();    
      }
		}// rien d'envoyé sur la page 
		header('Location:index.php');      
    exit(); 
    	   
		//$this->smarty->assign('error', 'login_invalide');
		//$this->smarty->display(_TPL_.'accueil.tpl');
   }

   private function createSession()
   {
   		extract($_POST);
  		$_SESSION['Auth'] = array( //On créer la session ! 
  		'login' => $login,
  		'password' => sha1($password),
  		'id_entreprise' => $this->user->getIdEntreprise($login,sha1($password)),
  		'role' => $this->user->getRoleByUserName($login,sha1($password)),
  		);
  		$entreprise = new Entreprise();
  		$_SESSION['info'] = $entreprise->getInfoEntreprise($_SESSION['Auth']['id_entreprise']);
   }
}

?>
