<? include('config.php'); 
/* Обработчик активации */
$login=$_GET['login'];
$code=$_GET['code'];
$login2=$login."123456";
$login2=md5($login2);
if ($login2=="$code"){
echo "Аккаунт успешно активирован!";
$id = $db->getRow("select * from users WHERE login=\"$login\" order by id DESC limit 1;");
$id=$id['id'];
$data = array('status'=>'1');
$sql  = "UPDATE users SET ?u WHERE id=\"$id\"";
$db->query($sql, $data);
$_SESSION['activation']="1";	
}else{
echo "Ошибка активации!";
	$_SESSION['activation']="0";
}
	header("Location: activation.html");
?>