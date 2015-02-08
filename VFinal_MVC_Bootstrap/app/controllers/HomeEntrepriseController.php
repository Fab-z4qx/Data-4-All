<?php
  
class HomeEntrepriseController extends Controller 
{
   public function display() 
   {
   	 $pdo = Database::getInstance();
   	 $this->smarty->display(_TPL_.'HomeEntreprise.tpl');
   }
}

?>
