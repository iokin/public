// JavaScript Document
$(document).ready(function(e) {
	if (!$.cookie('cookie_policy')) {
		$.cookie('cookie_policy', true, { expires: 365 });
		
		$("body").append('<div id="cookie_banner">Utilizamos cookies propias y de terceros para mejorar nuestros servicios y su experiencia de usuario.<br>Si continua navegando, consideramos que acepta su uso. <a href="cookies.php" target="_blank" id="cookie_banner_link">M&aacute;s informaci&oacute;n</a> <button id="cookie_banner_accept">Acepto</button> <button id="cookie_banner_decline">No gracias</button></div>');
		
		$("#cookie_banner_accept").click(function(e) {
			$("#cookie_banner").remove();
			e.preventDefault();
		});
		
		$("#cookie_banner_decline").click(function(e) {
			var all_cookies = $.cookie();
			for (var cookie in all_cookies) {
				if (cookie != "_ga")
					$.removeCookie(cookie);
				else
					$.removeCookie(cookie, { domain: '.haciendadelcardenal.com' });
			}
			alert ('Va a abandonar esta página');
			location.href="http://www.google.es";
			e.preventDefault();
		});
	}
});