<?php
if(!isset($_SESSION)){
		session_start();
}
  
class ConnectController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 //$this->smarty->display(_TPL_.'HomeEntreprise.tpl');
   	 echo 'display';
   	 $this->login();
   }

   public function login()
   {
   	    echo 'login';
   		if( isset($_POST) && !empty($_POST['login']) && !empty($_POST['password']) ) 
		{
			extract($_POST);
			if(Users::isExist($login,$password) ) 
			{
				createSession();
			}
		}

   }

   private function createSession()
   {
   		$data = $req->fetch();
		$_SESSION['Auth'] = array( //On créer la session ! 
		'login' => $login,
		'pass' => $pass,
		'id_entreprise' => $data['entreprise_id_entreprise'],
		'role' => $data['role']
		);
   }
}



//error_reporting(E_ERROR | E_PARSE);
/*

if( isset($_POST) && !empty($_POST['login']) && !empty($_POST['password']) ) 
{
	extract($_POST);
	$pass = sha1($password);
	$sql = "SELECT id_user,entreprise_id_entreprise,role FROM user WHERE login='$login' AND password ='$pass'"; ////// INJECTION SQL ICI //// LOLOOLOL === ==== ===== $$$$$*****
	$req = $pdo->query($sql);

	if($req->rowCount()> 0) // Si l'utilisateur existe
	{
		$data = $req->fetch();
		$_SESSION['Auth'] = array( //On créer la session ! 
		'login' => $login,
		'pass' => $pass,
		'id_entreprise' => $data['entreprise_id_entreprise'],
		'role' => $data['role']
		);


		//debug($_SESSION);
		//exit();

		if($data['role'] == ROLE_ENTREPRISE)
		{
			$sql = 'SELECT * FROM entreprise WHERE id_entreprise ='.$_SESSION['Auth']['id_entreprise'].';';
			$pdo = getPDOConnection();
			$req = $pdo->query($sql);
			$data = $req->fetch(PDO::FETCH_ASSOC);
			$_SESSION['info'] = $data;
			
			echo('log as entreprise');
			header('Location:admin_entreprise_home_page.php');
			//sleep(3);
			//$smarty->assign('header', 'admin_entreprise');
			//$smarty->assign('admin_entreprise', 'home_page');
			//$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');
		}
		else if($data['role'] == ROLE_PARTICULIER)
		{
			echo('log as client');
			header('Location:compte_particulier/home.php');
			exit();

			
			//$smarty->assign('header', 'admin_particulier');
			//$smarty->assign('admin_particulier', 'home_page');
			//$smarty->display('particulier/home_page.tpl');
		}
		else if($data['role'] == ROLE_ADMIN)
		{
			echo('log as Admin');
			//$smarty->assign('header', 'admin_admin');
			//$smarty->assign('admin_admin', 'home_page');
			//$smarty->display('admin/home_page.tpl');
		}
	} 
	else
	{
		echo '<div class="information_invalide">Erreur : Mauvais idendifiants</div>';
		//$smarty->display('login.tpl');
	}
	$req->closeCursor();
}//Si il est deja log on le redirige direct vers la page mon compte
else if(Auth::isLogged('client'))
{
	echo('log as client');
	//$smarty->display('particulier/home_page.tpl');
}
else if( Auth::isLogged('admin') )
{ 
	echo('log as Admin');
	//$smarty->display('admin/home_page.tpl');
}
else if( Auth::isEntreprise())
{
	echo('log as Admin');
	//$smarty->display('admin_entreprise/admin_entreprise_home_page.tpl');
}
else
{
	echo "no session";
	//$smarty->assign('error', 'information invalide');
	//$smarty->display('login.tpl'); // I NEED TO DISPLAY THE LAST PAGE BUT I DON'T KNOW HOW 
}

*/

?>
