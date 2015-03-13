<?php
  
//require_once(_MODEL_.'entreprise.php');

class CompteController extends Controller 
{
   public function display() 
   {
   	 $entreprise = new Entreprise();
   	 $this->smarty->assign('nom_entreprise', $_SESSION['info']['nom_entreprise']);
   	 $this->smarty->assign('email_entreprise', $_SESSION['info']['email_entreprise']);
   	 $this->smarty->assign('siret_entreprise', $_SESSION['info']['siret_entreprise']);
   	 $this->smarty->assign('tel_entreprise', $_SESSION['info']['tel_entreprise']);
   	 $this->smarty->assign('fax_entreprise', $_SESSION['info']['fax_entreprise']);
   	 $this->smarty->assign('forme_juridique_entreprise', $_SESSION['info']['forme_juridique_entreprise']);
   	 $this->smarty->assign('type_offre', $entreprise->getTypeOffreByName($_SESSION['info']['type_offre']));
       $adresse = $entreprise->getAdresse($_SESSION['info']['id_adresse']);
   	 $this->smarty->assign('adresse',$adresse['adresse']);
       $this->smarty->assign('adresse_complementaire',$adresse['adresse_complementaire']);
       $this->smarty->assign('code_postal',$adresse['code_postal']);
       $this->smarty->assign('ville',$adresse['ville']);
       $this->smarty->assign('pays',$adresse['pays']);
   	 $this->smarty->display(_TPL_ENT_.'compte.tpl');
   }
}

?>
