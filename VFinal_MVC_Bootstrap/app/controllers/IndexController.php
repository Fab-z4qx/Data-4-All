<?php
  
class IndexController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	// include _TPL_.'head.tpl';
   	 $this->smarty->display(_TPL_.'accueil.tpl');
   	 //include _TPL_.'footer.tpl';
   }
}

?>
