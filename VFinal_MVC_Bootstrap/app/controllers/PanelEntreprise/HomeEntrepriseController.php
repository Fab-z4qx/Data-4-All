<?php
  
class HomeEntrepriseController extends Controller 
{
   public function display() 
   {
   	 //include _TPL_.'head.tpl';
   	 $this->smarty->display(_TPL_ENT_.'HomeEntreprise.tpl');
   	 //include _TPL_.'footer.tpl';
   }
}

?>
