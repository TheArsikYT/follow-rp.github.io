<?
require 'auth.php';
require '../../engine/function.php';//Главный конфиг
require '../../engine/authorization.php';//Модули авторизации

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Личный кабинет | <?=$site['nameproject']?> RolePlay</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" />
	<!-- Libs CSS -->
	<?GetCSS();?>
	<script src="/classes/js/jquery.knob.js"></script>
</head>
<body>

	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<?CreateMenu($site['nameproject']);?>
	<?PageTitle("Личный кабинет","Здесь Вы можете просматривать статистику<br> Вашего аккаунта, следить за его изменениями");?>

	<section class="inner-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="inner-container">
              <div class="inner-title">
                <h2>Общая информация</h2>
              </div>
              <div class="inner-body inner-border clearfix">
                <div class="player-skin pull-left"><div class='user_img' style='background:url(https://diamondrp.ru/skins/<?=$user["".$account['skin'].""];?>.png) -15px top;height:100px;border-radius: 300px;'></div></div>
                <div class="player-info pull-left">
                  <h2><?FixName($user["".$account['name'].""])?></h2>
                  <h3>Уровень: <?=$user["".$account['level'].""];?></h3>
                </div>
                        
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Очки опыта:</td>
                    <td><?=$user["".$account['exp'].""];?>/<?=$user["".$account['level'].""]*8;?></td>
                  </tr>
                  <tr>
                    <td>Пол:</td>
                    <td><?Sex($user["".$account['sex'].""])?></td>
                  </tr>
                  <tr>
                    <td>Проживание:</td>
                    <td>дом #<?=$user["".$account['house'].""];?></td>
                  </tr>
                 
                  <tr>
                    <td>Уровень розыска:</td>
                    <td><?=$user["".$account['wanted'].""];?></td>
                  </tr>
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Организация:</td>
                    <td><?=fracname($user["".$account['member'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Должность:</td>
                    <td><?=rank($user["".$account['member'].""],$user["".$account['rank'].""]);?></td>
                  </tr>
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Основной счет:</td>
                    <td><?=$user["".$account['bank'].""];?>$</td>
                  </tr>
                  <tr>
                    <td>На руках:</td>
                    <td><?=$user["".$account['cash'].""];?>$</td>
                  </tr>
                  
                </table>
              </div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>Рублей на счету:</td>
                    <td><?=$user["".$account['donate'].""];?> руб.</td>
                  </tr>
                 
                </table><br>
                  <? if($user["".$account['admin'].""] > 0) echo "<a href=\"/page/dostup/admin/\"><center><button class=\"btn btn-d\">Панель администратора</button></center></a>";?><br>
                <a href="./?access=exit"><center><button class="btn btn-d">Выйти</button></center></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="inner-container xs-margin">
              <div class="inner-title"><h2>Лицензии</h2></div>
              <div class="inner-body inner-border clearfix">
                <table class="player-stat">
                  <tr>
                    <td>Лицензия на вождение:</td>
                    <td><?GetLic($user["".$account['vodprava'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Лицензия на полеты:</td>
                    <td><?GetLic($user["".$account['vertlic'].""]);?></td>
                  </tr>
                    <tr>
                    <td>Лицензия на вод. т/с</td>
                    <td><?GetLic($user["".$account['vodalic'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Лицензия на оружие:</td>
                    <td><?GetLic($user["".$account['gunlic'].""]);?></td>
                  </tr>
                  <tr>
                    <td>Лицензия на бизнес:</td>
                    <td><?GetLic($user["".$account['bizlic'].""]);?></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="inner-container inner-margin">
              <div class="inner-title"><h2>Владение оружием</h2></div>
              <div class="inner-body inner-border">
                <table class="player-stat">
                  <tr>
                    <td>DEAGLE:</td>
                    <td><?=$user["".$account['deagle'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>AK-47:</td>
                    <td><?=$user["".$account['ak47'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>SDPistol:</td>
                    <td><?=$user["".$account['sdpistol'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>M4:</td>
                    <td><?=$user["".$account['m4'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>ShotGun:</td>
                    <td><?=$user["".$account['shotgun'].""]?>/100%</td>
                  </tr>
                  <tr>
                    <td>MP5:</td>
                    <td><?=$user["".$account['mp5'].""]?>/100%</td>
                  </tr>
                </table>
              </div>
            </div>
			<div class="inner-container inner-margin">
              <div class="inner-title"><h2>Тех. информация</h2></div>
              <div class="inner-body inner-border">
                <table class="player-stat">
					<tr>
                    <td>Регистрация:</td>
                    <td><?=$user["".$account['datareg'].""]?></td>
                  </tr>
				  <tr>
                    <td>IP регистрации:</td>
                    <td><?=$user["".$account['ipreg'].""]?></td>
                  </tr>
				  <tr>
                    <td>IPv4 Регистрации:</td>
                    <td><?=$user["".$account['subnetreg'].""]?></td>
                  </tr>
				  <tr>
                    <td>IP входа:</td>
                    <td><?=$user["".$account['ipvhod'].""]?></td>
                  </tr>
                  <tr>
                    <td>Последний вход:</td>
                    <td><?=$user["".$account['datavhod'].""]?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </section>
<?CreateFooter($site['nameproject'],'white');?>
	<!--[if lt IE 9]>
		<script src="/classes/libs/html5shiv/es5-shim.min.js"></script>
		<script src="/classes/libs/html5shiv/html5shiv.min.js"></script>
		<script src="/classes/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="/classes/libs/respond/respond.min.js"></script>
	<![endif]-->
	
	<!-- Libs JS -->
	<script src="/classes/libs/jquery/jquery-2.1.3.min.js"></script>
	<script src="/classes/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="/classes/libs/mixitup/mixitup.min.js"></script>
	<script src="/classes/libs/scroll2id/PageScroll2id.min.js"></script>
	<script src="/classes/libs/animate/animate-css.js"></script>
	<script src="/classes/js/common.js"></script>
	<script src="/classes/js/wow.min.js"></script>

</body>
</html>