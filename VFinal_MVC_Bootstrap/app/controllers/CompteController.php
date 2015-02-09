<?php
  
class CompteController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 $this->smarty->display(_TPL_.'compte.tpl');
   }
}

?>
