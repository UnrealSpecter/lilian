$(document).ready(function(){

    $('.box-closed').on('click', function(){
        $(this).addClass('d-none');
        $('.box-open').removeClass('d-none');
        $('.initial').removeClass('invisible');
    });

    $('.initial').on('mouseenter', function(){
        $(this).addClass('invisible').prev().removeClass('invisible');
    });

    $('.to-be-revealed').on('mouseleave', function(){
        $(this).addClass('invisible').next().removeClass('invisible');
    });

});
