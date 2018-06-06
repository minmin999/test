jQuery(document).ready(function ($) {



    $('#primary-menu').slicknav({
        prependTo: $('.layla-header-menu'),
        label: ''
    });

    $('.layla-search, #layla-search .fa.fa-close').click(function () {

        $('#layla-search').fadeToggle(449)

    });

    // scroll to top trigger
    $('.scroll-top').click(function () {
        $("html, body").animate({scrollTop: 0}, 1000);
        return false;
    });

    // scroll down trigger
    $('.scroll-down').click(function () {

        $("html, body").animate({
            scrollTop: ($('#layla-featured-post').height() + 85 )
        }, 1000);

        return false;

    });


    // ------------
    var laylaWow = new WOW({
        boxClass: 'reveal',
        animateClass: 'animated',
        offset: 100

    });

    laylaWow.init();
    
    
});