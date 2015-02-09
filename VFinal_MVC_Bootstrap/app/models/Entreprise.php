<?php

class Entreprise {

	private $pdo;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
	}

	public function getInfoEntreprise($idEntreprise)
	{
		$sql = 'SELECT * FROM entreprise WHERE id_entreprise ='.$idEntreprise.';';
		$req = $this->pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data;
		}
		return NULL;
	} 
}

?>