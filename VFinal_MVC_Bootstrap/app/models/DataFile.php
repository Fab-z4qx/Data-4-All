<?php

class DataFile {

	private $pdo;
	private $pdoData;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
		$this->pdoData = $this->pdo->getDbConnection('_'.$_SESSION['info']['id_entreprise']);
	}

	public function createTable($array, $name)
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
	}

	public function insert($array, $name)
	{
		$columnName = implode(",", $array[0]);
		for($i = 1; $i < count($array); $i++)
		{
			$values = implode(",", $array[$i]);
			$insertQuery = 'INSERT INTO '. $name . '('.$columnName.') VALUES('.$values.')';
			$this->pdoData->exec($insertQuery);
		}
		
	}

	public function getFileName()
	{
		$sql = 'show tables FROM _'.$_SESSION['info']['id_entreprise'];
		$req = $this->pdo->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		$nameFiles;
		if(!empty($data)){
			$nameFiles = $data;
		}
		//echo $sql;
		return $nameFiles;
	}

	public function getTypeAlea($id_file)
	{
		
		$sql = 'SELECT type_alea, count(*) as nb from '.$id_file.' group by type_alea';
		$req = $this->pdoData->query($sql);
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
	
}

?>