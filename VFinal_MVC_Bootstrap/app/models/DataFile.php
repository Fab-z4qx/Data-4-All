<?php

class DataFile {

	private $pdo;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
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
		$this->pdo->exec($tableCreate);
	}

	public function insert($array, $name)
	{
		$columnName = implode(",", $array[0]);
		for($i = 1; $i < count($array); $i++)
		{
			$values = implode(",", $array[$i]);
			$insertQuery = 'INSERT INTO '. $name . '('.$columnName.') VALUES('.$values.')';
			$this->pdo->exec($insertQuery);
		}
		
	}
	
	
}

?>