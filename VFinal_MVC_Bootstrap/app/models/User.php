<?php

/* ROLE DEFINE */
define('ROLE_PARTICULIER',1); //public
define('ROLE_ENTREPRISE',2);
define('ROLE_ADMIN',3);

class User {

	private $pdo;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
	} 

	public function isExist($login,$password)
	{
		$sql = "SELECT id_user FROM user WHERE login='$login' AND password ='$password'";
		$req = $this->pdo->query($sql);
		if(!empty($req))
		{
			if($req->rowCount()> 0)
			{
				return true;
			}
			else
				return false;
		}
		return false;
	}

	public function getId($login,$password)
	{
		$sql = "SELECT id_user FROM user WHERE login='$login' AND password ='$password'";
		$req = $this->pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data['id_user'];
		}
		return NULL;
	}

	public function getRoleById($id)
	{
		$sql = "SELECT role FROM user WHERE id_user='$id';";
		$req = $this->pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data))
		{
			switch($data['role'])
			{
				case ROLE_PARTICULIER:
					return ROLE_PARTICULIER;
				break;
				case ROLE_ENTREPRISE:
					return ROLE_ENTREPRISE;
				break;
				case ROLE_ADMIN:
					return ROLE_ADMIN;
				break;
			}	
		}
		return NULL;
	}


	public function getRoleByUserName($login,$password)
	{
		$sql = "SELECT role FROM user WHERE login='$login' AND password ='$password'";
		$req = $this->pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data))
		{
			switch($data['role'])
			{
				case ROLE_PARTICULIER:
					return ROLE_PARTICULIER;
				break;
				case ROLE_ENTREPRISE:
					return ROLE_ENTREPRISE;
				break;
				case ROLE_ADMIN:
					return ROLE_ADMIN;
				break;
			}	
		}
		return NULL;
		//return $data['role'];	
	}

	public function convertRoleToString($idRole)
	{
		if(empty($idRole))
		{
			return NULL;
		}

		switch($idRole)
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

	public function convertRoleToInt($idRole)
	{
		if(empty($idRole))
		{
			return NULL;
		}

		switch($idRole)
		{
			case 'particulier':
				return ROLE_PARTICULIER;
			break;
			case 'entreprise':
				return ROLE_ENTREPRISE;
			break;
			case 'admin':
				return ROLE_ADMIN;
			break;
		}	
	}


	public function getIdEntreprise($login, $password)
	{
		$sql = "SELECT entreprise_id_entreprise FROM user WHERE login='$login' AND password ='$password'";
		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($data))
		{
			return $data[0]['entreprise_id_entreprise'];
		}
		return NULL;
	}

	public function insert($password,$email_entreprise,$role, $id_of_inserted_entreprise)
	{
		/* Ajout dans la table user */
         $id = $this->pdo->lastInsertId();
         $sql_user = "INSERT INTO `user` 
         (`id_user`, 
         `password`, 
         `login`, 
         `role`,
         `entreprise_id_entreprise`) 
         VALUES 
         (NULL, 
         ".$this->pdo->quote(sha1($password)).",
         ".$this->pdo->quote($email_entreprise).", 
         ".$this->pdo->quote($role).", 
         ".$id.");";
         
         if($this->pdo->exec($sql_user))
         { //On à bien cree le compte du nouvelle utilisateur!
            //header('Location:login.php?acc=ok');
            echo "compte utilisateurs crée";
            return $this->pdo->lastInsertId();
         }
	}
}

?>