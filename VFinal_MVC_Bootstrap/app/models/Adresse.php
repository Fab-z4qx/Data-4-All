<?php

class Adresse {

	private $pdo;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
	}

	public function insert($adresse, $adresse_complementaire, $ville, $code_postal, $pays)
	{
		 $adresse_sql_req = "INSERT INTO `adresse` 
         (`id_adresse`, 
         `code_postal`, 
         `pays`, 
         `adresse`, 
         `adresse_complementaire`, 
         `ville`) 
         VALUES (NULL, 
         ".$this->pdo->quote($code_postal).", 
         ".$this->pdo->quote($pays).", 
         ".$this->pdo->quote($adresse).",
         ".$this->pdo->quote($adresse_complementaire).",
         ".$this->pdo->quote($ville).");"; 

		   //echo $adresse_sql_req;
         /* Ajout dans la table Entreprise */
         if($this->pdo->exec($adresse_sql_req))
         {
         	//echo "INSERT";
         	return $this->pdo->lastInsertId();
         }

	}
}

?>