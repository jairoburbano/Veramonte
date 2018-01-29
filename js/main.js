(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        body = $('body'),
        html = $('html');
    function menuMobile() {
        var icon = $('.header__menu'),
            menu = $('.header--bottom'),
            header = $('.header');
        icon.click(function() {
            menu.stop().slideToggle();
            header.toggleClass('header--open');
        });
    }
    function buscador() {
        var icon = $('.send-group'),
            search = $('.header__search');
        icon.click(function() {
            search.addClass('active');
            search.find('.input-group input').focus();
        });
    }
    function headerFixed() {
        var header = $('.header'),
            scroll = $(window).scrollTop();

        if (scroll >= 20) {
            header.addClass('header--fixed');
        } else {
            header.removeClass("header--fixed");
        }
    }
    function selectorTrade() {
        var group = $('.menu--trade'),
            sidebar = $('.sidebar'),
            item = $('.item__sidebar');
        group.append('<form action="" class="form--trade"><div class="input-group"><select onChange="window.location.href=this.value" class="filtros--select"><option value="default">Filtrar por</option></select></div></form>');
        sidebar.hide();
        item.each(function() {
            var select = $('.filtros--select'),
                valor = $(this).text(),
                link = $(this).attr('href');
            select.append('<option value="'+link+'">'+valor+'</option>')
        });
    }
    function gallery() {
        var slide = $('.js-slider__gallery'),
            texto = $('.gallery__text p'),
            fullscreen = $('.gallery__fullscreen');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom__icons"),
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
        fullscreen.click(function() {
            $('.gallery').toggleClass('fullscreen');
            slide.resize();
        });
    }
    function wines() {
        var item = $('.item__wine'),
            slide = $('.wine__slides');
        if(windowSize < 740 ) {
            slide.each(function() {
                $(this).flexslider({
                    animation: "slide",
                    controlNav: false,
                    controlsContainer: $(".custom-controls-container"),
                    prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                    nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>'
                });
            });
        }
        if(windowSize > 980 ) {
            item.mouseenter(function() {
                var name = $(this).attr('data-name'),
                    note = $(this).attr('data-note'),
                    link = $(this).attr('data-link'),
                    color = $(this).attr('data-color');
                $(this).addClass('active');
                $(this).parent().siblings().find('.item__wine').removeClass('active');
                $(this).parents('.wine-box').find('.leyenda__title').css('opacity', 0).empty().text(name).stop().animate({'opacity' : 1}, 1000);
                $(this).parents('.wine-box').find('.leyenda__note').css('opacity', 0).text(note).stop().animate({'opacity' : 1}, 1000);
                $(this).parents('.wine-box').find('.leyenda__link').attr('href', link);
                $(this).parents('.wine-box').attr('class', 'wine-box').addClass(color);
            });
        }
    }
    function homeScroll() {
        var scrollButton = $('.banner__button'),
            scrollHere = $('.scroll__here');
        scrollButton.click(function() {
            $('html, body').animate({
                scrollTop: scrollHere.offset().top - 50
            }, 700);
        });
    }
    function relatedWines() {
        var slide = $('.related__slide');
        if(windowSize < 740 || windowSize > 980) {
            slide.flexslider({
                animation: "slide",
                controlNav: false,
                itemWidth: 120,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>'
            });
        }
        if(windowSize > 740 && windowSize < 980) {
            slide.flexslider({
                animation: "slide",
                controlNav: false,
                itemWidth: 240,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>'
            });
        }
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function related() {
        var altura=0; // the height of the highest element (after the function runs)
        var altura_elem;  // the highest element (after the function runs)
        $('.related__item').each(function () {
            $this = $(this);
            if ( $this.outerHeight() > altura ) {
                altura_elem=this;
                altura=$this.outerHeight();
            }
        });
        $('.related__item').height(altura);
    }
    if(windowSize < 740 ) {
        menuMobile();
    }
    if(windowSize < 980 ) {
        selectorTrade();
    }
    if(windowSize > 740 ) {
        buscador();
    }
    $(window).scroll(function() {
        headerFixed();
    });
    $(window).load(function() {
        related();
    });
    gallery();
    wines();
    homeScroll();
    relatedWines();
    popupLinks();
})(jQuery);
