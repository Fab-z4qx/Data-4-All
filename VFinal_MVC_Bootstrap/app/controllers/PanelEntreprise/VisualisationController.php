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
   	 $this->getFileName();
   	 $this->smarty->display(_TPL_ENT_.'visualisation.tpl');
   }

   public function getFileName()
	{
		$dataFile = new DataFile();
		$filesNames = $dataFile->getFileName();
		/*echo '<pre>';
		print_r($filesNames);
		echo '</pre>'; */
		$this->smarty->assign('filename', $filesNames);
		$this->smarty->assign('dbname', 'Tables_in__'.$_SESSION['info']['id_entreprise']);
	}

   public function start($id_file)
   {
   	// ************************************************* //
   	// ********* IL FAUT CONTROLER LA VALEUR *********** //
   	// ************************************************* //

   		//echo $id_file;
   		//$id_file = 'exportbb';
		$this->smarty->assign('nom_fichier',$id_file);
		$this->pieGraphe($id_file);
		$this->plotGraphe($id_file);
		$this->smarty->display(_TPL_ENT_.'visualisation.tpl');
   }
   
   private function pieGraphe($id_file){

	   	$dataFile = new DataFile();
		$data = $dataFile->getTypeAlea($id_file);

		//$res = mysql_query($query);
		$name = array();
		$value = array();

		/*echo '<pre>';
		print_r($data);
		echo '</pre>';*/
		foreach ($data as $dat) {
			if($dat['nb'] != 0){
				array_push($name, $dat['type_alea']);
				array_push($value, $dat['nb']);
			}
		}
		//print_r($name);
		//print_r($value);
		/*
		while ($row = mysql_fetch_assoc($res)) 
		{
		    array_push($name, $row['type_alea']);
			array_push($value, $row['nb']);
		}*/
		//print_r($name);
		//print_r($value);
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
		$graph->SetMarginColor("#f5f5f5");
		@unlink("graph.jpg"); 
		$graph->Stroke("graph.jpg");
		//$this->getFileName();
		$this->smarty->assign('graph', '<img src="graph.jpg">' );
   }

   private function plotGraphe($id_file){
      	$dataFile = new DataFile();
		$data = $dataFile->getPiece($id_file);
		$sql = 'SELECT Piece,sum(Nb__Pieces_finies) as nbPi, sum(Heures) as heure from '.$id_file.'  group by `Piece`order by heure';
			
		//$data1y=array();
		$data2y=array();
		$data3y=array();
		foreach ($data as $dat) {
				
				array_push($data2y, $dat['nbPi']);
				array_push($data3y, $dat['heure']);

		}
		

		// Create the graph. These two calls are always required
		$graph = new Graph(500,500,'auto');
		$graph->SetScale("textlin");

		$theme_class=new UniversalTheme;
		$graph->SetTheme($theme_class);

		$graph->yaxis->SetTickPositions($data3y);
		$graph->SetBox(false);

		$graph->ygrid->SetFill(false);

		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);

		// Create the bar plots
		//$b1plot = new BarPlot($data1y);
		$b3plot = new BarPlot($data2y);

		// Create the grouped bar plot
		$gbplot = new GroupBarPlot(array($b3plot));
		// ...and add it to the graPH
		$graph->SetColor("#f5f5f5");
		$graph->Add($gbplot);

		$graph->xaxis->HideLabels();
		$graph->yaxis->HideLabels();
		$b3plot->SetFillColor("#1111cc");

		$graph->title->Set("Bar Plots");
				@unlink("graphPlot.jpg"); 
				$graph->Stroke("graphPlot.jpg");
				$this->smarty->assign('graphPlot', '<img src="graphPlot.jpg">' );
		}

		public function jsTest($id_file)
		{
			$dataFile = new DataFile();
			$data = $dataFile->getTypeAlea($id_file);

			$value = array();
			array_push($value, array('value'));
			foreach ($data as $dat) 
			{
				if($dat['nb'] != 0)
				{
					//array_push($name, $dat['type_alea']);
					$test = array($dat['nb']);
					array_push($value, $test);
				}
			}

			$fp = fopen('file.csv', 'w');
			//print_r($value);
			//fputcsv($fp, $value);
			foreach ($value as $fields) {
			    fputcsv($fp, $fields);
			}

			fclose($fp);
		}

}

?>