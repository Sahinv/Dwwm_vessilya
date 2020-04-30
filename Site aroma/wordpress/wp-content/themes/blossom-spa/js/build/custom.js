jQuery(document).ready(function($) {

    $('.main-navigation ul li.menu-item-has-children').prepend('<span class="submenu-toggle"><i class="fas fa-chevron-down"></i></span>');

    $('.nav-wrap .main-navigation button.toggle-btn').on('click', function(){
        $('body').addClass('menu-toggled');
    });

    $('.responsive-nav .main-navigation button.toggle-btn').on('click', function(){
        $('body').removeClass('menu-toggled');
    });

    $('.responsive-nav .main-navigation ul li span').on('click', function(){
        $(this).toggleClass('active');
        $(this).siblings('.responsive-nav .main-navigation ul ul').slideToggle();
    });

    $('.header-six .header-t .nav-right').clone().appendTo('.header-six .header-main .nav-wrap');
    $('.header-seven .header-t .nav-right').clone().appendTo('.header-seven .header-main .nav-wrap');

    //for accessibility
    $('.main-navigation ul li a').focus(function() {
        $(this).parents('li').addClass('focused');
    }).blur(function() {
        $(this).parents('li').removeClass('focused');
    });

    //toggle search form
    $('.header-search').on('click', function(){
        $('.search-form-wrap').slideDown().addClass('active');
        $('body').addClass('search-active');
    });

    $('.search-form-wrap .close').on('click', function(){
        $('.search-form-wrap').slideUp().removeClass('active');
        $('body').removeClass('search-active');
    });

    $(window).keyup(function(event) {
        if(event.key == "Escape") {
            $('.search-form-wrap').slideUp().removeClass('active');
            $('body').removeClass('search-active');
        }
    });

    $(window).scroll(function() {
        if($(this).scrollTop() > 20) {
            $('.search-form-wrap').slideUp().removeClass('active');
            $('body').removeClass('search-active');
        }
    });
    
    var rtl, winWidth;
    
    if( blossom_spa_data.rtl == '1' ){
        rtl = true;
    }else{
        rtl = false;
    }
    
    //console.log(widgetID);
    $('.service-section.style-1 .widget_bttk_icon_text_widget').each(function(){
        $(this).find('.icon-holder').insertAfter($(this).find('.widget-title'));
    });

    $(window).on('resize load', function() {
        winWidth = $('.site').width();
        var containerWidth = $('.site-header .container').width();
        var tWidth = (parseInt(winWidth) - parseInt(containerWidth)) / 2;
        //console.log(tWidth);

        $('body:not(.rtl) .about-section .widget_blossomtheme_featured_page_widget .widget-featured-holder.left').css('padding-right', tWidth);
        $('.rtl .about-section .widget_blossomtheme_featured_page_widget .widget-featured-holder.left').css('padding-left', tWidth);

        $('body:not(.rtl) .about-section .widget_blossomtheme_featured_page_widget .widget-featured-holder.right').css('padding-left', tWidth);
        $('.rtl .about-section .widget_blossomtheme_featured_page_widget .widget-featured-holder.right').css('padding-right', tWidth);

        $('body:not(.rtl) .contact-section .form-block').css('padding-right', tWidth);
        $('.rtl .contact-section .form-block').css('padding-left', tWidth);
    });

    if($(window).width() > 1024) {
        var itemCount = $('.header-seven .header-main .main-navigation .nav-menu > li').size();
        var liIndex = Math.round( itemCount / 2 ) - 1;
        $('.header-main .site-branding').insertAfter($('.header-seven .header-main .main-navigation .nav-menu > li:nth('+ liIndex +')'));
    }

    //woocommerce category dropdown
    $('.widget.woocommerce ul li.cat-parent').append('<span class="cat-toggle"><i class="fas fa-chevron-right"></i></span>');
    $('.widget.woocommerce ul li.cat-parent .cat-toggle').on('click', function(){
       $(this).siblings('ul.children').stop(true, false, true).slideToggle();
       $(this).toggleClass('active'); 
   });

    //show/hide scroll button
    $(window).scroll(function(){
        if($(window).scrollTop() >300) {
            $('.back-to-top').addClass('show');
        } else {
            $('.back-to-top').removeClass('show');
        }
    });

    //scroll window to top
    $('.back-to-top').on('click', function(){
        $('html, body').animate({
            scrollTop: 0
        }, 600);
    });

    //tab toggle
    $('.tab-content:not(.active)').hide();
    $('.tab-btn-wrap .tab-btn').on('click', function(){
        var diffClass = $(this).attr('class');
        var splitClass = diffClass.split(' ');
        var tabClass = splitClass[0];

        $('.tab-btn').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').fadeOut();
        $('.tab-content').removeClass('active');
        $('.'+tabClass+'-content').fadeIn().addClass('active');

    });

    //team slider
    var loopState;
    var teamItemCount = $('.team-section .grid').children('.widget').length;
    if(teamItemCount <= 4) {
        loopState = false;
    }else {
        loopState = true;
    }
    $('.team-section .grid').owlCarousel({
        items: 4,
        nav: true,
        dots: true,
        dotsEach: true,
        autoplay: false,
        loop: loopState,
        autoplayHoverPause : true,
        margin: 30,
        rtl: rtl,
        responsive : {
            0 : {
                items: 1,
            },
            768 : {
                items: 2,
            },
            1025 : {
                items: 3,
            },
            1200 : {
                items: 4,
            }
        }
    });

    //testimonial slider
     var testloopState;
    var testItemCount = $('.testimonial-section .grid').children('.widget').length;
    if(testItemCount == 1) {
        testloopState = false;
    }else {
        testloopState = true;
    }
    $('.testimonial-section .grid').owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayHoverPause : true,
        loop: testloopState,
        margin: 0,
        rtl: rtl,
        responsive : {
            0 : {
                nav: false,
            },
            768 : {
                nav: true,
            }
        }
    });

    if( $('.widget_bttk_description_widget').length ){
        $('.description').each(function(){ 
            var ps = new PerfectScrollbar($(this)[0]); 
        });
    }

    //js for testimonial widget
    $('.widget_bttk_testimonial_widget').each(function(){
        $(this).find('.img-holder').insertBefore($(this).find('.testimonial-meta'));
    });

});