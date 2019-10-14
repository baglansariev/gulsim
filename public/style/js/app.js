$(function(){
    $('.phone_mask').mask('+7(999)999-99-99', {autoclear: false});
    $('.slides.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.about-me-slider.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        dots: false,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('.certificates.owl-carousel').owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        dots: false,
        responsive:{
            0:{
                items:2,
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    $('.work-gallery-image').click(function () {
        let src = $(this).data('src');
        $('.work-img').css('background-image', 'url(' + src + ')');
        $('.work-picture').fadeIn();
    });
    $('.work-img-close').click(function () {
        $('.work-picture').fadeOut();
    });

    // Переключение бокового меню
    $('.mobile-burger').click(function () {
        $('.mobile-menu').fadeIn();
    });

    $('.mobile-menu-close').click(function () {
        $('.mobile-menu').fadeOut();
    });

    // Эффект цвета услуг
    $('.forecast-service').on('mouseover', function () {
        $(this).css('background-color', '#F96D57');
        $(this).find('.forecast-icon').css('color', '#fff');
        $(this).find('.forecast-text').css('color', '#fff');
    });
    $('.forecast-service').on('mouseleave', function () {
        $(this).css('background-color', '#0D0D0D');
        $(this).find('.forecast-icon').css('color', '#F96D57');
        $(this).find('.forecast-text').css('color', '#888');
    });

    $('.magical-button').click(function () {
        let popup = $(this).siblings('.popup-magical');
        popup.fadeIn();
    });
    $('.popup-magical-close').click(function () {
        let popup = $(this).parents('.popup-magical');
        popup.fadeOut();
    });
    
    $('.main-video-play').click(function () {
        $('.video-play').fadeIn();
    });
    $('.video-play').click(function () {
        $('.video-play').fadeOut();
    });

    $('.certificate').click(function () {
        let img = $(this).data('img');
        $('.certificate-zoom img').attr('src', img);
        $('.certificate-cover').fadeIn();
    });

    $('.certificate-close').click(function () {
        $('.certificate-cover').fadeOut();
    });



    $('.desktop-menu ul li a').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        $([document.documentElement, document.body]).animate({
            scrollTop: $(id).offset().top
        }, 1000);
    });

    $('.mobile-menu ul li a').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        $('.mobile-menu').animate({
            right: '-100%',
        }, 500);

        $([document.documentElement, document.body]).animate({
            scrollTop: $(id).offset().top
        }, 1000);

        $('.mobile-menu').fadeOut();
    });

    // Кнопка вверх
    $('.go-to-top').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $('#main').offset().top
        }, 1000);
    });

    // Кнопка вниз
    $('.go-down').click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $('#services').offset().top
        }, 1000);
    });



    // Управление Формой обратной связи
    $('.slide-button').click(function () {
        $('.contact-form').fadeIn();
    });
    $('#appointment').click(function(){
        $('.contact-form').fadeIn();
    });
    $('.about-us-button').click(function () {
        $('.contact-form').fadeIn();
    });

    $('.modal-feedback-close').click(function(){
        $('.contact-form').fadeOut();
    });

    $('.contact-form').click(function(e){
        if(e.target == $('.contact-form')[0]){
            $('.contact-form').fadeOut();
        }
    });




    var modalFormButton = $('#modal-send');
    var mainFormButton = $('#main-send');
    modalFormButton.click(function (e) {
        e.preventDefault();

        if($('[name=modal-captcha]').val() == 12){
            ajaxMessageSend(modalFormButton, $('.modal-feedback form').serialize());
        }
        else{
            modalFormButton.before('<i style="color: red;">Ответ на контрольный вопрос неверный<i>');
        }
    });

    mainFormButton.click(function (e) {
        e.preventDefault();

        if($('[name=main-captcha]').val() == 12){
            ajaxMessageSend(mainFormButton, $('.modal-feedback form').serialize());
        }
        else{
            mainFormButton.before('<i style="color: red;">Ответ на контрольный вопрос неверный<i>');
        }
    });

    function ajaxMessageSend(button, data){
        $.ajax({
            type: "POST",
            url: "/mail",
            data: data,
            dataType: "JSON",
            success: function(ans) {
                if(ans.success){
                    button.before('<i style="color: #fff;">' + ans.success + '<i>');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
                if(ans.error){
                    button.before('<i style="color: red;">' + ans.error + '<i>');
                }
            },
            error: function(ans){
                console.log(ans);
            }
        });
    }
});