<?php
  
require_once (_CORE_.'jpgraph/src/jpgraph.php');
require_once (_CORE_.'jpgraph/src/jpgraph_bar.php');
require_once (_CORE_.'jpgraph/src/jpgraph_pie.php');
require_once (_CORE_.'jpgraph/src/jpgraph_pie3d.php');
require_once (_MODEL_.'DataFile.php');

class VisualisationController extends Controller 
{
   public function display() 
   {
   	 //$pdo = Database::getInstance();
   	 //echo 'fukckk';
   	 $this->smarty->display(_TPL_ENT_.'visualisation.tpl');
   }

   public function start($id_file)
   {
   	// ************************************************* //
   	// ********* IL FAUT CONTROLER LA VALEUR *********** //
   	// ************************************************* //

   		//echo $id_file;
   		//$id_file = 'exportbb';
   		$dataFile = new DataFile();

		$data = $dataFile->getTypeAlea($id_file);

		//$res = mysql_query($query);
		$name = array();
		$value = array();

		/*echo '<pre>';
		print_r($data);
		echo '</pre>';*/
		foreach ($data as $dat) {
			array_push($name, $dat['type_alea']);
			array_push($value, $dat['nb']);
		}
		/*
		while ($row = mysql_fetch_assoc($res)) 
		{
		    array_push($name, $row['type_alea']);
			array_push($value, $row['nb']);
		}*/
		//print_r($name);
		//print_r($value);
		$datay=array(62,105,85,50);

		$graph = new PieGraph(800,500,'auto');
		$graph->SetScale("textlin");

		$p1 = new PiePlot3D($value);
		$p1->setLegends($name);
		$p1->SetStartAngle(0);
		$p1->SetSize(200);
		$graph->Add($p1);

		$p1->ShowBorder();
		$p1->SetColor('black');
		$graph->legend->SetLayout(LEGEND_HOR);
		$graph->legend->SetColumns(3);
		$graph->legend->SetFrameWeight(2);
		$graph->title->Set("Type d'evenement");

		@unlink("graph.jpg"); 
		$graph->Stroke("graph.jpg");
		$this->smarty->assign('graph', '<img src="graph.jpg">' );
		$this->smarty->display(_TPL_ENT_.'visualisation.tpl');
   }
}

?>
