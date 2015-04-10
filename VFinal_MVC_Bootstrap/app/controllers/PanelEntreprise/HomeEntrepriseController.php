<?php
  
/* Controller Home Entreprise */
class HomeEntrepriseController extends Controller 
{
   public function display() 
   {
   	   $entreprise = new Entreprise();
       $this->smarty->assign('numberOfFile', $entreprise->getNumberFile($_SESSION['info']['id_entreprise']));
       $this->smarty->assign('space', $entreprise->getUse($_SESSION['info']['id_entreprise']));
       $this->smarty->assign('space_max', $this->octetToMo($entreprise->getSpace($_SESSION['info']['id_entreprise']))); 
   	   $this->smarty->display(_TPL_ENT_.'HomeEntreprise.tpl');
   }

   private function octetToMo($value)
   {
   	return round($value/1048576,2);
   }

   public function search($entreprise)
   {
      /* NEED CONTROLE DE LA VALEUR INJECTION SQL */
      $ent = new Entreprise();
      $ent->searchEntreprise($entreprise);
   }
}

?>
