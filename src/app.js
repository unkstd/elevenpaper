import $ from 'jquery'
import './sass/style.scss'
//import './img/icons/moon.svg'
//import './img/icons/sun.svg'
//import './img/logo/logo_black.svg'

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