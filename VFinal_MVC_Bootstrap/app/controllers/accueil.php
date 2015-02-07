<?php
  
class IndexController extends Controller 
{
   public function display() 
   {
   	 $this->smarty->display(_TPL_.'accueil.tpl');
   }
}

?>
