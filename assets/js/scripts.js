$('.menu_catalog_link>ul>li').hover(function () {
    $(this).toggleClass('open');
})

$(document).ready(function () {
    var $block = $('header .bottom_block');
    var blockTop = $block.offset().top - $(window).scrollTop(); // расстояние от верха блока до верха окна
    $(window).on('resize', function() {
        $('.menu_catalog_link').css('height', $(window).height() - blockTop - 100);
    })
    $('.menu_catalog_link').css('height', $(window).height() - blockTop - 100);
})

$(document).on('click', '.show_more_link_menu', function () {
    $(this).siblings('.children_link').toggleClass('show');
})

$(document).on('click', '.add_in_basket', function () {
    $(this).children('span').hide();
    $(this).children('.in_basketed').addClass('show');
    $(this).addClass('no_active')
})

var mainSlide = new Swiper(".main_slide", {
    navigation: {
        nextEl: ".main_slide .btn_next",
        prevEl: ".main_slide .btn_prev",
    },
    loop: true,
    spaceBetween: 30,
});

window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.phone'), function(input) {
        var keyCode;
        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            var pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            var matrix = "+7 (___)-___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                new_value = matrix.replace(/[_\d]/g, function(a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                });
            i = new_value.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                new_value = new_value.slice(0, i)
            }
            var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function(a) {
                    return "\\d{1," + a.length + "}"
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
            if (event.type == "blur" && this.value.length < 5)  this.value = ""
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false)

    });

});

$('.svg').each(function(){
    const $img = $(this);
    const imgClass = $img.attr('class');
    const imgURL = $img.attr('src');
    $.get(imgURL, function(data) {
        let $svg = $(data).find('svg');
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }
        $img.replaceWith($svg);
    }, 'xml');
});