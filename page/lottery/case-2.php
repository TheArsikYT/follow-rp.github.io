<?
require 'auth.php';
require '../../engine/function.php';
require 'lottery.php';
if(!empty($_SESSION["refresh"]))
{
    header("Location: case-2.php");
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?=$case2['name']?> | <?=$site['nameproject']?> RolePlay</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" />
	<!-- Libs CSS -->
	<?GetCSS();?>
</head>
<body>
	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>

	<?CreateMenu($site['nameproject']);?>
	<?PageTitle("Открытие Кейсов","Здесь Вы можете попытать свою удачу<br>в кейсах с различными призами!");?>

	<section id="start" class="start">

		<header class="start__header">

			<h1 class="maintitle">ИСПЫТАЙ УДАЧУ!</h1>

		</header>
		
		<div class="start__downloads">

			
            <?=$info_case?><br>
			<div class="start__downloads--first">

				<img src="/classes/img/case1.png" alt="">

				

				<header>
					
					<span class="download">РУЛЕТКА</span>
					<h3><?=$case2['name']?></h3>

				</header>
				
				<p>Случайный предмет на сумму до <?=$case2['maxpriz']?> рублей</p>

				<footer>
				<form action="" method="POST">
					<button type="submit" style="background: none;border:none;" name="game">
					<div class="button2 button-second">
						<input name="casetype" type="hidden" value="<?=$case2['name']?>">
						<span class="size"><?=$case2['costet']?> руб</span><span class="download">Играть</span>
					</div>
					</button>
					</form>
				</footer>

			</div>
            
            
			
		</div>
        <br>
        <br>
        <header class="start__header">

			<h3 class="maintitle">В КЕЙСЕ!</h3>

		</header>
		
		<div class="start__downloads">

			

			<div class="start__downloads--first">

				<img src="/classes/img/money.png" alt="">

				

				<header>
					
					<span class="download">ПРЕДМЕТ</span>
					<h3>Донат Валюта</h3>

				</header>
				
				<p>Может выпасть от 20 до <?$case2["maxpriz"]?> донат рублей</p>

				

			</div>
            <div class="start__downloads--first">

				<img src="/classes/img/money.png" alt="">

				

				<header>
					
					<span class="download">ПРЕДМЕТ</span>
					<h3>Деньги</h3>

				</header>
				
				<p>Может выпасть от 50.000 до 500.000$</p>

				

			</div>
            
        </div>

        

        
	</section>
	<?CreateFooter($site['nameproject'],'white')?>
	
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