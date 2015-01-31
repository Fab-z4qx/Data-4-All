<?php

require('common.inc.php');
require(ROOT_DIR.INCLUDES.'data4all.inc.php');
require(ROOT_DIR.INCLUDES.'fonctions.php');
require(ROOT_DIR.INCLUDES.'lib/lib.php');

class Auth{

	static function isAdmin()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role']))
		{
			extract($_SESSION['Auth']);
			require('lib/sql_connect.php');
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0)
			{
				$data = $req->fetch();
				if($data['role'] == 1) //On test si l'utilisateur est bien un admin (ID 1 dans la table Usertype)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else{
				return false;
			}
		}
	}


	static function isClient()
	{
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['role'])){
			extract($_SESSION['Auth']);
			require('lib/sql_connect.php');
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0)
			{
				$data = $req->fetch();
				if($data['role'] == 2) //On test si l'utilisateur est bien un client (ID 2 dans la tabe usertype)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else{
				return false;
			}
		}
	}


	static function isLogged($role)
	{
		if( isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['pass']))
		{
			extract($_SESSION['Auth']);
			require('lib/sql_connect.php');
			$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
			$req = $pdo->query($sql);
			if($req->rowCount()> 0) //Si l'utilisateur existe
			{

				if($role == '1')
				{
					if(Auth::isAdmin())
						return true;
					else
						return false;
				}
				else if($role == '2')
				{
					if(Auth::isClient())
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
}