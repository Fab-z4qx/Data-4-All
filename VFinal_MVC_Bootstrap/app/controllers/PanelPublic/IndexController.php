<?php
  
class IndexController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 include _TPL_COMMON_.'head.tpl';
   	 $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
   	 include _TPL_COMMON_.'footer.tpl';
   }
}

?>
