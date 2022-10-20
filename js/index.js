jQuery(function ($) {

    $('.c-button--menu').on('click', function () {
        $('.p-aside,.l-aside,.l-container,.l-footer').addClass('open');
        $('.c-mask').fadeIn();
    });

    $('.c-button--close').on('click', function () {
        $('.l-container,.l-footer').removeClass('open');
        $('.c-mask').fadeOut();
        $('.p-aside,.l-aside').removeClass('open');
    });

});