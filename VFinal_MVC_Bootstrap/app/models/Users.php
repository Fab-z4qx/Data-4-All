<?php

/* ROLE DEFINE */
define('ROLE_PARTICULIER',1); //public
define('ROLE_ENTREPRISE',2);
define('ROLE_ADMIN',3);

class Users {

	private $pdo;

	public function __construct()
	{
		$this->pdo = Database::getInstance();
	} 

	public function isExist($login,$password)
	{
		$sql = "SELECT id_user,role FROM user WHERE login='$login' AND password ='$pass'";
		$req = $pdo->query($sql);
		if($req->rowCount()> 0)
		{
			return true;
		}
		else
			return false;
	}

	public function getId($login,$password)
	{
		$sql = "SELECT id_user FROM user WHERE login='$login' AND password ='$pass'";
		$req = $pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data['id_user'];
		}
		return NULL;
	}

	public function getRole($id)
	{
		$sql = "SELECT role FROM user WHERE id_user='$id';";
		$req = $pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data))
		{
			switch($data['role'])
			{
				case ROLE_PARTICULIER:
					return 'particulier';
				break;
				case ROLE_ENTREPRISE:
					return 'entreprise';
				break;
				case ROLE_ADMIN:
					return 'admin';
				break;
			}	
		}
		return NULL;
		//return $data['role'];	
	}

	public function getIdEntreprise($login, $password)
	{
		$sql = "SELECT entreprise_id_entreprise FROM user WHERE login='$login' AND password ='$password'";
		$req = $pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data))
		{
			return $data['entreprise_id_entreprise'];
		}
		return NULL;
	}

}

?>