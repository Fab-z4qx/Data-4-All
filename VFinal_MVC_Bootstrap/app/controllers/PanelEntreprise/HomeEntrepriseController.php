<?php
  
class HomeEntrepriseController extends Controller 
{
   public function display() 
   {
   	 //include _TPL_.'head.tpl';
   	 $entreprise = new Entreprise();
       $this->smarty->assign('numberOfFile', $entreprise->getNumberFile($_SESSION['info']['id_entreprise']));
   	 $this->smarty->assign('space', $entreprise->getUse($_SESSION['info']['id_entreprise']) .'MO/<br>'.$this->octetToMo($entreprise->getSpace($_SESSION['info']['id_entreprise'])).'MO');
   	 $this->smarty->display(_TPL_ENT_.'HomeEntreprise.tpl');
   	 //include _TPL_.'footer.tpl';
   }

   private function octetToMo($value)
   {
   	return round($value/1048576,2);
   }
}

?>
