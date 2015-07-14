<?
error_reporting(E_ALL);
session_start();
ini_set("session.gc_maxlifetime", 3600);
include_once('safemysql.class.php');
$dblocation = "localhost";
$dbuser = "ttcabinet";
$dbpasswd = "ZycfXQt2";
$dbname="ttcabinet_db";
$db = new SafeMysql(array('user' => $dbuser, 'pass' => $dbpasswd,'db' => $dbname, 'charset' => 'utf8'));

include('controller.php');
$loginid=$_SESSION['loginid'];
?>
