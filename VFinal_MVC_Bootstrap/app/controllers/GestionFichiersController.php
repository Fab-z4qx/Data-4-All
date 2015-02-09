<?php
  
class GestionFichiersController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 $this->smarty->display(_TPL_.'gestionFichiers.tpl');
   }
}

?>
