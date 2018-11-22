<?
require '../../../engine/function.php';
require 'adminModules.php';
require 'auth.php';
if($user["".$account["admin"].""] == 0) return header("Location: /");
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$site['nameproject']?> RolePlay - админ-панель</title>
      <?AddCSS();?>
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
              <div class="inner-title"><h2>Статистика сервера <?=$site['nameproject']?> Roleplay</h2></div>
              <div class="inner-body inner-border clearfix">
                <div class="server-stats">
                  <div class="col-lg-6">
                    <p>Игроков онлайн: <?CountTable("SELECT * FROM `".$account['table']."` WHERE `".$account['online']."` > '0'");?>/100</p>
                    <p>Лидеров онлайн: <?CountTable("SELECT * FROM `".$account['table']."` WHERE `".$account['online']."` > '0' AND `".$account['leader']."` > '0'");?>/<?CountTable("SELECT * FROM `".$account['table']."` WHERE `".$account['leader']."` > '0'");?></p>
                    <p>Администраторов онлайн: <?CountTable("SELECT * FROM `".$account['table']."` WHERE `".$account['online']."` > '0' AND `".$account['admin']."` > '0'");?>/<?CountTable("SELECT * FROM `".$account['table']."` WHERE `".$account['admin']."` > '0'");?></p>
                  </div>
                  <div class="col-lg-6">
                    <p>Всего аккаунтов: <?CountTable("SELECT * FROM `".$account['table']."");?></p>
                    <p>Из них заблокировано: <?CountTable("SELECT * FROM `".$account['table']."` WHERE `".$account['ban']."` > '0'");?></p>
                  </div>
                </div>
              </div>
              <div class="inner-body clearfix">
                <div class="server-stats">
                  <div class="col-lg-6">
                    <p>Новостных постов: <?CountTable("SELECT * FROM `news`");?></p>
                  </div>
                </div>
              </div>
            </div>
            <br>
		  <div class="inner-container">
              <div class="inner-title"><h2>Поиск аккаунта</h2></div>
              <div class="inner-body clearfix">
                <form action="s-profile.php" method="POST" class="search-acc">
                  <input type="text" class="main-input-3" name="nick" placeholder="Введите ник или номер аккаунта">
                  <button type="submit" name="search" class="button btn-send button-light btn-shadow">Поиск</button>
                </form>
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