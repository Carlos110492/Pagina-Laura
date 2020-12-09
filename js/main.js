$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('#toTopBtn').fadeIn();
		} else {
			$('#toTopBtn').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#toTopBtn').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});