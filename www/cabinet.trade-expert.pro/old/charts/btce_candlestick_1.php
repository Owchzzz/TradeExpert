<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        var data = google.visualization.arrayToDataTable([
         
		
			<?
ini_set("session.gc_maxlifetime", 3600);
include_once('../safemysql.class.php');
$dblocation = "localhost";
$dbuser = "bitcoin";
$dbpasswd = "libertos";
$dbname="bitcoin_db";
$db = new SafeMysql(array('user' => $dbuser, 'pass' => $dbpasswd,'db' => $dbname, 'charset' => 'utf8'));
$stack=array();

$b=0;
$ba=30;
for ($i=0; $i < 60; $i++){
$min=10000;
$max=0;
$result = $db->query("select * from btce_ticker order by id desc limit $b,30;");
while ($row = $db->fetch($result)){
	$where=$row['date'];
	if ($row['current'] < $min){
	$min=$row['current'];
	}
	if ($row['current'] > $max){
	$max=$row['current'];
	}
}
$close=$db->getRow("select * from btce_ticker order by id desc limit $b,1;");
$close=$close['current'];
$open=$db->getRow("select * from btce_ticker order by id desc limit $ba,1;");
$open=$open['current'];
$inarray="['".$where."', $min, $open, $close, $max],";
#echo $inarray;
array_push($stack, $inarray);	
$b=$b+30;
$ba=$ba+30;	
}

for ($i=59; $i > -1; $i--){
echo $stack[$i];
} 
?>
			
                ], true);
var options = {'title':'BTC-E Chart of Day',
			   'legend': 'none',
			       'width':1100,
                     'height':800};

        var chart = new google.visualization.CandlestickChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body>
	  <div id="timeline"></div>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>