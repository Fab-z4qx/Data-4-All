<?php
  
class IndexController extends Controller 
{
   public function display() 
   {
   	 $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
   }

   public function entreprise()
   {
      $this->smarty->display(_TPL_PUBLIC_.'enterprises.tpl');
   }
}

?>
