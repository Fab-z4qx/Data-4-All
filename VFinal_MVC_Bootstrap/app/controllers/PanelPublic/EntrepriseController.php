<?php
  
class EntrepriseController extends Controller
{
   public function display() 
   {
      $this->smarty->display(_TPL_PUBLIC_.'enterprises.tpl');
   }

   public function search()
   {
   		/* CONTROLE DE LA VALEUR */
   		$ent = new entreprise();
   		if( isset($_POST) && !empty($_POST['nom']) )
   		{
   			$result = $ent->searchEntreprise($_POST['nom']);
   			print_r($result);
   		}
   		else{
   			$this->display();
   		}
   }
}

?>
