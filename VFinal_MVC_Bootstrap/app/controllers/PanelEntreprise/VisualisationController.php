<?php
  
require_once (_CORE_.'jpgraph/src/jpgraph.php');
require_once (_CORE_.'jpgraph/src/jpgraph_bar.php');
require_once (_CORE_.'jpgraph/src/jpgraph_pie.php');
require_once (_CORE_.'jpgraph/src/jpgraph_pie3d.php');
require_once (_MODEL_.'DataFile.php');

/* Controller de la page de visualisation d'une controller */
class VisualisationController extends Controller 
{
   public function display() 
   {
   	 $this->getFileName();
   	 $this->smarty->display(_TPL_ENT_.'visualisation.tpl');
   }

   public function getFileName()
	{
		$dataFile = new DataFile();
		$filesInfo = $dataFile->getFileInfo();
		$this->smarty->assign('fileinfo', $filesInfo);
		$this->smarty->assign('dbname', 'Tables_in__'.$_SESSION['info']['id_entreprise']);
	}

   public function start($id_file)
   {
   	// ************************************************* //
   	// ***** IL FAUT CONTROLER LA VALEUR de $ID_FILE *** //
   	// ************************************************* //
   		$dataFile = new DataFile($_SESSION['info']['id_entreprise']);
		$this->smarty->assign('nom_fichier',$dataFile->idToName($id_file));
		$this->pieGraphe($id_file);
		$this->plotGraphe($id_file);
		$this->smarty->display(_TPL_ENT_.'visualisation.tpl');
   }

   public function getRawFile($id_file)
   {
   		$target = _FILES_.$_SESSION['info']['id_entreprise'].'/';
   		$temp =  _FILES_.'tmp/';
   		$nom = $id_file.".xls";
   		$finfo = finfo_open(FILEINFO_MIME_TYPE);
   		$info = finfo_file($finfo, $temp.$nom);
   		copy($target.$nom, $temp.$nom);

	   	header('Content-Type: '.$info);
	   	header('Content-Disposition: attachment; filename=' . basename($temp.$nom));
	   	header("Pragma: no-cache");
		header("Expires: 0");
	   	header('Content-Transfer-Encoding: binary');
	   	header('Expires: 0');
	   	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	   	header('Pragma: public');
	    print_r($temp.$nom); 
	    flush();
	    readfile($temp.$nom);
	    exit();
   }

   public function renameFile($id_file)
   {
   		//TO DO 
	  /* 	SELECT table_name
	FROM information_schema.tables
	WHERE table_name = 'exportbb'*/
   }


   public function removeFile($id_file)
   {
   		//TO DO 
   }
   
   private function pieGraphe($id_file)
   {
	   	$dataFile = new DataFile();
		$data = $dataFile->getTypeAlea($id_file);
		$name = array();
		$value = array();
		foreach ($data as $dat) {
			if($dat['nb'] != 0){
				array_push($name, $dat['type_alea']);
				array_push($value, $dat['nb']);
			}
		}
		
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
		$this->smarty->assign('graph', '<img src="graph.jpg">' );
   }

   private function plotGraphe($id_file)
   {
      	$dataFile = new DataFile();
		$data = $dataFile->getPiece($id_file);
		$sql = 'SELECT Piece,sum(Nb__Pieces_finies) as nbPi, sum(Heures) as heure from `'.$id_file.'`  group by `Piece`order by heure';

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
}

?>