$(function(){

    /**
     * ОТКЛЮЧАЕМ КОНТЕКСТНОЕ МЕНЮ (правая кнопка мыши)
     */
    $(document).on('contextmenu', function (e) {
        e.preventDefault();
    });
    /**
     * ЗАПРЕЩАЕМ ПЕРЕТАСКИВАНИЕ
     */
    $("img").on('drag dragdrop dragstart', function () {
        return false;
    });


    // Максимальная ширина для мобильной версии
    var maxMob = 640;

    /**
     * АНИМАЦИЯ ЯКОРНЫХ ССЫЛОК
     */
    var $a = $('a');
    var mg_ancor = ($(window).width() > maxMob)? -80 : -50; // смещение - необходимо для корректного отображения
    /**
     * Ф-я корректировки положения скрола браузера
     */
    TopPositionForAncor();
    function TopPositionForAncor() {
        var link = window.location;
        if(link.hash) {
            if(link.hash != '#') $(window).scrollTop($(link.hash).offset().top + mg_ancor);
        }
    }

    /**
     * Ф-я анимированной прокрутки для якорных ссылок
     * @param obj
     */
    $a.click(function(){
        if($(this).attr('href').indexOf('#') != -1) {
            if($(this).attr('href') != '#') animateScroll($(this));
        }
    });
    function animateScroll(obj) {
        var elem = obj.attr('href');
        $('html, body').animate({scrollTop: $(elem).offset().top + mg_ancor}, 1500);
    }

/*
 *
 *
 * ---------------------------
 * MOBILE MENU
 * --------------------------*/
// check menu opacity
function menuOpacity() {
    if($(window).width() <= maxMob) {
        var navigation = $('.fixed-menu'),
            scroll = $(window).scrollTop();
        // 568-40=528 // <= 528
        if (scroll < 60 && navigation.find('.toggle').css('display') != 'block') {
            navigation.removeClass('dark');
        } else {
            navigation.addClass('dark');
        }
    }
}
menuOpacity();

function menuResize() {
    var topLine = 40,
        btmCall = 60,
        ul = $('.toggle ul'),
        win_H = $(window).height();

    if($(window).width() <= maxMob) {
        ul.height(win_H - topLine - btmCall);
    } else ul.height('auto');
}
menuResize();

if($(window).width() <= maxMob) {
// menu-open
    $('.btns .menu').on('click', function () {

        $('.fixed-menu').addClass('dark open');
        $('html').css('overflow','hidden');

        $(this).fadeOut(300)
            .siblings('.back').fadeIn(300)
            .siblings('.call').fadeOut(300)
            .parent().siblings('.toggle').fadeIn(300);
    });

// menu-close
    $('.btns .back').on('click', function () {

        $('.fixed-menu').removeClass('open');
        $('html').css('overflow','auto');

        $(this).fadeOut(300)
            .siblings('.menu').fadeIn(300)
            .siblings('.call').fadeIn(300)
            .parent().siblings('.toggle').fadeOut(300);
        setTimeout(function () {menuOpacity()}, 500);
    });

// call-btm
    $('.call-btm').on('click', function () {

        $('.fixed-menu').removeClass('open');
        $('html').css('overflow','auto');

        $(this).parent().fadeOut(300).siblings('.btns')
            .find('.back').fadeOut(300)
            .siblings('.menu, .call').fadeIn(300);
        setTimeout(function () {menuOpacity()}, 500);
    });

// пункты меню
    $('.toggle').on('click', 'li', function () {

        $('.fixed-menu').removeClass('open');
        $('html').css('overflow','auto');

        $(this).parent().parent().fadeOut(300)
            .siblings('.btns')
            .find('.back').fadeOut(300)
            .siblings('.menu, .call').fadeIn(300);
        setTimeout(function () {menuOpacity()}, 500);
    });

}
/* end mobile menu
 *
 *
 * ---------------------------
 * MOBILE SCREEN DESIGN
 * --------------------------*/
$('.more').on('click',function(){
    if($(this).hasClass('open')) {
        $(this).removeClass('open').next('.content').slideUp(500);
    } else $(this).addClass('open').next('.content').slideDown(500);
});
/* end mobile screen design
 *
 *
 * ---------------------------
 * SCROLL FUNCTION
 * --------------------------*/
$(window).scroll(function(){
    // show/hide top menu

    // and highlight menu item when scroll
    var navigation = $('.fixed-menu'),
        list = navigation.find('ul'),
        crt = "current",
        scroll = $(window).scrollTop();

    // Навигация по меню и подсветка текущих блоков
    menuOpacity();

    var block = $('div[class|=box]');
        //mg_ancor = 81;

    // show/hide top menu
    if (scroll <= $(block[1]).find('[class|=title]').offset().top + mg_ancor -1) {
    //if (scroll < 60) {
        navigation.removeClass('slow_');
    } else {
        navigation.addClass('slow_');
    }

    if( scroll >= $(block[8]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(8)').addClass(crt);
    }

    else if( scroll >= $(block[7]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(7)').addClass(crt);
    }

    else if( scroll >= $(block[6]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(6)').addClass(crt);
    }

    else if( scroll >= $(block[5]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(5)').addClass(crt);
    }

    else if( scroll >= $(block[4]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(4)').addClass(crt);
    }

    else if( scroll >= $(block[3]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(3)').addClass(crt);
    }

    else if( scroll >= $(block[2]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(2)').addClass(crt);
    }

    else if( scroll >= $(block[1]).find('[class|=title]').offset().top + mg_ancor -1) {
        list.find('li').removeClass(crt).end()
            .find('li:nth-child(1)').addClass(crt);
    }

    // re-count top position for modals block
    modalTopPosition();
});
$(window).scroll();
/* end scroll function
 *
 *
 * ---------------------------
 * RESIZE FUNCTION
 * --------------------------*/
 $(window).resize(function(){
     var win_H = $(window).height(),
         win_W = $(window).width();

     // размер маски-фона под мод.окнами
     //$('#fade').css({
     //    'width': $(window).width(),//+100,
     //    'height': $(document).height()
     //});

     $('.modal').each(function(){

     // пересчитаем высоту модальных окон
         if(win_H < 490) {
             $(this).outerHeight(win_H);
             $(this).css({'overflow-y': 'scroll'});
         } else {
             if(win_W <= maxMob) {
                 $(this).outerHeight(win_H);
                 $(this).css({'overflow-y': 'visible'});
             } else {
                 $(this).outerHeight('auto');
                 $(this).css({'overflow-y': 'visible'});
             }
         }

     // пересчет top позиции для модальных окон
         modalTopPosition();
     });

     // пересчет размера меню для мобильных
     menuResize();


     //// слайдер для шапки
     if (is_mobile() || win_W <= maxMob) {
         $('.line-icons > div')
             .addClass('flex')
             .flexslider({
                 selector: '> span',
                 animation: 'fade',
                 animationLoop: true,
                 slideshow: true,
                 slideshowSpeed: 4000,
                 animationSpeed: 1500,
                 initDelay: 1000,
                 pauseOnHover: false,
                 pauseOnAction: false,
                 controlNav: false,
                 directionNav: false,
                 keyboard: false
             });
     } else {

         if($('.line-icons > div').data('flexslider')) {
             $('.line-icons > div').removeClass('flex')
                 .data('flexslider','');
         }
     }

 });
 $(window).resize();
/* end resize function
 *
 *
 * ---------------------------
 * DOCUMENT KEYUP
 * --------------------------*/
$(document).on('keyup', function(e){

    // закрываем модальное окно на 'Esc'
    var modal = $('.modal'),
        bg = $('#fade'),
        key = e.keyCode;

    modal.each(function(){
        if( key == 27 &&
            $(this).css('display') == 'block') {
            $(this).fadeOut(500);
            bg.fadeOut(550);
            //$('html,body').css('overflow','auto');
            $('body').removeClass('modal-open');
        }
    });
});
/* end document keyup
 *
 *
 * ---------------------------
 * CORRECT TITLE MARGIN (in .box-resheniya)
 * --------------------------*/
$(".box-resheniya .title p").each(function(){
    if($(this).height() > 35)
        $(this).css('margin-top','-15px');
});
/* end correct title margin
 *
 *
 * ---------------------------
 * ГАЛЕРЕЯ В ПОРТФОЛИО
 * --------------------------*/
$('.project .img').click(function(){

    var this_img = $(this).find('img').data('img');

    var src = {}, i = 0, index = 0;
    $('.box-portfolio .project img').each(function(){
        var url_img = $(this).data('img') || $(this).attr('src');
        if(url_img == this_img) index = i;
        src[i] = url_img;
        i++;
        return index;
    });

    /**/
    var newel = [];
    i = 0;
    $.each(src, function(){
        newel[i] = {'src':src[i],'thumb':src[i]};
        i++;
    });

    /**/

    $(this).lightGallery({
        dynamic:true,
        counter: false,
        download: false,
        index: index,
        dynamicEl: newel,
        showThumbByDefault: false
    });
});
/* end галерея для десктопа
 *
 *
 * ---------------------------
 * MODAL OPEN/CLOSE
 * --------------------------*/
// Определяем положение модального окна
function modalTopPosition() {
    $('.modal').each(function(){
        //if($(this).css('display') == 'block') return false; // убрать комментарий, если нужно "плавающее" окно
        var h_win = $(window).height(),
            h_el = $(this).height(),
            scr = $(window).scrollTop();

        if($(window).width() < maxMob) {
            $(this).css({
                'top': scr
            });
        } else {
            $(this).css({
                'top': scr + ((h_win - h_el) / 2)
            });
        }
    });
}

var btn_callback = $('.callback');
btn_callback.on('click', function(e){
    e.preventDefault();

    var btn = $(this),
        id = btn.data('call');

    //$('html,body').css('overflow','hidden');
    $('body').addClass('modal-open');

    $('#fade').fadeIn(500)
        .on('click', function(){
            $(id).fadeOut(500);
            $('#thanks').fadeOut(500);

            $(this).fadeOut(550);
            //$('html,body').css('overflow','auto');
            $('body').removeClass('modal-open');
        });

    $(id).delay(400).fadeIn(500)
        .find('.modal-close')
            .on('click', function(){
                $(id).fadeOut(500);
                $('#fade').fadeOut(550);
                //$('html,body').css('overflow','auto');
                $('body').removeClass('modal-open');
            });
});
/* end modal open/close
 *
 *
 * ---------------------------
 * INPUT VALID
 * --------------------------*/
function validInput(obj) {
    if(obj.hasClass('i-user')) {
        if(obj.val() == '' || /^[ ]+$/.test(obj.val())) {
            obj.removeClass('ok').addClass('error');

        } else if(!/[a-zA-Zа-яА-Я- ]+/.test(obj.val())) {
            obj.removeClass('ok').addClass('error');

        } else {
            obj.removeClass('error').addClass('ok');
        }

    } else if(obj.hasClass('i-phone')) {
        if(obj.val() == '' ) {
        //if(obj.val() == '' || /[ ]+/.test(obj.val())) {
            obj.removeClass('ok').addClass('error');

        } else if(/[_]+/.test(obj.val())) {
            obj.removeClass('ok').addClass('error');

        } else {
            obj.removeClass('error').addClass('ok');
        }
    }
}
/* end input valid
 *
 *
 * ---------------------------
 * MODAL INPUT FIELDS
 * --------------------------*/
// маска для телефонных номеров
//Inputmask().mask($('.i-phone'));

//$(".i-phone").mask("(999) 999-99-99"); /*m*/

//$(".i-phone").mask("+7(999) 999-99-99"); /*mask2*/


//    ***************************
if(!is_mobile()){

    Inputmask().mask($('.i-phone'));

    $('.i-phone')
        .removeAttr('required')
        .removeAttr('pattern')
        .removeAttr('title')
        .attr({'placeholder':'Введите номер телефона'});

}
//    ***************************

$('.modal input[type=text]').each(function(){

    validInput($(this));

    if($(this).hasClass('i-user')) {
        var tname = $(this).attr('placeholder'),
            n = $(this);

        n   .keyup(function(){
                // предотвращаем вставку некорректных данных
                n.val(n.val().replace(/[^a-zA-Zа-яА-Я- ]/gim,'').replace(/[-]{2,}/gim,'-').replace(/[ ]{2,}/gim,' ').replace(/( - | -|- )/gim,'-'));

                // отслеживаем вводимые символы
                var type = n.val().substring(n.val().length, n.val().length - 1);

                if(!/[a-zA-Zа-яА-Я- ]/.test(type)) {
                    n.val(n.val().substring(0, n.val().length - 1));
                }
                validInput(n);
            })
            .focus(function(){
                n.val(n.val().trim());
                $(this).attr('placeholder','');
                if($(this).val() == tname)
                    $(this).val('');
            })
            .blur(function(){
                $(this).attr('placeholder',tname);
                n.val(n.val().trim());

                n.addClass('light');
                setTimeout(function(){
                    n.removeClass('light');
                }, 700);
            });
    }

    if($(this).hasClass('i-phone')) {
        var p = $(this);

        p   .keyup(function(){
                validInput(p);
            })
            .blur(function(){
                p.addClass('light');
                setTimeout(function(){
                    p.removeClass('light');
                }, 700);
                
            });
    }
});
/* end modal input fields
 *
 *
 * ---------------------------
 * MODAL FORM SEND
 * --------------------------*/
$('.modal form').addClass('stop')
    .on('submit', function(){
    var form    = $(this),
        modal   = form.parent().parent(),
        id      = modal.attr('id'),
        name_form = modal.find('.modal-title h3').text(),
        fields  = 'id=' + id + '&'
                    + 'form_name=' + name_form + '&'
                    + form.serialize();

    $.ajax({
        url: url + '/js/sendform.php',
        method: 'post',
        data: fields,
        beforeSend: function() {
            var inp = form.find('input[type="text"]');

            inp.each(function(){
                validInput($(this));
            });

            if(inp.hasClass('error')) {
                form.addClass('stop');
                inp.addClass('light');
                setTimeout(function(){
                    inp.removeClass('light');
                }, 700);
                return false;
            } else form.removeClass('stop');

        },
        error: function() {
            $('#' + id).fadeOut(500);
            $('#fade').fadeOut(550);
            alert("Произошла ошибка!");
        },
        success: function(data) {
            /*x*/console.log(data);

            if(!data) {
                alert("Ошибка отправки письма..");
                return false;
            } else return true;
        },
        complete: function() {
            $('#' + id).fadeOut(500);

            $('#thanks').delay(1000).fadeIn(550)
                .find('.modal-close')
                .on('click', function(){
                    $('#thanks').fadeOut(500);
                    $('#fade').fadeOut(550);
                });

            form.find('input[type=text]').val('');
        }
    });
    return false;
});
    $('.modal-form .button').on('click', function(){
        $(this).parent().submit();
    });
/* end modal form send
 *
 *
 * ---------------------------
 * ...
 * --------------------------*/



}); /* end $(function(){} */
