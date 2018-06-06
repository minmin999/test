(function($) {
    "use strict";
    $('#slicklight').slickLightbox();
    $(document).ready(function() {
        $('#nav-expander').on('click', function(e) {
            e.preventDefault();
            $('body').toggleClass('nav-expanded');
        });
        $('#nav-close').on('click', function(e) {
            e.preventDefault();
            $('body').removeClass('nav-expanded');
        });
    });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('.carousel').carousel({
        interval: 4000
    })


$('.multiple-items').slick({
  infinite: true,
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
});  

$('.weds-multiple-items').slick({
  infinite: true,
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
});   

$('.weds-det-items').slick({
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
});

$('.single-item').slick({
    dots: false,
    arrows: false,
    vertical: true,
    slidesToShow: 2,
    slidesToScroll:1,
    verticalSwiping: true,
    autoplay:true
});

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.gallery-nav'
});
$('.gallery-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});

$('.portfolio-slider').slick({
  infinite: true,
  autoplay: true,
  arrows: true,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1
}); 


$('.testimonials').slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
}); 

$('.medicals').slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
}); 

$('.doctor').slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  dots: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
}); 

$('.partners').slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  dots: false,
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    }
  ]
}); 

// Isotope

$(window).on('load',function() {
    var worksfilters = $('.filters li'),
      worksitem = $('#isotope-grid'); 
    if (worksfilters != 'undefined'){   
      worksitem.isotope({
        
        itemSelector : '.grid-item',
        layoutMode: 'fitRows',
         masonry: {
        columnWidth: '.grid-item'
        }
      });       
    worksfilters.on('click', function(){    
    worksfilters.removeClass('active');
    $(this).addClass('active'); 
    var selector = $(this).attr('data-filter');
    worksitem.isotope({ filter: selector });  
    return false;   
    });
     }
  });

/**
     * Slicknav - a Mobile Menu
     */
    var $slicknav_label;
    $('.responsive-menu').slicknav({
      duration: 500,
      easingOpen: 'easeInExpo',
      easingClose: 'easeOutExpo',
      closedSymbol: '<i class="fa fa-plus"></i>',
      openedSymbol: '<i class="fa fa-minus"></i>',
      prependTo: '#slicknav-mobile',
      allowParentLinks: true,
      label:"" 
    });

    var $slicknav_label;
    $('#responsive-menu').slicknav({
      duration: 500,
      easingOpen: 'easeInExpo',
      easingClose: 'easeOutExpo',
      closedSymbol: '<i class="fa fa-plus"></i>',
      openedSymbol: '<i class="fa fa-minus"></i>',
      prependTo: '#slicknav-mobile',
      allowParentLinks: true,
      label:"" 
    });

    
    /**
     * Sticky Header
     */
        
    $(window).scroll(function(){

      if( $(window).scrollTop() > 10 ){

        $('.navbar').addClass('navbar-sticky')

      } else {
        $('.navbar').removeClass('navbar-sticky')
      }

    })
    
    /**
     * Main Menu Slide Down Effect
     */
     
    var selected = $('#navbar li');
    // Mouse-enter dropdown
    selected.on("mouseenter", function() {
        $(this).find('ul').first().stop(true, true).delay(350).slideDown(500, 'easeInOutQuad');
    });

    // Mouse-leave dropdown
    selected.on("mouseleave", function() {
        $(this).find('ul').first().stop(true, true).delay(100).slideUp(150, 'easeInOutQuad');
    });


    /**
     *  Arrow for Menu has sub-menu
     */
    if ($(window).width() > 992) {
      $(".navbar-arrow ul ul > li").has("ul").children("a").append("<i class='arrow-indicator fa fa-angle-right'></i>");
    }
     //Accordion Box
  if($('.accordion-box').length){
    $(".accordion-box").on('click', '.acc-btn', function() {
      
      var outerBox = $(this).parents('.accordion-box');
      var target = $(this).parents('.accordion');
      
      if($(this).hasClass('active')!==true){
      $('.accordion .acc-btn').removeClass('active');
      
      }
      
      if ($(this).next('.acc-content').is(':visible')){
        return false;
      }else{
        $(this).addClass('active');
        $(outerBox).children('.accordion').removeClass('active-block');
        $(outerBox).children('.accordion').children('.acc-content').slideUp(300);
        target.addClass('active-block');
        $(this).next('.acc-content').slideDown(300);  
      }
    }); 
  }
  

    if ( $('#accordion > .panel').length) {
    $('#accordion > .panel').on('show.bs.collapse', function (e) {
        var heading = $(this).find('.panel-heading');
        heading.addClass("active-panel");
        
  });
  $('#accordion > .panel').on('hidden.bs.collapse', function (e) {
        var heading = $(this).find('.panel-heading');
          heading.removeClass("active-panel");
    });
  }

/* ---------------------------------------------
    Counter bars
 --------------------------------------------- */ 
  // $('.counter').counterUp({
  //   delay: 10,
  //   time: 1000
  // });
/* ---------------------------------------------
    counter bars
 --------------------------------------------- */
  $(window).on('load',function() {
    var worksfilters = $('.filters li'),
      worksitem = $('#isotope-grid'); 
    if (worksfilters != 'undefined'){   
      worksitem.isotope({
        
        itemSelector : '.grid-item',
        layoutMode: 'fitRows',
         masonry: {
        columnWidth: '.grid-item'
        }
      });       
    worksfilters.on('click', function(){    
    worksfilters.removeClass('active');
    $(this).addClass('active'); 
    var selector = $(this).attr('data-filter');
    worksitem.isotope({ filter: selector });  
    return false;   
    });
     }
  });


})(jQuery);

jQuery(document).ready(function(){

  jQuery('.nav.navbar-nav > li').each(function(){
    
    if( !jQuery(this).hasClass('menu-item-has-children') ){
      jQuery(this).find('a').removeClass('dropdown-toggle');

    }
  });

  jQuery('#responsive-menu li a').addClass('nav-link');
  
})