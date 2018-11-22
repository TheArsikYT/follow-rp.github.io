<?
require 'auth.php';
require '../../engine/function.php';
require 'lottery.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Кейсы | <?=$site['nameproject']?> RolePlay</title>
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

			<div class="start__downloads--first">

				<img src="/classes/img/case1.png" alt="">

				<span class="download-item"><?echo rand(1,100)?> шт.</span>

				<header>
					
					<span class="download">РУЛЕТКА</span>
					<h3><?=$case1['name']?></h3>

				</header>
				
				<p>Случайный предмет на сумму до <?=$case1['maxpriz']?> рублей</p>

				<footer>
					<a href="case-1.php" target="_blank" class="button2 button-second">
						
						<span class="size"><?=$case1['costet']?> руб</span><span class="download">Смотреть</span>
					</a>
				</footer>

			</div>

			<div class="start__downloads--second">

				<img src="/classes/img/case2.png" alt="">

				<span class="download-item"><?echo rand(1,100)?> шт.</span>

				<header>
					
					<span class="download">РУЛЕТКА</span>
					<h3><?=$case2['name']?></h3>

				</header>
				
				<p>Случайный предмет на сумму до <?=$case2['maxpriz']?> рублей</p>

				<footer>
				
					
					<a href="case-2.php" target="_blank" class="button2 button-second">
						
						<span class="size"><?=$case2['costet']?> руб</span><span class="download">Смотреть</span>
					</a>
					
					
				</footer>

			</div>

			<div class="start__downloads--third">

				<img src="/classes/img/case3.png" alt="">
				
				<span class="download-item"><?echo rand(1,100)?> шт.</span>

				<header>
					
					<span class="download">РУЛЕТКА</span>
					<h3><?=$case3['name']?></h3>

				</header>
				
				<p>Случайный предмет на сумму до <?=$case3['maxpriz']?> рублей</p>

				<footer>
					<a href="case-3.php" target="_blank" class="button2 button-second">
						
						<span class="size"><?=$case3['costet']?> руб</span><span class="download">Смотреть</span>
					</a>
				</footer>

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