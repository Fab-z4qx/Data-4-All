<?php
  
class IndexController extends Controller 
{
   public function display() 
   {
   	 $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
   }
   public function display_c()
   {
   	 $this->smarty->display(_TPL_PUBLIC_.'contact.tpl');
   }
   public function display_ent()
   {
   	 $this->smarty->display(_TPL_PUBLIC_.'fichier_entreprise.tpl');
   }
}


?>
