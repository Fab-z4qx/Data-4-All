<?php

class Database {
   static protected $_instance = null;
   protected $_db;

   static public function getInstance() {
      if( is_null(self::$_instance) )
         self::$_instance = new Database();
      return self::$_instance;
   }

   protected function __construct() {

      if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') 
      {
         $this->_db = new PDO(
         "mysql:host=localhost;dbname=bdd_d4a;charset=utf8",
         "root",
         "root");
      } 
      else 
      { //mac 
         $this->_db = new PDO(
         "mysql:host=localhost;dbname=bdd_d4a;charset=utf8",
         "root",
         "");
      }
     
   }

   public function __call($method, array $arg) {
      // Si on appelle une méthode qui n'existe pas, on 
      // delegue cet appel à l'objet PDO $this->_db
      return call_user_func_array(array($this->_db, $method), $arg);
   }
}
