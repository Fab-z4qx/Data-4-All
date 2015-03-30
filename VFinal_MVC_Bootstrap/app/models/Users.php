<?php

/* ROLE DEFINE */
define('ROLE_PARTICULIER',1); //public
define('ROLE_ENTREPRISE',2);
define('ROLE_ADMIN',3);

class Users {

	private $pdo;

	public function __construct()
	{
		$pdo = Database::getInstance();
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
		return $data['id_user'];
	}

	public function getRole($id)
	{
		$sql = "SELECT role FROM user WHERE id_user='$id';";
		$req = $pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
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
		//return $data['role'];	
	}



}

?>