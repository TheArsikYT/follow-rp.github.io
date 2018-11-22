<?
require '../../../engine/function.php';
require 'adminModules.php';
require 'auth.php';
if($_SESSION["apanel"] == 0) return header("Location: index.php");
session_destroy();
if($user["".$account["admin"].""] == 0) return header("Location: /");
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$site['nameproject']?> RolePlay - Поиск пользователей</title>

    <!-- CSS Libs -->
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
          <div class="col-lg-5 col-md-5 col-sm-5">
            <div class="inner-container">
              <div class="inner-title">
                <h2>Общая информация о пользователе</h2>
              </div>
              <div class="inner-body inner-border clearfix">
                <div class="player-skin pull-left"><div class='user_img' style='background:url(https://diamondrp.ru/skins/<?=$user2["".$account['skin'].""];?>.png) -15px top;height:100px;border-radius: 300px;'></div></div>
                <div class="player-info pull-left">
                  <h2><?=FixName($user2["".$account['name'].""])?></h2>
                  <h3>Уровень: <?=$user2["".$account['level'].""]?></h3>
                </div>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
					<tr>
                    <td>Уровень Администратора:</td>
                    <td><?=$user2["".$account['admin'].""]?></td>
                  </tr>
                  <tr>
                    <td>Очки опыта:</td>
                    <td><?=$user2["".$account['exp'].""]?>/<?=$user2["".$account['level'].""]*4?></td>
                  </tr>
                  <tr>
                    <td>Пол:</td>
                    <td><?Sex($user2["".$account['sex'].""])?></td>
                  </tr>
                  <tr>
                    <td>Проживание:</td>
                    <td>дом #<?=$user2["".$account['house'].""]?></td>
                  </tr>
                  <tr>
                    <td>Уровень розыска:</td>
                    <td><?=$user2["".$account['wanted'].""]?></td>
                  </tr>
                </table>
              </div>
			  <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>В банке:</td>
                    <td><?=$user2["".$account['bank'].""]?>$</td>
                  </tr>
                  <tr>
                    <td>На руках:</td>
                    <td><?=$user2["".$account['cash'].""]?>$</td>
                  </tr>
                  <tr>
                    <td>Донат:</td>
                    <td><?=$user2["".$account['house'].""]?> <sup>руб.</sup></td>
                  </tr>
                  
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Организация:</td>
                    <td><?=fracname($user2["".$account['member'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Должность:</td>
                    <td><?=rank($user2["".$account['member'].""],$user2["".$account['rank'].""]);?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="inner-container xs-margin">
              <div class="inner-title"><h2>Тех. информация</h2></div>
              <div class="inner-body inner-border inner-margin">
                <div class="table-responsive">
                  <table class="table table-hover table-admin">
                    <tr>
                      <td>Дата регистрации:</td>
                      <td><?=$user2["".$account['datareg'].""]?></td>
                    </tr>
                     <tr>
                      <td>Рег. IP:</td>
                      <td><?=$user2["".$account['ipreg'].""]?></td>
                    </tr>
                    <tr>
                      <td>Последний  IP:</td>
                      <td><?=$user2["".$account['ipvhod'].""]?></td>
                    </tr>
                    <tr>
                      <td>Последний вход:</td>
                      <td><?=$user2["".$account['datavhod'].""]?></td>
                    </tr>
                    <tr>
                      <td>Состояние аккаунта</td>
                      <td><?UserStatus($user2["".$account['ban'].""]);?></td>
                    </tr>
					<tr>
                      <td>Предупреждения</td>
                      <td><?=$user2["".$account['warn'].""]?>/3</td>
                    </tr>					
                  </table>
                </div>
              </div>
              <div class="inner-body">
                <form action="" method="post">
                    <input type="hidden" name="name" value="<?=$user2["".$account['name'].""]?>" />
                    <?if($user2["".$account['warn'].""] < 3 && $user2["".$account['online'].""] == 0) echo "<button type=\"submit\" name=\"warn\" class=\"btn btn-warning\">Выдать варн</button";?>
                      <br /><br />
                    
                      <br /><?if($user2["".$account['online'].""] == 0) echo"<button type=\"submit\" name=\"dell\" class=\"btn btn-danger\">Удалить аккаунт</button>";?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
  

    <!-- MODAL [END] -->

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