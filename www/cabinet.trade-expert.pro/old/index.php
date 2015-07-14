<? 
include('config.php'); 
include('head.php'); 
include('header.php'); 
$page=$_GET['page'];

if ($page==""){
#include('head.php'); 
include("pages/index.php");
#	include('footer.php'); 
}
if (isset($_GET['page'])){	
if (!file_exists("pages/$page.php") AND $page != "" AND $edit != "" AND $edituser != ""){
	echo "<h1>ОШИБКА 404</h1><br>";
echo "Страница не найдена.";	
};
#include('head.php'); 	
include("pages/$page.php");
#include('footer.php'); 
	}
include('footer.php');
?>

