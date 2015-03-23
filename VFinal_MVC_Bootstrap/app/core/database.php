<?php

class Database {
   static protected $_instance = null;
   protected $_db;
   private $_OS;

   static public function getInstance($dbName=null) {
      if( is_null(self::$_instance) )
         self::$_instance = new Database($dbName);
      return self::$_instance;
   }

   public function __call($method, array $arg) {
      // Si on appelle une méthode qui n'existe pas, on 
      // delegue cet appel à l'objet PDO $this->_db
      return call_user_func_array(array($this->_db, $method), $arg);
   }

   protected function __construct($dbName) 
   {
      if($dbName == null)
      {
         $this->_OS = strtoupper(substr(php_uname("s"), 0, 3));
         $host = '127.0.0.1';
         $dbname = 'bdd_d4a';
         $user = 'root';
         try
         {
            if ($this->_OS === 'DAR') 
            {
               $port = '8889'; // 3306 for windows && 8889 for mac 
               $password = 'root';
            } 
            else 
            {
               $port = '3306'; // 3306 for windows && 8889 for mac 
               $password = '';
            }

         //$this->createDB($dbname);
         $this->_db = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.'',''.$user.'', ''.$password.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')); 
         //$this->executeQueryFile(_PATH_."/app/BDDSite.sql");
         }
         catch(Exception $e)
         {   // En cas d'erreur, on affiche un message et on arrête tout
             die('Erreur : '.$e->getMessage());
         }
      }
      else
      {
         $this->_db = $this->getDbConnection($dbName);
      }
   }

   public function getDbConnection($dbName)
   {
     $this->_OS = strtoupper(substr(php_uname("s"), 0, 3));
     $host = '127.0.0.1';
     // $dbname = 'bdd_d4a';
      $user = 'root';

      try
      {
         if ($this->_OS === 'DAR') 
         {
            $port = '8889'; // 3306 for windows && 8889 for mac 
            $password = 'root';
         } 
         else 
         {
            $port = '3306'; // 3306 for windows && 8889 for mac 
            $password = '';
         }
      $pdo = new PDO('mysql:host='.$host.';dbname='.$dbName.';port='.$port.'',''.$user.'', ''.$password.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
      }
      catch(Exception $e)
      {   // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
      }
      return $pdo;
   }
   
   public function createDB($dbName)
   {
		if($this->_OS === 'DAR')
			$bdd = new PDO("mysql:host=localhost;", "root", "root");
		else
			$bdd = new PDO("mysql:host=localhost;", "root", "");

		$sql = "CREATE DATABASE IF NOT EXISTS ".$dbName;
		$bdd->exec($sql);
      //echo $sql;
      return $bdd;
   }

   public function createDbData($dbName)
   {
      if($this->_OS === 'DAR')
         $bdd = new PDO("mysql:host=localhost;", "root", "root");
      else
         $bdd = new PDO("mysql:host=localhost;", "root", "");

      $sql = "CREATE DATABASE IF NOT EXISTS _".$dbName;
      $result = $bdd->exec($sql);
      return $bdd;
   }
   
   private function executeQueryFile($filesql) 
   {
		$query = file_get_contents($filesql);
		$array = explode(";\n", $query);
		
		$b = true;
		for ($i=0; $i < count($array) ; $i++) {
			$str = $array[$i];
			if ($str != '') {
				 $str .= ';';
				 $this->_db->query($str);  
			}  
		}
   }
}
