<?php
  
class CompteController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 $this->smarty->display(_TPL_ENT_.'compte.tpl');
   }
}

?>
