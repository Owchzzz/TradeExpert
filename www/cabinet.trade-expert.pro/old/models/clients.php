<?
include("../config.php");

if (isset($_POST['newuser'])){
$datareg=date("d.m.Y");	
$password=md5($_POST['password']);	
$data = array('login'=>$_POST['login'],'password'=>"$password",'name'=>$_POST['name'],'email'=>$_POST['email'],'ofis'=>$_POST['ofis'],'datareg'=>$datareg,'tel'=>$_POST['tel'],'email'=>$_POST['email']);
$sql  = "INSERT INTO clients SET ?u";
$db->query($sql, $data);
header("Location: /clients.html");
}
?>