<?/*Обработчик Кейсов*/
require '../../engine/config.php';
require 'auth.php';
require 'config-case.php';
if(isset($_POST['game']))
{	
    if($user["".$account["online"].""] != 0)
    {
        session_start();
        $nick = $user["".$account["name"].""];
        $typecase = $_POST["casetype"];
        if($typecase == $case1['name'])
        {    

            if($user["".$account["donate"].""] >= $case1['costet'])
            { 
                $_SESSION["caseopen"] = 1;
                $predmet = rand(1,2);
                if($predmet == 1)
                {
                    $priz = "Донат";
                    $img = "/classes/img/money.png";
                    $value = rand(20,200);
                    $set = $user["".$account["donate"].""]-$case1['costet']+$value;
                    mysql_query("UPDATE ".$account['table']." SET ".$account['donate']." = '$set' WHERE ".$account['name']." ='$nick'");
                    $getpriz = "".$value." <sup>руб.</sup>";
                }
                else if($predmet == 2)
                {
                    $priz = "Игровая Валюта";
                    $img = "/classes/img/money.png";
                    $value = rand(100000,1000000);
                    $donate = $user["".$account["donate"].""]-$case1['costet'];
                    $setmoney = $user["".$account["cash"].""]+$value;
                    mysql_query("UPDATE ".$account['table']." SET ".$account['donate']." = '$donate',".$account['cash']." = '$setmoney' WHERE ".$account['name']." ='$nick'");
                    $getpriz = "".$value."<sup>$</sup>";
                }			
                die (include("win.php"));
            }
            else 
            {

                $info_case = "<h3 class=\"maintitle\">Вам нужно ".$case1['costet'].", а у вас ".$user["".$account["donate"].""]."!</h3>";

            }
        }
        if($typecase == $case2['name'])
        {    

            if($user["".$account["donate"].""] >= $case2['costet'])
            { 
                $_SESSION["caseopen"] = 1;
                $predmet = rand(1,2);
                if($predmet == 1)
                {
                    $priz = "Донат";
                    $img = "/classes/img/money.png";
                    $value = rand(20,$case2['maxpriz']);
                    $set = $user["".$account["donate"].""]-$case1['costet']+$value;
                    mysql_query("UPDATE ".$account['table']." SET ".$account['donate']." = '$set' WHERE ".$account['name']." ='$nick'");
                    $getpriz = "".$value." <sup>руб.</sup>";
                }
                else if($predmet == 2)
                {
                    $priz = "Игровая Валюта";
                    $img = "/classes/img/money.png";
                    $value = rand(50000,500000);
                    $donate = $user["".$account["donate"].""]-$case1['costet'];
                    $setmoney = $user["".$account["cash"].""]+$value;
                    mysql_query("UPDATE ".$account['table']." SET ".$account['donate']." = '$donate',".$account['cash']." = '$setmoney' WHERE ".$account['name']." ='$nick'");
                    $getpriz = "".$value."<sup>$</sup>";
                }			
                die (include("win.php"));
            }
            else 
            {
                $info_case = "<h3 class=\"maintitle\">Вам нужно ".$case2['costet'].", а у вас ".$user["".$account["donate"].""]."!</h3>";
            }
        }
        if($typecase == $case3['name'])
        {    

            if($user["".$account["donate"].""] >= $case3['costet'])
            { 
                $_SESSION["caseopen"] = 1;
                $predmet = rand(1,2);
                if($predmet == 1)
                {
                    $priz = "Донат";
                    $img = "/classes/img/money.png";
                    $value = rand(20,$case3['maxpriz']);
                    $set = $user["".$account["donate"].""]-$case1['costet']+$value;
                    mysql_query("UPDATE ".$account['table']." SET ".$account['donate']." = '$set' WHERE ".$account['name']." ='$nick'");
                    $getpriz = "".$value." <sup>руб.</sup>";
                }
                else if($predmet == 2)
                {
                    $priz = "Игровая Валюта";
                    $img = "/classes/img/money.png";
                    $value = rand(25000,250000);
                    $donate = $user["".$account["donate"].""]-$case1['costet'];
                    $setmoney = $user["".$account["cash"].""]+$value;
                    mysql_query("UPDATE ".$account['table']." SET ".$account['donate']." = '$donate',".$account['cash']." = '$setmoney' WHERE ".$account['name']." ='$nick'");
                    $getpriz = "".$value."<sup>$</sup>";
                }
                die (include("win.php"));
            }
            else 
            {
                $info_case = "<h3 class=\"maintitle\">Вам нужно ".$case3['costet'].", а у вас ".$user["".$account["donate"].""]."!</h3>";
            }
        }
    }
    else
    {
        //$info_case = "<div class=\"alert alert-danger\">
 
        $info_case = "<h3 class=\"maintitle\">Выйдите из игры!</h3>";
    }
}
	
?>