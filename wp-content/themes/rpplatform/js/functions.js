/* global screenReaderText */
/**
 * Theme functions file.
 */

jQuery(document).ready(function($){

    $("#owl-slider").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1439,3],
        itemsDesktopSmall : [959,2],
        itemsMobile : [479,1],
        navigation : false,
        pagination : false
    });

    $('.bxslider').bxSlider({
        pager: false
    });

    $('.modal-dialog .modal-body form div textarea').focus(function(){
        $('.modal-dialog .modal-body form div textarea').addClass('onfocus');
    });

    $(window).scroll(function(){
        var cheader = $('.site-header-front');
        var sticky = $('#navigation');
        var scroll = $(window).scrollTop();

        if (scroll >= 1) {
            cheader.addClass('header-fixed');
            sticky.addClass('fixed');
        } else {
            cheader.removeClass('header-fixed');
            sticky.removeClass('fixed');
        }
    });

    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $(document).ajaxComplete(function(event, request, settings) {
        if($('#modal-request-demo .sent').length > 0 || $('#modal-start-trial .sent').length > 0 || $('#modal-request-pricing .sent').length > 0){
            $('.modal-dialog .modal-body').addClass('hide-body');
            $('.modal-dialog .modal-body .wpcf7').addClass('hide-body-form');
            $('.modal-dialog .modal-header #form-title').addClass('hidden');
            $('.modal-dialog .modal-header #form-title-success').addClass('show');
            $('.modal-dialog .modal-header #form-title-success h4').addClass('slow-show');
        }
        if($('.request-callback .sent').length > 0){
            $('#modal-thank-you .modal-header #form-title-success').addClass('show');
            $('#modal-thank-you .modal-header #form-title-success h4').addClass('slow-show');
            $('#modal-thank-you').modal();
        }
    });

    var priceColsCollectionOne = $('#tab-1 .m-col');
    var priceColsCollectionTwo = $('#tab-2 .m-col');
    var prisingFormOrderInput = $('#modal-request-pricing input[name="rpd-order"]');

    priceColsCollectionOne.each(function() {
        var that = $(this);

        that.find($('.order-button')).each(function () {
            $(this).click(function () {
                prisingFormOrderInput.val(that.find($('.order-lable')).text());
            });
        });
    });

    priceColsCollectionTwo.each(function() {
        var that = $(this);

        that.find($('.order-button')).each(function () {
            $(this).click(function () {
                prisingFormOrderInput.val(that.find($('.order-lable')).text());
            });
        });
    });

    var currencyButtons = $('#pricing-plans .btn-container .btn-default-rp');
    var currencyFields = $('.tab-content .m-col .currency-field');

    currencyButtons.each(function() {
        var that = $(this);

        $(this).click(function () {
            currencyFields.each(function() {
                if($(this).attr('data-currency') == that.attr('data-currency')) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });

            currencyButtons.each(function() {
                if ($(this).attr('data-currency') == that.attr('data-currency')) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        });
    });
});
