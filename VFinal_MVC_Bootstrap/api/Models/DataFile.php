<?php

class DataFile 
{

	private $pdo;
	//private $pdoData;

	/*public function __construct()
	{
		//$this->pdo = Database::getInstance();
		//$this->pdoData = $this->pdo->getDbConnection('_'.$_SESSION['info']['id_entreprise']);
	}

	/*public function createTable($array, $name)
	{
		$tableCreate = 'CREATE TABLE IF NOT EXISTS '. $name .' (';

		for($i = 0; $i < count($array[1]); $i++){
		if($i > 0){
		 	$tableCreate = $tableCreate.", ";
		}
			$tableCreate = $tableCreate.$array[0][$i];
			$cellType = gettype($array[1][$i]);
			if(strcmp($cellType, "NULL")  == 0 || strcmp($cellType, "string") == 0 ){
				$cellType = "VARCHAR(255)";
			}	
			$tableCreate = $tableCreate." ".$cellType;
	
		}
		$tableCreate = $tableCreate.");";
		$this->pdoData->exec($tableCreate);
	}*/

	/*
	public function insert($array, $name)
	{
		$columnName = implode(",", $array[0]);
		for($i = 1; $i < count($array); $i++)
		{
			$values = implode(",", $array[$i]);
			$insertQuery = 'INSERT INTO '. $name . '('.$columnName.') VALUES('.$values.')';
			$this->pdoData->exec($insertQuery);
		}
	} */

	/* Il faut check si l'id est valide */
	private function getInstance($id)
	{
		$this->pdo = Database::getInstance('_'.$id);
		//$this->pdo = $this->pdo->getDbConnection('_'.$id);
	}

	 /**
     * Returns a JSON string object to the browser with all datafile name into db of entreprise
     *
     * @url GET /file/$id
     */
	public function getFileName($id)
	{
		$this->getInstance($id);
		$sql = 'show tables FROM _'.$id;
		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data;
		}
		return NULL;
	}

	 /**
     * Returns a JSON string object to the browser with all datafile name into db of entreprise
     *
     * @url GET /file/info/$id
     */
	public function getFileInfo($id)
	{
		$this->getInstance($id);
		$sql = "SELECT table_name AS 'nom', round(((data_length + index_length) / 1024 / 1024), 2) AS 'size', CAST(create_time AS DATE) AS 'date'
		FROM information_schema.tables 
		WHERE table_schema =  '_".$id."';";

		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data;
		}
		return NULL;

	}

	/*
	public function getTypeAlea($id_file)
	{
		$sql = 'SELECT type_alea, count(*) as nb from '.$id_file.' group by type_alea';
		$req = $this->pdoData->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}*/

	public function getDbSize($id)
	{
		$this->getInstance($id);
		$sql = 'SELECT table_schema "DB Name", Round(Sum(data_length + index_length) / 1024 / 1024, 1) "DB Size in MB" FROM information_schema.tables GROUP BY table_schema';
		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	
	public function getPiece($id_file){
		$sql = 'SELECT Piece,sum(Nb__Pieces_finies) as nbPi, sum(Heures) as heure from '.$id_file.'  group by `Piece`order by heure';
		$req = $this->pdoData->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}

	public function getData($id_ent, $id_file)
	{
		$this->getInstance($id_ent);
		$sql = 'SELECT * from '.$id_file;
		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data;
		}
		return NULL;
	}

	public function getDataRange($id_ent, $id_file, $range1, $range2)
	{
		$this->getInstance($id_ent);
		$sql = 'SELECT * from '.$id_file.' LIMIT '.$range1.','.$range2;
		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($data)){
			return $data;
		}
		return NULL;
	}

	private function idToName($id)
	{
		
	}

	
}

?>