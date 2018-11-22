<?/*Функция авторизации*/
require 'config.php';
if(isset($_POST['login']))
{	
	$name = $_POST['nick'];
	$password = $_POST['password'];
	$search = mysql_query("SELECT * FROM `".$account['table']."` WHERE `".$account['name']."`='$name'");
	if(mysql_num_rows($search)!=0)
	{
		$user = mysql_fetch_array($search);
		if($user["".$account['pass'].""]==$password)
		{
			setcookie("pass", md5(md5($password)).":".$name, time() + 60*100, "/");
			header("Location: ./");
		}
		else
		{
			//$info_pass="<div class=\"alert alert-danger\">
  //<strong>Ошибка!</strong> Пароль не правильный.
//</div>";
            $info_pass="<div class=\"alert alert-danger\">
  <strong>Ошибка!</strong> Пароль не правильный.
</div>";
		}

	}
	else
	{
		$info_user = "<div class=\"alert alert-danger\">
  <strong>Ошибка!</strong> Игрок не найден.
</div>";
	}
}
if($_GET["access"]=="exit"){
	setcookie("pass", "", "0", "/");
	header("Location: ./login.php");
}	
?>