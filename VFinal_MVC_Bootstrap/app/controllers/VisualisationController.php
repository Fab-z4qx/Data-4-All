<?php
  
class VisualisationController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 $this->smarty->display(_TPL_.'visualisation.tpl');
   }
}

?>
