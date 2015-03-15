<?php

require_once(_MODEL_.'Entreprise.php');

class EntrepriseController extends Controller
{
   public function display() 
   {
      $this->smarty->assign('listeEntreprise', $this->getNameEntreprise());
      $this->smarty->display(_TPL_PUBLIC_.'enterprises.tpl');
   }

   private function getNameEntreprise()
   {
      $ent = new Entreprise();
      $name = $ent->getListeEntreprise();
      return $name;
   }

   public function search()
   {
		/* CONTROLE DE LA VALEUR */
		$ent = new entreprise();
		if( isset($_POST) && !empty($_POST['nom']) )
		{
			$result = $ent->searchEntreprise($_POST['nom']);
		}
		else{
			$this->display();
		}
   }
}

?>
