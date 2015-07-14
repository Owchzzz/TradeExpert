<?
function activemenu($name){
	$pagecur=$_SERVER["REQUEST_URI"];
	if ($name=="$pagecur"){
		echo " class=\"active\"";
	};
}

function giveinfobalance(){
$dblocation = "localhost";
$dbuser = "bitcoin";
$dbpasswd = "libertos";
$dbname="bitcoin_db";
$db = new SafeMysql(array('user' => $dbuser, 'pass' => $dbpasswd,'db' => $dbname, 'charset' => 'utf8'));

$kon="1";
$timestamplast=strtotime("2013-06-04");
$today=date("Y-m-d",$timestamplast);	
$todaynow=date("Y-m-d");
	for (;$kon != "0" ;){
	$timestamplast=strtotime("$today");
	$today=date("Y-m-d",$timestamplast+(24*60*60));	
	echo " ,['".$today."',  ";
$result = $db->query("select * from btce_balance where date like \"%$today%\"");
$maximum=0;
while ($row = $db->fetch($result)){ 
	if ($row['balance'] > $maximum){
	$maximum=$row['balance'];
	}
}
		echo "$maximum";
		echo ",";

$result = $db->query("select * from mtgox_balance where data like \"%$today%\"");
$maximum2=0;
while ($row = $db->fetch($result)){ 
	if ($row['balance'] > $maximum2){
	$maximum2=$row['balance'];
	}
}		
		echo "$maximum2";
		echo ", ";
		
		$allmax=$maximum2+$maximum;
		echo "$allmax";
		
		echo "] ";
		if ($today == $todaynow){
		$kon="0";
		}
	}	
	
}
?>