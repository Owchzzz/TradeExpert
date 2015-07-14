<?
include("../config.php");

if (isset($_POST['login'])){
$login=$_POST['login'];
$pass=$_POST['password'];

$pass2=md5($pass);
$iduser = $db->getRow("SELECT * FROM users WHERE login=\"$login\";"); 
$vivod = $db->getRow("select count(id) from users WHERE login=\"$login\" AND password=\"$pass2\""); 
$sql=$vivod['count(id)'];
	
if ($sql == 1){
$ida=$iduser['id'];
$test=$iduser['id'];
$_SESSION['loginid']="$test";
header("Location: /");
}else{
$_SESSION['errorlogin']="1";
	header("Location: /fault.html");
}
}
?>