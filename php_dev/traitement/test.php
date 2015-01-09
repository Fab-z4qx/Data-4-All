<?php

require_once 'PHPExcel_1.8.0_doc/Classes/PHPExcel/IOFactory.php';
 
// Chargement du fichier Excel
$objPHPExcel = PHPExcel_IOFactory::load("ExportBB.xls");
 
/**
* récupération de la première feuille du fichier Excel
* @var PHPExcel_Worksheet $sheet
*/

$link = mysql_connect("localhost", "root", "");
mysql_select_db("teste");


$sheet = $objPHPExcel->getSheet(0);
 
 /*------------------Loading File into an Array-------------------------------*/
//echo '<table border="1">';
 $cptFirstDim = 0;
// On boucle sur les lignes
foreach($sheet->getRowIterator() as $row) {
	//echo '<tr>';
	 $cptSecDim = 0;
	// On boucle sur les cellule de la ligne
	foreach ($row->getCellIterator() as $cell) {
		if($cptFirstDim ==0){
			$array[$cptFirstDim][$cptSecDim] = changeToNoPoint(preg_replace('/\s+/', '_',trim(changeToNoAccent(utf8_decode($cell->getValue())))));
		}else{
			$cellde = gettype($cell->getValue());
			if(strcmp($cellde, "string") == 0 ){
				$array[$cptFirstDim][$cptSecDim] = '"'.$cell->getValue().'"';
			}elseif(strcmp($cellde, "NULL")  == 0){
				$array[$cptFirstDim][$cptSecDim] = '"'.'"';
			}else{
				$array[$cptFirstDim][$cptSecDim] = $cell->getValue();
			}
			
			
		}
		$cptSecDim++;
		//echo '<td>';
		//print_r($cell->getValue());
	//	echo '</td>';	
	}
	$cptFirstDim++;
	//echo '</tr>';
}

echo "</br></br></br>";

//echo '</table>';

/*------------------Database creation -------------------------------*/
//Requête pour créer la table
	$tableCreate = "CREATE TABLE IF NOT EXISTS test (";
for($i = 0; $i < count($array[1]); $i++){
	if($i > 0){
	 $tableCreate = $tableCreate.", ";
	}
	$tableCreate = $tableCreate.$array[0][$i];
	$cellType = gettype($array[1][$i]);
	if(strcmp($cellType, "NULL")  == 0 || strcmp($cellType, "string") == 0 ){
		$cellType = "VARCHAR(255)";
	}	
	$tableCreate = $tableCreate." ".$cellType;
	
}
$tableCreate = $tableCreate.");";
	echo $tableCreate;
$result = mysql_query($tableCreate);
if (!$result) {
    die('Requête invalide : ' . mysql_error());
}



//Requête d'insertion (Possibilité d'amélioration niveau pompage de ressources)
$columnName = implode(",", $array[0]);
	
for($i = 1; $i < count($array); $i++){
	$values = implode(",", $array[$i]);
	$insertQuery = 'INSERT INTO test('.$columnName.') VALUES('.$values.')';
	$result = mysql_query($insertQuery);
	if (!$result) {
    die('Requête invalide : ' . mysql_error());
}

}




/*------------------Practical Function-------------------------------*/
function changeToNoAccent($string){
	$str = strtr($string, 'ÁÀÂÄÃÅÇÉÈÊËÍÏÎÌÑÓÒÔÖÕÚÙÛÜÝ', 'AAAAAACEEEEEIIIINOOOOOUUUUY');
	$str = strtr($str, 'áàâäãåçéèêëíìîïñóòôöõúùûüýÿ', 'aaaaaaceeeeiiiinooooouuuuyy');
	$str = strtr($str,"°"," "); 
	return $str;

}

function changeToNoPoint($string){
	$str = strtr($string, '.', '_');
	return $str;
}
?>