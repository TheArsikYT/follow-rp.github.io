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
    <title><?=$site['nameproject']?> RolePlay - Добавление новости</title>

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
              <div class="inner-title"><h2>Удаление Новости</h2></div>
              <div class="inner-body clearfix">
                <form action="" method="POST" class="search-acc">
					<?=$msg_news?>
                  <br><input type="text" class="main-input-3" name="newsid" placeholder="Номер новости"><br>
                  <button type="submit" name="dellnews" class="button btn-send button-light btn-shadow">Удалить</button>
                </form>
              </div>
            </div>
			<br>
            <div class="inner-container">
              <div class="inner-title"><h2>Добавление Новости</h2></div>
              <div class="inner-body clearfix">
                <form action="" method="POST" class="search-acc">
					<?=$msg_create?>
                  <br><input type="text" class="main-input-3" name="title" required
 placeholder="Название Новости"><br>
                    <input type="hidden" class="main-input-3" name="dev" value="<?=$user["".$account["name"].""]?>">
                    <br><input type="text" class="main-input-3" name="img" required
 placeholder="Ссылка на картинку"><br>
                    <br><textarea name="text" rows="10" cols="90" maxlength="300" placeholder="Описание новости.... Не больше 300 символов!" required
></textarea>
                    <br>
                  <button type="submit" name="addnews" class="button btn-send button-light btn-shadow">Добавить</button>
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