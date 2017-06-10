

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar").css('display','block');
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar").css('display','none');
    }
}


$(document).ready(function(){
    collapseNavbar();
});

$(window).scroll(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $.scrollUp({
        animation: 'fade',
        scrollImg: {
            active: true,
            type: 'background',
            src: '../img/top.png'
        }
    });
});

// Closes the Responsive Menu on Menu Item Click
// $('.navbar-collapse ul li a').click(function() {
//     $(this).closest('.collapse').collapse('toggle');
// });