<?php

class Database {
   static protected $_instance = null;
   protected $_db;

   static public function getInstance() {
      if( is_null(self::$_instance) )
         self::$_instance = new Database();
      return self::$_instance;
   }

   protected function __construct() 
   {
      try
      {   // On se connecte à MySQL
         if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
         {
            $host = '127.0.0.1';
            $dbname = 'bdd_d4a';
            $port = '3306'; // 3306 for windows && 8889 for mac 
            $user = 'root';
            $password = '';
            $this->_db = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.'',''.$user.'', ''.$password.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')); 
         } 
         else 
         { //mac 
            $host = '127.0.0.1';
            $dbname = 'bdd_d4a';
            $port = '8889'; // 3306 for windows && 8889 for mac 
            $user = 'root';
            $password = 'root';
            $this->_db = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.'',''.$user.'', ''.$password.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8')); 
         }

      }
      catch(Exception $e)
      {   // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
      }
     
   }

   public function __call($method, array $arg) {
      // Si on appelle une méthode qui n'existe pas, on 
      // delegue cet appel à l'objet PDO $this->_db
      return call_user_func_array(array($this->_db, $method), $arg);
   }
}
