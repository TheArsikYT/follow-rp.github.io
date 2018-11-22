<?
require '../../../engine/config.php';
if(isset($_POST['search']))
{
	session_start();
	$nick = $_POST['nick'];
	$query = mysql_query("SELECT * FROM `".$account['table']."` WHERE `".$account['name']."`='$nick'");
	if(mysql_num_rows($query) != 0)
	{
		$_SESSION["apanel"] = 1;
		$user2 = mysql_fetch_array($query);
	}
}
if(isset($_POST['insert-admin'])){
	$nick = $_POST['nick'];
	$level = $_POST['level'];
	$query = mysql_query("SELECT * FROM `".$account['table']."` WHERE `".$account['name']."`='$nick'");
	if(!empty($nick) && !empty($level))
	{	
		if(mysql_num_rows($query) != 0)
		{
			$user2 = mysql_fetch_array($query);
			if($user2["".$account['admin'].""] == 0)
			{
			
				mysql_query("UPDATE ".$account['table']." SET ".$account['admin']." = '$level' WHERE ".$account['name']." ='$nick'");
				$msg = "".$nick." был назначен администратором ".$nameadmin."!<br>";
			}
			else $msg = "".$nick." уже является администратором!<br>";
		}
		else $msg = "Пользователь ".$nick." не найден!<br>";
	}
	else $msg = "Заполните все поля!<br>";	
}
if(isset($_POST['edit']))
{
	session_start();
	$nick = $_POST['admin'];
	$query = mysql_query("SELECT * FROM `".$account['table']."` WHERE `".$account['name']."`='$nick'");
	if(mysql_num_rows($query) != 0)
	{
		$_SESSION["ainfo"] = 1;
		$user2 = mysql_fetch_array($query);
	}
}
if(isset($_POST["warn"])){
    $nick = $_POST["name"];
    $query = mysql_query("SELECT * FROM `".$account["table"]."` WHERE `".$account["name"]."` = '$nick'");
    if(mysql_num_rows($query) > 0)
    {
        $row = mysql_fetch_array($query);
        if($row["".$account["online"].""] == 0)
        {
            $warn = $row["".$account["warn"].""];
            $warn++;
            mysql_query("UPDATE ".$account['table']." SET ".$account['warn']."='$warn' WHERE ".$account['name']." = '$nick'");
        }
        else
        {
            $info = "Игрок Находится в игре!";
        }
    }
   
}
if(isset($_POST["dell"])){
    $nick = $_POST["name"];
    $query = mysql_query("SELECT * FROM `".$account["table"]."` WHERE `".$account["name"]."` = '$nick'");
    if(mysql_num_rows($query) > 0)
    {
        $row = mysql_fetch_array($query);
        if($row["".$account["online"].""] == 0)
        {
            mysql_query("DELETE FROM ".$account['table']." WHERE ".$account['name']." = '$nick'");
        }
        else
        {
            $info = "Игрок Находится в игре!";
        }
    }
   
}
if(isset($_POST["leveledit"])){
    $nick = $_POST["nick"];
    $level = $_POST["level"];
    $query = mysql_query("SELECT * FROM `".$account["table"]."` WHERE `".$account["name"]."` = '$nick'");
    if(mysql_num_rows($query) > 0)
    {
        $row = mysql_fetch_array($query);
        if($row["".$account["online"].""] == 0)
        {
            mysql_query("UPDATE ".$account['table']." SET ".$account['admin']."='$level' WHERE ".$account['name']." = '$nick'");
        }
        else
        {
            $info = "Игрок Находится в игре!";
        }
    }
   
}

if(isset($_POST["admdell"])){
    $nick = $_POST["nick"];
    $query = mysql_query("SELECT * FROM `".$account["table"]."` WHERE `".$account["name"]."` = '$nick'");
    if(mysql_num_rows($query) > 0)
    {
        $row = mysql_fetch_array($query);
        if($row["".$account["online"].""] == 0)
        {
            mysql_query("UPDATE ".$account['table']." SET ".$account['admin']."='0' WHERE ".$account['name']." = '$nick'");
        }
        else
        {
            $info = "Игрок Находится в игре!";
        }
    }
   
}
if(isset($_POST["dellnews"])){
    $idnews = $_POST["newsid"];
    $query = mysql_query("SELECT * FROM `news` WHERE `id` = '$idnews'");
    if(mysql_num_rows($query) > 0)
    {
        mysql_query("DELETE FROM `news` WHERE `id` = '$idnews'");
        $msg_news = "Новость #".$idnews." успешно удалена!<br>";
    }
    else $msg_news = "Новость #".$idnews." не найдена!<br>";
}
if(isset($_POST["addnews"])){
    $title = $_POST["title"];
    $img = $_POST["img"];
    $text = $_POST["text"];
    $dev = $_POST["dev"];
    $date = date("d.m.Y / H:i");
    mysql_query("INSERT INTO `news` (`title`,`img`,`Text`,`dev`,`Date`) VALUES ('$title','$img','$text','$dev','$date')");
    $msg_create = "'".$title."' добавлено в список новостей!";
}
function AddCSS(){
    echo "
    <link rel=\"stylesheet\" href=\"../libs/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../libs/animate/animate.min.css\">
    <link rel=\"stylesheet\" href=\"../libs/fa/css/font-awesome.min.css\">

    <!-- CSS Default -->
    <link rel=\"stylesheet\" href=\"../css/main.css\">
    <link rel=\"stylesheet\" href=\"../css/fonts.css\">
    <link rel=\"stylesheet\" href=\"../css/media.css\">
    ";
}
?>
