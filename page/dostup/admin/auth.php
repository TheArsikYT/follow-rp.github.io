<?
require_once '../../../engine/config.php';
//ѕровер€ем авторизацию,если все хорошо,пускаем
if(empty($_COOKIE["pass"]) || $_COOKIE["pass"]==""){
	header("Location: ../../userpanel/login.php");
}
else{
	$per = explode(":", $_COOKIE["pass"]);
	$pass_md5 = $per[0];
	$login = $per[1];
$search = mysql_query("SELECT * From ".$account['table']." WHERE ".$account['name']."='$login'");
$user = mysql_fetch_array($search);
	if($pass_md5 != md5(md5($user["".$account['pass'].""]))){
		setcookie("pass", "", 0, "/");
		header("Location: ../../userpanel/login.php");
	}
}
//?>