?<?php
  
class enterpriseController extends Controller
{
   public function display() 
   {
      $this->smarty->display(_TPL_PUBLIC_.'enterprises.tpl');
   }
}

?>
