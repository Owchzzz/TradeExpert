<?
include("../config.php");

if (isset($_POST['jsoncreateoffice'])){
$data = json_decode($_POST['jsoncreateoffice']);
$officename=$data->officename;
$city=$data->city;
$login=$data->login;
$password=$data->password;
if ($officename == "" OR $city == "" OR $login == "" OR $password == ""){
echo "Не все поля заполнены!";
}
}


?>