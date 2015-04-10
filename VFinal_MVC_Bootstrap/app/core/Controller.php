<?php 

/* Classe mere de tous les controller */
class Controller 
{
   protected $smarty;
   public function __construct() 
   {
      $this->smarty = new Smarty();
   }
}
?>