<?require '../../engine/function.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Новости | <?=$site['nameproject']?>  RolePlay</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" />
	<!-- Libs CSS -->
	<link rel="stylesheet" href="/classes/libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="/classes/libs/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/classes/libs/linea/styles.css" />
	<link rel="stylesheet" href="/classes/libs/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="/classes/libs/animate/animate.min.css" />

	<!-- Main CSS -->
	<link rel="stylesheet" href="/classes/css/main.css" />
	<link rel="stylesheet" href="/classes/css/fonts.css" />
	<link rel="stylesheet" href="/classes/css/media.css" />
</head>
<body>
	<!-- PRELOADER -->
	<div class="loader">
		<div class="loader-inner"></div>
	</div>
<style>
.news-margin {
	margin-top: 30px;
}
.news-wrp {
	margin-top: 30px;
	transition: 0.5s;
}
.news-wrp:hover {
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-o-transform: scale(1.1);
	transform: scale(1.1);
}
.news-img {
	overflow: hidden;
}
.news-cnt {
	padding: 30px;
	border-bottom: 1px solid #e4e4e4
}
.news-cnt p {
	display: block;
	color: #999;
	font-size: 14px;
	line-height: 25px;
}
.news-footer {
	position: relative;
	padding: 30px;
}
.news-footer span {
	display: block;
	color: #a3a3a3;
	font-size: 12px;
	font-family: "OpenSansLight";
	margin-left: 20px;
}
.news-footer span:before {
	position: absolute;
	content: '\f017';
	color: #a3a3a3;
	font-size: 14px;
	font-family: "FontAwesome";
	left: 30px;
	top: 28px;
	z-index: 1;
}
.news-footer a {
	color: #d8c31e;
	font-size: 14px;
}

/* ---------- FULL NEWS PAGE STYLE ------------- */


.news-full-cnt {
	padding: 30px;
	border-bottom: 1px solid #e4e4e4
}
.news-full-cnt p {
	display: block;
	color: #666;
	font-size: 14px;
	line-height: 25px;
	margin-top: 20px;
}
</style>
	<?CreateMenu($site['nameproject']);?>
	<?PageTitle("Новости","Здесь Вы можете просмотреть<br>все новости проекта!");?>
	<section class="section-news">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="page-title"><h1>Новости</h1></div>
					<br>
					<!-- block 2 -->
					<? CreateNews();?>
                    <?=$news_none?>
					<!-- block 3 -->
					
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