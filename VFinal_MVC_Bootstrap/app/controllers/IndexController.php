<?php
  
class IndexController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 $this->smarty->display(_TPL_.'accueil.tpl');
   }
}

?>
