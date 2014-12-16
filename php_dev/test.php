<?php

require_once 'PHPExcel_1.8.0_doc/Classes/PHPExcel/IOFactory.php';
 
// Chargement du fichier Excel
$objPHPExcel = PHPExcel_IOFactory::load("ExportBB.xls");
 
/**
* récupération de la première feuille du fichier Excel
* @var PHPExcel_Worksheet $sheet
*/
$sheet = $objPHPExcel->getSheet(0);
 
echo '<table border="1">';
 $cpt = 0;
// On boucle sur les lignes
foreach($sheet->getRowIterator() as $row) {
 
   echo '<tr>';
 
   // On boucle sur les cellule de la ligne
   foreach ($row->getCellIterator() as $cell) {
      echo '<td>';
      print_r($cell->getValue());
	  
	  if(is_double($cell->getValue()))
		echo "coucou";
      echo '</td>';  
   }
   $cpt++;
   if($cpt == 2)
	exit;
 
   echo '</tr>';
}
echo '</table>';

?>