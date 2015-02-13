<?php

class GestionFichiersController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	
   	 $this->smarty->display(_TPL_ENT_.'gestionFichiers.tpl');
   }

   private 	function bytesToSize1024($bytes, $precision = 2) 
   {
	    $unit = array('B','KB','MB');
	    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
   }

   public function upload()
   {
		$allowed =  array('gif','png' ,'jpg', 'pdf', 'xls', 'xlsx');
		$filename = $_FILES['file']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$allowed) ) {
		    echo 'error file is incorrect';
		    exit();
		}

		$sFileName = $_FILES['file']['name'];
		$sFileType = $_FILES['file']['type'];
		$sFileSize = $this->bytesToSize1024($_FILES['file']['size'], 1);

		$target_dir = _FILES_.$_SESSION['info']['id_entreprise'].'/';

		if(!file_exists($target_dir))
			mkdir($target_dir, 0555);

		$target_dir = $target_dir.basename($_FILES["file"]["name"]);
		$uploadOk=1;
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) {
		    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
		} else {
		    echo "Sorry, there was an error uploading your file.";
		    if ($_FILES['file']['error'] == UPLOAD_ERR_NO_FILE ) $erreur = "Fichier manquant";
		    if ($_FILES['file']['error'] == UPLOAD_ERR_INI_SIZE ) $erreur = "Taille limite php";
		    if ($_FILES['file']['error'] == UPLOAD_ERR_FORM_SIZE ) $erreur = "Taille max formulaire";
		    if ($_FILES['file']['error'] == UPLOAD_ERR_PARTIAL ) $erreur = "Fichier partiellement transféré";
			echo $erreur;
		}

		if ($_FILES['file']['error'] > 0) $erreur = "Erreur lors du transfert";
		echo ("<p>Your file: {$sFileName} has been successfully received.</p> 
			  <p>Type: {$sFileType}</p><p>Size: {$sFileSize}</p>"); 
	}

}

?>
