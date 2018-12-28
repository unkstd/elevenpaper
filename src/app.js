import $ from 'jquery'
import './sass/style.scss'

// Search Input
function searchInputOpen() {
    $('.bodyContent').toggleClass('search-active')
    $('.searchForm').toggleClass('deactive-s');
    $('#btn-search-max').toggleClass('disable');
    $('#btn-search-min').toggleClass('disable');
    $('.menuButton').toggleClass('disable');
    $('#btn-search-close-max').toggleClass('disable');
    $('#btn-search-close-min').toggleClass('disable');
}
function searchInputClose() {
    $('.bodyContent').toggleClass('search-active')
    $('.searchForm').toggleClass('deactive-s');
    $('#btn-search-max').toggleClass('disable');
    $('#btn-search-min').toggleClass('disable');
    $('.menuButton').toggleClass('disable');
    $('#btn-search-close-max').toggleClass('disable');
    $('#btn-search-close-min').toggleClass('disable');
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

$('#btn-menubar').click(function() {
    $('.m-nav').toggleClass('disable');
    $('#btn-search-min').toggleClass('disable');
    $('#btn-menubar').toggleClass('disable');
    $('#btn-menu-close').toggleClass('disable');
    $('.bodyContent').toggleClass('search-active');
});
$('#btn-menu-close').click(function() {
    $('.m-nav').toggleClass('disable');
    $('#btn-search-min').toggleClass('disable');
    $('#btn-menubar').toggleClass('disable');
    $('#btn-menu-close').toggleClass('disable');
    $('.bodyContent').toggleClass('search-active');
});

// Fixed header

$(window).scroll(function() {
  if ($(window).scrollTop() > 80) {
    $('header').addClass("min");
    $('.bodyContent').addClass("hd-min");
    $('#progress').removeClass("disable");
  } else {
    $('header').removeClass("min", 200, "easeOut");
    $('.bodyContent').removeClass("hd-min");
    $('#progress').addClass("disable");
  }
});
