<?php

define('OFFRE_OPDATA','0');
define('OFFRE_BI', '1');
define('OFFRE_PREMUIM', '2');
define('DEFAULT_SIZE_OPDATA','50');
define('DEFAULT_SIZE_BI','100');
define('DEFAULT_SIZE_PREMUIM','200');

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

	public function insert($nom_entreprise, $email_entreprise, $siret_entreprise, $tel_entreprise, $fax_entreprise, $forme_juridique_entreprise, $activite_entreprise, $id_of_inserted_adresse)
	{
		$entreprise_sql_req = "INSERT INTO `entreprise` (
                `id_entreprise`, 
                `nom_entreprise`, 
                `email_entreprise`, 
                `siret_entreprise`, 
                `tel_entreprise`, 
                `fax_entreprise`, 
                `forme_juridique_entreprise`, 
                `activite_entreprise`, 
                `type_offre`,
                `espace_disponible`,
                `nombre_fichier`,
                `id_adresse`)
                VALUES (NULL, 
                ".$this->pdo->quote($nom_entreprise).",  
                ".$this->pdo->quote($email_entreprise).", 
                ".$this->pdo->quote($siret_entreprise).",  
                ".$this->pdo->quote($tel_entreprise).", 
                ".$this->pdo->quote($fax_entreprise).",  
                ".$this->pdo->quote($forme_juridique_entreprise).", 
                ".$this->pdo->quote($activite_entreprise).", 
                ".$this->pdo->quote(OFFRE_BI).",  
                ".$this->pdo->quote(DEFAULT_SIZE_BI).", 
                ".$this->pdo->quote(0).", 
                ".$this->pdo->quote($id_of_inserted_adresse).");";
                        
                //echo $entreprise_sql_req;
                if($this->pdo->exec($entreprise_sql_req))
                {
                   return $this->pdo->lastInsertId();
                }
	}

        public function createDbData($id_of_db)
        {
           $bddData = $this->pdo->createDbData($id_of_db);
           if(!empty($bddData))
           {
              echo 'bdd Data cree';
           }
           //$this->createTableInfo($bddData);
        }

}

?>