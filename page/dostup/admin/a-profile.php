<?
require '../../../engine/function.php';
require 'adminModules.php';
require 'auth.php';
if($_SESSION["ainfo"] == 0) return header("Location: index.php");
session_destroy();
if($user["".$account["admin"].""] == 0) return header("Location: /");
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$site['nameproject']?> RolePlay - Настройки Администратора</title>

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
                <h2>Общая информация о администраторе</h2>
              </div>
              <div class="inner-body inner-border clearfix">
                <div class="player-skin pull-left"><div class='user_img' style='background:url(https://diamondrp.ru/skins/<?=$user2["".$account['skin'].""];?>.png) -15px top;height:100px;border-radius: 300px;'></div></div>
                <div class="player-info pull-left">
                  <h2><?=FixName($user2["".$account['name'].""])?></h2>
                  <h3>Уровень Администрирования: <?=$user2["".$account['admin'].""]?></h3>
                </div>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Дата Назначения:</td>
                    <td><?=$user2["".$account['dataadmin'].""]?></td>
                  </tr>
                  <tr>
                    <td>Назначил:</td>
                    <td><?=$user2["".$account['getadmin'].""]?></td>
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
                      <td>Текущий IP:</td>
                      <td><?echo $_SERVER["REMOTE_ADDR"];?></td>
                    </tr>
                    <tr>
                      <td>Последний вход:</td>
                      <td><?=$user2["".$account['datavhod'].""]?></td>
                    </tr>					
                  </table>
                </div>
              </div>
              <div class="inner-body">
                <br /><?if($user2["".$account['online'].""] == 0) echo"<a data-toggle=\"modal\" href=\"#modal_level\"><button class=\"btn btn-success\">Изменить уровень</button></a>";?>
                  <form action="" method="POST" >
                      <input type="hidden" value="<?=$user2["".$account['name'].""]?>" name="nick"/>
                  <br /><?if($user2["".$account['online'].""] == 0) echo"<button type=\"submit\" name=\"admdell\"class=\"btn btn-danger\">Снять</button>";?>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- MODAL [START] -->
    <div id="modal_level" class="modal animated fadeIn">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <h2>Изменение уровня</h2>
          </div>
          <div class="modal-cnt clearfix">
            <form action="" method="POST" class="warn-form">
                <input type="hidden" value="<?=$user2["".$account['name'].""]?>" name="nick"/>
              <input type="text" name="level" class="main-input-3" placeholder="Введите уровень">
              <button type="submit" name="leveledit" class="btn btn-success">Изменить</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="modal_ban" class="modal animated fadeIn">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <h2>Блокировка аккаунта</h2>
          </div>
          <div class="modal-cnt clearfix">
            <form action="" method="" class="ban-form">
              <input type="text" class="main-input-3" placeholder="Причина бана">
              <input type="text" class="main-input-3" placeholder="Срок (не более 180 дней)">
              <button class="btn btn-warning">Заблокировать аккаунт</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div id="modal_del" class="modal animated fadeIn">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
            <h2>Удаление аккаунта</h2>
          </div>
          <div class="modal-cnt clearfix">
            <form action="" method="" class="del-form">
              <input type="text" class="main-input-3" placeholder="Причина удаления">
              <button class="btn btn-warning">Удалить аккаунт</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  

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