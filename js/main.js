$(document).ready(function() {
	// Search Input
	function searchInputOpen() {
		$('.bodyContent').toggleClass('search-active')
		$('.searchForm').removeClass('deactive-s');
		$('#btn-search-max').addClass('disable');
		$('#btn-search-min').addClass('disable');
		$('#btn-search-close-max').removeClass('disable');
		$('#btn-search-close-min').removeClass('disable');
	}
	function searchInputClose() {
		$('.bodyContent').toggleClass('search-active')
		$('.searchForm').addClass('deactive-s');
		$('#btn-search-max').removeClass('disable');
		$('#btn-search-min').removeClass('disable');
		$('#btn-search-close-max').addClass('disable');
		$('#btn-search-close-min').addClass('disable');
	}
	$('#btn-search-max').click(searchInputOpen);
	$('#btn-search-min').click(searchInputOpen);
	$('#btn-search-close-max').click(searchInputClose);
	$('#btn-search-close-min').click(searchInputClose);
	$(document).on('keyup', function(evt) {
		if (evt.keyCode == 27) {
			searchInputClose();
		}
	});

	$('.error_close').click(function () {
		$('.php_error').toggleClass('disable');
	});

	// Progress bar
	$(window).scroll (function() {
		var ratio = $(document).scrollTop() / (($(document).height () - $(window).height()) / 100);
		$('#progress').width(ratio + "%");
	});

	// Night Mode

	/* $('#btn-moon').click(function() {
		$('#btn-moon').addClass('disable');
		$('#btn-sun').removeClass('disable');
	});
	$('#btn-sun').click(function() {
		$('#btn-moon').removeClass('disable');
		$('#btn-sun').addClass('disable');
	}); */

	$('#btn-menubar').click(function() {
		$('.m-nav').removeClass('disable');
		$('#btn-menubar').addClass('disable');
		$('#btn-menu-close').removeClass('disable');
		$('.bodyContent').toggleClass('search-active')
	});
	$('#btn-menu-close').click(function() {
		$('.m-nav').addClass('disable');
		$('#btn-menubar').removeClass('disable');
		$('#btn-menu-close').addClass('disable');
		$('.bodyContent').toggleClass('search-active')
	});
});