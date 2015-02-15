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

	public function updateNumberFile($mode)
	{
		$sql = 'SELECT nombre_fichier FROM entreprise WHERE id_entreprise='.$_SESSION['info']['id_entreprise'];
		$req = $this->pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		print_r($data);
		$nb_of_file = 0;
		if(!empty($data)){
			$nb_of_file = $data['nombre_fichier'];
		}
		print_r($mode);
		if($mode == '+')
		{
			$nb_of_file++;
		}
		else if($mode == '-')
		{
			$nb_of_file--;
		}
		else
			exit();
		echo $nb_of_file;

		$sql = 'UPDATE entreprise SET nombre_fichier ='.$nb_of_file.' WHERE id_entreprise ='.$_SESSION['info']['id_entreprise'];
		echo $sql;
		$this->pdo->exec($sql);
	}

	public function updateSpace($size, $mode)
	{
		$sql = 'SELECT espace_disponible FROM entreprise WHERE id_entreprise='.$_SESSION['info']['id_entreprise'];
		$req = $this->pdo->query($sql);
		$data = $req->fetch(PDO::FETCH_ASSOC);
		$space = 0;
		if(!empty($data)){
			$space = $data['espace_disponible'];
		}

		if($mode == '+')
		{
			$space = $space + $size;
		}
		else if($mode == '-')
		{
			$space = $space - $size;
		}
		else
			exit();

		$sql = 'UPDATE entreprise SET espace_disponible ='.$space.' WHERE id_entreprise ='.$_SESSION['info']['id_entreprise'];
		$this->pdo->exec($sql);
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
	
}

?>