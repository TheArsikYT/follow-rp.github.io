<?
require '../../../engine/function.php';
require 'adminModules.php';
require 'auth.php';
if($user["".$account["admin"].""] == 0) return header("Location: /");?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$site['nameproject']?> RolePlay - Администрация проекта</title>

    <!-- CSS Libs -->
    <link rel="stylesheet" href="../libs/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/animate/animate.min.css">
    <link rel="stylesheet" href="../libs/fa/css/font-awesome.min.css">

    <!-- CSS Default -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/media.css">

  </head>
  <body>
    
    <!-- HEADER [START] -->
    <?CreateAMenu();?>
    <!-- HEADER [END] -->

    <section class="inner-section">
      <div class="container">
        <div class="row">
          <?CreateANav();?>
          <div class="col-lg-9 col-md-9 col-sm-9"> 
			<div class="inner-container">
              <div class="inner-title"><h2>Добавление администратора </h2></div>
              <div class="inner-body clearfix">
                <form action="" method="POST" class="search-acc">
					<?=$msg?>
                  <br><input type="text" class="main-input-3" name="nick" placeholder="Введите ник"><br>
				  
				  <br><input type="text" class="main-input-3" name="level" placeholder="Уровень Администратора">
                  <button type="submit" name="insert-admin" class="button btn-send button-light btn-shadow">Добавить</button>
                </form>
              </div>
            </div>
			<br>
            <div class="inner-container inner-margin">
              <div class="inner-title"><h2>Список Администрации</h2></div>
              <div class="inner-body">
                <div class="table-responsive">
					<?
					$search = mysql_query("SELECT * FROM `".$account['table']."` WHERE  `".$account['admin']."` > '0'");
	if(mysql_num_rows($search)>0)
	{
		echo "<table class=\"table table-hover table-admin\">
                    <thead>
                      <th>Номер Акканута</th>
                      <th>Ник</th>
                      <th>Уровень</th>
                      <th>Действия</th>
                    </thead>
                   
                  ";
		$admin = mysql_fetch_array($search);
		do{
		echo "<form action=\"a-profile.php\" method=\"POST\">
			<input name=\"admin\" type=\"hidden\" value=\"".$admin["".$account['name'].""]."\">
			<tr>
                      <td>#".$admin["".$account['id'].""]."</td>
                      <td>".$admin["".$account['name'].""]."</td>
                      <td>".$admin["".$account['admin'].""]."</td>
						<td><button type=\"submit\" style=\"background: none;border:none;\" name=\"edit\">Информация</button></td>
                    </tr></form>";
		}while($admin = mysql_fetch_array($search));
		
		
		echo "</table>";		
	}
	else echo "<center><h3>Администрации нет</h3></center><br>";
	mysql_close();?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- JS Files	-->
    <script src="../libs/jquery/jquery-3.1.1.min.js"></script>
    <script src="../libs/bootstrap/bootstrap.min.js"></script>
    <script src="../libs/animate/animate.js"></script>
    <script src="../libs/parallax/parallax.min.js"></script>
    <script src="../libs/scroll2id/scroll2id.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- LS Default -->
    <script src="../js/common.js"></script>
    
  </body>
</html>