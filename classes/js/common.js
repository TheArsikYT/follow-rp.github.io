$(document).ready(function() {
	// Анимация при пролистывании (Plugin: animated.css)
	new WOW().init();
	// Скроллинг к блокам по нажатию
	$(".hl-menu ul li a, .mh-button a").mPageScroll2id();
});

$(window).load(function() {
	// Preloader
	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

	$(".top_text h1").animated("fadeInDown", "fadeOutUp");
	$(".top_text p").animated("fadeInUp", "fadeOutDown");

}); 