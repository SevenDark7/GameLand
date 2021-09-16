$(document).ready(function() {
    $('.select > div').animate({margin: '7vw 3vw', opacity: '1'}, 'slow');
    $('.sldMenu').click(function(e) {
        e.preventDefault();
        $('.side').slideToggle();
    });
});

$('.list').click(function() {
    $(location).attr('href', '/games');
});

$('.favorites').click(function() {
    $(location).attr('href', '/favorites');
});

$('.profile').click(function() {
    $(location).attr('href', '/profile');
});
