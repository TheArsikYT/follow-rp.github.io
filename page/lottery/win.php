<?
require 'auth.php';
if(empty($_SESSION["caseopen"])) header("Location: index.php");
session_destroy();
session_start();
$_SESSION["refresh"] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Победа! | <?=$site['nameproject']?> RolePlay</title>
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

			<h1 class="maintitle">ПОБЕДА!</h1>

		</header>
		<div class="start__downloads">

			
			<div class="start__downloads--first">

				<img src="<?=$img?>" alt="">

				
                
				<header>
					
					<span class="download">ПРИЗ</span>
					<h3><?=$priz?></h3>

				</header>
				
				<p>Вам выпало <b><?=$getpriz?></b></p>

				<footer>
				<form action="" method="POST">
					<button type="submit" style="background: none;border:none;" name="game">
					<a href="#" target="_blank" class="button2 button-second">
						<input name="casetype" type="hidden" value="bravo">
						<span class="download">Играть</span>
					</a>
					</button>
					</form>
				</footer>

			</div>
            
            
			
		</div>
        
        

        
	</section>

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