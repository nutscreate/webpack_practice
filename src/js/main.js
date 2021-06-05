import'../css/main.scss';

var $header = $('#top-head , #loading , .hamburger_base , #page_top');
$(window).scroll(function() {
if ($(window).scrollTop() > 0) {
$header.addClass('fixed');
} else {
$header.removeClass('fixed');
}
});
