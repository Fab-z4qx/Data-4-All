<?php

require_once(_MODEL_.'Entreprise.php');
require_once(_MODEL_.'DataFile.php');

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
      $i = 0;
      foreach ($name as $n) {
         $name[$i]['nom_entreprise'] = $this->smarty_modifier_premier_maj($n['nom_entreprise']);
         $i++;
      }
      return $name;
   }

   private function smarty_modifier_premier_maj($string)
   {
       $string[0] = strtoupper($string[0]);
       return $string;
   }

   public function search()
   {
		/* CONTROLE DE LA VALEUR */
		$ent = new entreprise();
		if( isset($_POST) && !empty($_POST['nom']) )
		{
			$result = $ent->searchEntreprise($_POST['nom']);
         if($result != null)
         {
            $dataFile = new DataFile($result['id_entreprise']);
            $filesInfo = $dataFile->getFileInfo($result['id_entreprise']);
            $this->smarty->assign('id_entreprise', $result['id_entreprise']);
            $this->smarty->assign('fileinfo', $filesInfo);
            $this->smarty->display(_TPL_PUBLIC_.'fichier_entreprise.tpl');
         }
         else{
            echo "l'entreprise n'existe pas !";
         }
		}
		else
      {

			$this->smarty->display(_TPL_PUBLIC_.'enterprises.tpl');
		}
   }

   public function info($value=null)
   {
      $dataFile = new DataFile($value);
      $filesInfo = $dataFile->getFileInfo($value);
      $this->smarty->assign('id_entreprise', $value);
      $this->smarty->assign('fileinfo', $filesInfo);
      $this->smarty->display(_TPL_PUBLIC_.'fichier_entreprise.tpl');
   }
}

?>
