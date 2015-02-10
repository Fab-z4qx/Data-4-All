<?php

class Adresse {

	private $pdo;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
	}

	
}

?>