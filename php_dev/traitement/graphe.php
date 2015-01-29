<?php 
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');
require_once ('jpgraph/src/jpgraph_pie.php');
require_once ('jpgraph/src/jpgraph_pie3d.php');


$link = mysql_connect("localhost", "root", "");
mysql_select_db("teste");
for($i = 0; $i < 2 ; $i++){
$query = "SELECT type_alea, count(*) as nb from test group by type_alea";
$res = mysql_query($query);
$name = array();
$value = array();
while ($row = mysql_fetch_assoc($res)) {
    array_push($name, $row['type_alea']);
	array_push($value, $row['nb']);
}
print_r($name);
print_r($value);
$datay=array(62,105,85,50);


// Create the graph. These two calls are always required
/*$graph = new Graph(500,300,'auto');
$graph->SetScale("textlin");

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// set major and minor tick positions manually
//$graph->yaxis->SetTickPositions(array(0,30,60,90,120,150), array(15,45,75,105,135));
$graph->SetBox(false);

//$graph->ygrid->SetColor('black');
$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels($name);
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
//$graph->setColor("purple");
// Create the bar plots
$dataNumber = count($name);
for($i = 0; $i < $dataNumber; $i++){
$b1plot = new BarPlot($value);
$b1plot->SetLegend($name[$i]);
$b1plot->SetColor("white");
$b1plot->SetFillGradient("#4B0082","red",GRAD_LEFT_REFLECTION);
$b1plot->SetWidth(45);
// ...and add it to the graPH
$graph->Add($b1plot);
}
*/

$graph = new PieGraph(600,300,'auto');
$graph->SetScale("textlin");

$p1 = new PiePlot3D($value);
$p1->setLegends($name);
$p1->SetStartAngle(0);
$p1->SetSize(140);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$graph->legend->SetLayout(LEGEND_HOR);
$graph->legend->SetColumns(2);
$graph->legend->SetFrameWeight(5);
$graph->title->Set("Bar Gradient(Left reflection)");

@unlink("graph.jpg"); 

$graph->Stroke("graph.jpg");
echo '<img src="graph.jpg">';
exit;
}
?>