<?
require '../../engine/function.php';
require '../../engine/authorization.php';//Модули авторизации
if(!(empty($_COOKIE["pass"]) || $_COOKIE["pass"]=="")) return header("Location: ./");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Авторизация | <?=$site['nameproject']?> RolePlay</title>
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
	<!-- SECTION: SIGN-IN -->
	<section class="section-sign-in">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
					<div class="page-title"><h1>Авторизация</h1></div>
					<div class="sign-in-box">
						<form action="" method="POST">
							<div class="form-group">
								<?=$info_user?>
                                <br>
								<input type="text" required placeholder="Ваш ник-нейм" name="nick" class="s-input"><br>
                                <br>
								<?=$info_pass?>
								<input type="password" required placeholder="Ваш пароль" name="password"class="s-input margin"><br>
								<center><button class="btn btn-s" type="submit" name="login">Авторизоваться</button></center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <script type="text/javascript">
  $(function(){
    $(".close").click(function(){
      $("#myAlert5").alert('close');
    });
});
</script>
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