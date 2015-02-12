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

	public function insert($nom_entreprise, $email_entreprise, $siret_entreprise, $tel_entreprise, $fax_entreprise, $id_bdd, $date_immat_rcs_entreprise, $forme_juridique_entreprise, $num_tva_entreprise, $activite_entreprise, $id_of_inserted_adresse)
	{
		$entreprise_sql_req = "INSERT INTO `entreprise` (
        `id_entreprise`, 
        `nom_entreprise`, 
        `email_entreprise`, 
        `siret_entreprise`, 
        `tel_entreprise`, 
        `fax_entreprise`, 
        `id_bdd_entreprise`, 
        `date_immat_rcs_entreprise`, 
        `forme_juridique_entreprise`, 
        `num_tva_entreprise`, 
        `activite_entreprise`, 
        `id_adresse`) 
        VALUES (NULL, 
        ".$this->pdo->quote($nom_entreprise).",  
        ".$this->pdo->quote($email_entreprise).", 
        ".$this->pdo->quote($siret_entreprise).",  
        ".$this->pdo->quote($tel_entreprise).", 
        ".$this->pdo->quote($fax_entreprise).", 
        ".$this->pdo->quote(null).", 
        ".$this->pdo->quote($date_immat_rcs_entreprise).", 
        ".$this->pdo->quote($forme_juridique_entreprise).", 
        ".$this->pdo->quote($num_tva_entreprise).", 
        ".$this->pdo->quote($activite_entreprise).", 
        ".$id_of_inserted_adresse.");";

        if($this->pdo->exec($entreprise_sql_req))
        {
        	return $this->pdo->lastInsertId();
        }
	}
}

?>