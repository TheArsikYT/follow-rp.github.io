<?
require '../../engine/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Донат | <?=$site['nameproject']?> RolePlay</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" />
	<?GetCSS();?>
</head>
<body>
	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
	<?CreateMenu($site['nameproject']);?>
	<?PageTitle("Донат","Здесь Вы можете пополнить<br>свой игровой счет.");?>
	<section class="section-donate">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
					<div class="page-title"><h1>Пополнение счета</h1></div>
					<div class="donate-box">
						<div class="donate-info">
							<p>
								Перед оплатой закройте игру!
								</p>
						</div>
						<form action="" method="">
							<div class="form-group">
								<input type="text" required placeholder="Номер аккаунта" class="d-input"><br>
								<input type="text" required placeholder="Сумма пополнения" class="d-input margin"><br>
								<center><button class="btn btn-d">Перейти к оплате</button></center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?CreateFooter($site['nameproject'],'white');?>
	<!--[if lt IE 9]>
		<script src="classes/libs/html5shiv/es5-shim.min.js"></script>
		<script src="classes/libs/html5shiv/html5shiv.min.js"></script>
		<script src="classes/libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="classes/libs/respond/respond.min.js"></script>
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