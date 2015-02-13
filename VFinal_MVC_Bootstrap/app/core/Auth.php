<?php

//require('common.inc.php');
//require(ROOT_DIR.INCLUDES.'data4all.inc.php');
//require(ROOT_DIR.INCLUDES.'fonctions.php');
//require(ROOT_DIR.INCLUDES.'lib/lib.php');

require_once(_MODEL_.'User.php');
require_once(_MODEL_.'Entreprise.php');

class Auth
{
	static function isAdmin()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role']))
		{
			extract($_SESSION['Auth']);
			$user = new User();
			if($user->isExist($login,$pass))
			{
				$role = $user->getRoleByUserName($login,$password);
				if($role != $_SESSION['Auth']['role']){ // Si le role n'est pas le meme dans la session et la bdd
					return false;
				}

				if($role == ROLE_ADMIN){
					return true;
				}
			}
			else
				return false;
		}
		return false;
	}

    static function isParticulier()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role']))
		{
			extract($_SESSION['Auth']);
			$user = new User();
			if($user->isExist($login,$pass))
			{
				$role = $user->getRoleByUserName($login,$password);
				if($role != $_SESSION['Auth']['role']){
					return false;
				}

				if($role == ROLE_PARTICULIER){
					return true;
				}
			}
			else
				return false;
		}
		return false;
	}

	static function isEntreprise()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role']))
		{
			extract($_SESSION['Auth']);
			$user = new User();
			if($user->isExist($login,$password))
			{
				$role = $user->getRoleByUserName($login,$password);
				if($role != $_SESSION['Auth']['role']) {
					return false;
				}

				if($role == ROLE_ENTREPRISE){
					return true;
				}
			}
			else
				return false;
		}
		return false;
	}


	static function isLogged($role)
	{
		if( isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['password']))
		{
			$user = new User();
			if($user->isExist($_SESSION['Auth']['login'],$_SESSION['Auth']['password'])) //Si l'utilisateur existe
			{
			
				if($role == 'admin')
				{
					if(Auth::isAdmin()) // On check dans la bdd 
						return true;
					else
						return false;
				}
				else if($role == 'particulier')
				{
					if(Auth::isParticulier())
						return true;
					else
						return false;
				}
				else if($role == 'entreprise')
				{
					if(Auth::isEntreprise())
						return true;
					else
						return false;
				}				
			}
			else //User existe pas
			{
				return false;
			}
		} // Si les variables de sessions n'existe pas
		else
		{
			return false;
		}
	}
}
