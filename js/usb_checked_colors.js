$(document).ready(function () {
    $(".usb-size-box__slot").click(function () {
        $(".usb-size-box__slot").removeClass("active"); 
        $(this).addClass("active"); 
    });
});

$(document).ready(function() {
    $('.case-color .color').click(function() {
        $('.case-color .color').removeClass('checked'); 
        $(this).addClass('checked');
    });

    $('.badge-color .color').click(function() {
        $('.badge-color .color').removeClass('checked');
        $(this).addClass('checked'); 
    });
});

$(document).ready(function() {
    $('.usb-img-box__slot').on('click', function() {
        const parentBox = $(this).closest('.usb-img-box');       
        parentBox.find('.usb-img-box__slot').removeClass('active');
        $(this).addClass('active');
    });
});

$(document).ready(function () {
    $(".usb-branding-box-first-type__slot").click(function () {
        $(".usb-branding-box-first-type__slot").removeClass("active"); 
        $(this).addClass("active"); 
    });
});

$(document).ready(function () {
    $(".usb-branding-box-second-type__slot").click(function () {
        $(".usb-branding-box-second-type__slot").removeClass("active"); 
        $(this).addClass("active"); 
    });
});