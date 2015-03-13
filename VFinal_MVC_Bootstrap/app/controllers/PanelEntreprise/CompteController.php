<?php
  
//require_once(_MODEL_.'entreprise.php');

class CompteController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	
   	 $entreprise = new Entreprise();
   	 $this->smarty->assign('nom_entreprise', $_SESSION['info']['nom_entreprise']);
   	 $this->smarty->assign('email_entreprise', $_SESSION['info']['email_entreprise']);
   	 $this->smarty->assign('siret_entreprise', $_SESSION['info']['siret_entreprise']);
   	 $this->smarty->assign('tel_entreprise', $_SESSION['info']['tel_entreprise']);
   	 $this->smarty->assign('fax_entreprise', $_SESSION['info']['fax_entreprise']);
   	 $this->smarty->assign('forme_juridique_entreprise', $_SESSION['info']['forme_juridique_entreprise']);
   	 $this->smarty->assign('type_offre', $entreprise->getTypeOffreByName($_SESSION['info']['type_offre']));
   	 //$this->smarty->assign('adresse',$entreprise->getAdresse($_SESSION['info']['id_adresse']));
   	 
       echo '<pre>';
   	 	print_r($entreprise->getAdresse($_SESSION['info']['id_adresse']));
   	 echo '</pre>';
   	 
   	 $this->smarty->display(_TPL_ENT_.'compte.tpl');
   }
}

?>
