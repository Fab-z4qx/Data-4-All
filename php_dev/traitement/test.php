<?php

require_once 'PHPExcel_1.8.0_doc/Classes/PHPExcel/IOFactory.php';
 
// Chargement du fichier Excel
$objPHPExcel = PHPExcel_IOFactory::load("ExportBB.xls");
 
/**
* r�cup�ration de la premi�re feuille du fichier Excel
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
	if($cptFirstDim == 1){
	 echo "<pre>";
	 print_r($array);
	 echo "<pre>";
	 }
	$cptFirstDim++;
}

echo "</br></br></br>";

/*------------------Database creation -------------------------------*/

//Requ�te pour cr�er la table
	mysql_query("DROP TABLE test");
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
    die('Requ�te invalide : ' . mysql_error());
}



//Requ�te d'insertion (Possibilit� d'am�lioration niveau pompage de ressources)
$columnName = implode(",", $array[0]);
	
for($i = 1; $i < count($array); $i++){
	$values = implode(",", $array[$i]);
	$insertQuery = 'INSERT INTO test('.$columnName.') VALUES('.$values.')';
	$result = mysql_query($insertQuery);
	if (!$result) {
    die('Requ�te invalide : ' . mysql_error());
}

}




/*------------------Practical Function-------------------------------*/
function changeToNoAccent($string){
	$str = strtr($string, '��������������������������', 'AAAAAACEEEEEIIIINOOOOOUUUUY');
	$str = strtr($str, '���������������������������', 'aaaaaaceeeeiiiinooooouuuuyy');
	$str = strtr($str,"�"," "); 
	return $str;

}

function changeToNoPoint($string){
	$str = strtr($string, '.', '_');
	return $str;
}
?>