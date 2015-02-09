<?php

//require('common.inc.php');
//require(ROOT_DIR.INCLUDES.'data4all.inc.php');
//require(ROOT_DIR.INCLUDES.'fonctions.php');
//require(ROOT_DIR.INCLUDES.'lib/lib.php');

require_once(_MODEL_.'Users.php');

class Auth
{
	static function isAdmin()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role']))
		{
			extract($_SESSION['Auth']);
			if(Users::isExist($login,$pass))
			{
				$role = Users::getRole(Users::getId($login,$pass));
				if($_SESSION['Auth']['role'] == $role)
				{
					return true;
				}
			}
			else
				return false;
		}
		return false;
	}
}

	/*
	static function isAdmin()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role']))
		{
			extract($_SESSION['Auth']);
			$pdo = getPDOConnection();
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0)
			{
				$data = $req->fetch();
				if($data['role'] == ROLE_ADMIN) //On test si l'utilisateur est bien un admin (ID 1 dans la table Usertype)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}


	static function isClient()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role'])){
			extract($_SESSION['Auth']);
			$pdo = getPDOConnection();
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0)
			{
				$data = $req->fetch();
				if($data['role'] == ROLE_PARTICULIER) //On test si l'utilisateur est bien un client (ID 2 dans la tabe usertype)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}

		static function isEntreprise()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role'])){
			extract($_SESSION['Auth']);
			$pdo = getPDOConnection();
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0)
			{
				$data = $req->fetch();
				if($data['role'] == ROLE_ENTREPRISE) //On test si l'utilisateur est bien un client (ID 2 dans la tabe usertype)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}


	static function isLogged($role)
	{
		if( isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['pass']))
		{
			extract($_SESSION['Auth']);
			$pdo = getPDOConnection();
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0) //Si l'utilisateur existe
			{

				if($role == ROLE_ADMIN)
				{
					if(Auth::isAdmin()) // On verrifi dans la bdd 
						return true;
					else
						return false;
				}
				else if($role == ROLE_PARTICULIER)
				{
					if(Auth::isClient())
						return true;
					else
						return false;
				}
				else if($role == ROLE_ENTREPRISE)
				{
					if(Auth::isEntreprise())
						return true;
					else
						return false;
				}				
			}
			else
			{
				return false;
			}
		} // Si les variables de sessions n'existe pas
		else
		{
			return false;
		}
	}
	*/
