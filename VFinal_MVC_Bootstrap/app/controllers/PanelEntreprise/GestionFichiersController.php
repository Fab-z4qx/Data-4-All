<?php
require_once _CORE_.'PHPExcel_1.8.0_doc/Classes/PHPExcel/IOFactory.php';
require_once _CORE_.'Lib.php';
require_once(_MODEL_.'DataFile.php');

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
		
		$file_name = $_FILES["file"]["name"];
		// J'explose dans un tableau à chaque fois que je rencontre un point
		$file_array = explode ('.',$file_name);
		// Je récupère l'indice dans le tableau de l'extension "jpg", soit le dernier élément
		$extension = count ($file_array) - 1;
		// Je découpe en enlevant l'extension cad (la taille de "jpg" + la taille du point d'où le -1)
		$New = substr ($file_name,0,strlen($file_name) -strlen ($file_array[$extension])-1);
		$this->insertFile($target_dir,$New);
		echo ("<p>insert has been successfully received.</p>");
	}
	
	private function insertFile($file,$filename){
	

 
		// Chargement du fichier Excel
		$objPHPExcel = PHPExcel_IOFactory::load($file);
			$sheet = $objPHPExcel->getSheet(0);
	 
		/*------------------Loading File into an Array-------------------------------*/
		$cptFirstDim = 0;
		// On boucle sur les lignes
		foreach($sheet->getRowIterator() as $row) {
		//echo '<tr>';
		 $cptSecDim = 0;
		// On boucle sur les cellule de la ligne
			foreach ($row->getCellIterator() as $cell) {
				if($cptFirstDim ==0){
					$array[$cptFirstDim][$cptSecDim] = changeToNoPoint(preg_replace('/\s+/', '_',trim(changeToNoAccent($cell->getValue()))));
				}else{			
					$value = $cell->getFormattedValue();
					
							if(PHPExcel_Shared_Date::isDateTime($cell)) {
								$value =  (new DateTime(date('d-M-Y',PHPExcel_Shared_Date::ExcelToPHP($cell->getValue()))))->format('d-m-Y');	
							}
					$cellde = gettype($value);
					if(strcmp($cellde, "string") == 0 ){
						$array[$cptFirstDim][$cptSecDim] = '"'.$value.'"';
					}elseif(strcmp($cellde, "NULL")  == 0){
						$array[$cptFirstDim][$cptSecDim] = '"'.'"';
					}else{
						$array[$cptFirstDim][$cptSecDim] = $value;
					}
				}
				$cptSecDim++;
			}
		$cptFirstDim++;
		}
		
				
		$DataFile = new DataFile();
		$DataFile->createTable($array,$filename);
		$DataFile->insert($array,$filename);
		
		
	}

}

?>
