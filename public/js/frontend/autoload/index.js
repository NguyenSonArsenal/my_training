// executes when complete page is fully loaded, including all frames, objects and images
$(window).on('load', function () {
    setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds.
});

function removeLoader() {
    $('#loading').fadeOut(500, function () {
        $(this).hide();
        $('#wrapper').fadeIn(500, function () {
            $('#wrapper').show();
        });
    });
}

// executes when HTML-Document is loaded and DOM is ready
$(document).ready(function () {
    // Cache the Window object
    $window = $(window);
    $nav = $('nav');

    $('.navbar-toggler').click(function () {
        var toggle = $(this).attr('aria-expanded');
        var img = $(this).children('img');
        if (toggle == 'false') {
            img.attr('src', assets('/images/frontend/layout/close.png'));
            $(this).parents('nav').addClass('open');
        }else {
            img.attr('src', assets('/images/frontend/layout/menu.png'));
            $(this).parents('nav').removeClass('open');
        }
    });

    // Use the cached window object here
    $window.scroll(function () {
        var scrollTop = $(window).scrollTop();
        toggleIconBackToTop(scrollTop);
        toggleStyleNavbar(scrollTop, $nav);
    });

    $('#icon-back-to-top').click(function () {
        $('body, html').animate({scrollTop: 0}, 600);
    });

    if (isMobile()) {
        $('#service .description').addClass('text-center');
    } else {
        $('#service .description').addClass('text-left');
    }

    // scroll to tab content when click menu
    $li = $('.nav-item');
    $navItem = $('.nav-item__link');
    // $li.click(function (e) {
    //     e.preventDefault();
    //     $navItem.removeClass('active');
    //     $('.nav-item__link_' + $(this).data('scroll')).addClass('active');
    //     goToByScroll($(this).data('scroll'));
    // });
});

var scrollPointbackTop = 100; // px
var scrollPointNavbar = 150; // px
function toggleIconBackToTop(scrollTop) {
    if (scrollTop >= scrollPointbackTop) {
        $('#icon-back-to-top').addClass('show');
    } else {
        $('#icon-back-to-top').removeClass('show');
    }
}

function toggleStyleNavbar(scrollTop, navbar) {
    if (scrollTop >= scrollPointNavbar) {
        navbar.addClass('fixed-ontop');
    } else {
        if (navbar.hasClass('fixed-ontop')) {
            navbar.removeClass('fixed-ontop');
        }
    }
}

// Scroll menu
function goToByScroll(id) {
    $('html,body').animate({scrollTop: ($("#" + id).offset().top-80)}, 'slow');
}
