(function($) {
    "use strict";

    // Preloader
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(300).fadeOut('slow', function() {
                $(this).remove();
            });
        }
    });

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 2500, 'easeInOutBack');
        return false;
    });

    // Initiate the wowjs animation library
    new WOW().init();

    var wave1 = $('#wave1').wavify({
        height: 490,
        bones: 2,
        amplitude: 200,
        color: 'rgba(251, 227, 75, 0.3)',
        speed: .35
    });

    wave1.updateColor({
        color: 'rgba(251, 216, 0, 0.5)',
        timing: 8
    });

    var wave2 = $('#wave2').wavify({
        height: 540,
        bones: 5,
        amplitude: 120,
        color: 'rgba(251, 227, 75, 0.4)',
        speed: .25
    });

    wave2.updateColor({
        color: 'rgba(253, 231, 109, 0.7)',
        timing: 8
    });

    var wave3 = $('#wave3').wavify({
        height: 580,
        bones: 3,
        amplitude: 70,
        color: 'rgba(253, 231, 109, 1)',
        speed: .25
    });

    var wave4 = $('#wave4').wavify({
        height: 930,
        bones: 2,
        amplitude: 200,
        color: 'rgba(251, 227, 75, 0.3)',
        speed: .35
    });

    wave4.updateColor({
        color: 'rgba(251, 216, 0, 0.5)',
        timing: 8
    });

    var wave5 = $('#wave5').wavify({
        height: 890,
        bones: 5,
        amplitude: 120,
        color: 'rgba(251, 227, 75, 0.4)',
        speed: .25
    });

    wave5.updateColor({
        color: 'rgba(253, 231, 109, 0.7)',
        timing: 8
    });

    var wave6 = $('#wave6').wavify({
        height: 990,
        bones: 3,
        amplitude: 70,
        color: 'rgba(253, 231, 109, 1)',
        speed: .25
    });

    // COSA FACCIAMO animations
    $('#cosa-facciamo').waypoint(function() {
        var textWrapper = document.querySelector('.ml1 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        var cosa = anime.timeline({
                loop: false
            })
            .add({
                targets: '.ml1 .letter',
                scale: [0.3, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 1200,
                delay: (el, i) => 70 * (i + 1),
                loop: 1
            });
    }, {
        offset: '100%'
    });

    // COME LAVORIAMO animation
    $('#metodo').waypoint(function() {
        var textWrapper = document.querySelector('.ml2 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        var cosa = anime.timeline({
                loop: false
            })
            .add({
                targets: '.ml2 .letter',
                scale: [0.3, 1],
                opacity: [0, 1],
                translateZ: 0,
                easing: "easeOutExpo",
                duration: 1400,
                delay: (el, i) => 100 * (i + 1),
                loop: 1
            });
    }, {
        offset: '100%'
    });

    //cambia icona on hover
    $('.uno').mouseover(function() {
        $('#img-uno').addClass('d-none');
        $('#img-sei').removeClass('d-none');
    }).mouseout(function() {
        $('#img-uno').removeClass('d-none');
        $('#img-sei').addClass('d-none');
    });

    $('.due').mouseover(function() {
        $('#img-due').addClass('d-none');
        $('#img-sette').removeClass('d-none');
    }).mouseout(function() {
        $('#img-due').removeClass('d-none');
        $('#img-sette').addClass('d-none');
    });

    $('.tre').mouseover(function() {
        $('#img-tre').addClass('d-none');
        $('#img-otto').removeClass('d-none');
    }).mouseout(function() {
        $('#img-tre').removeClass('d-none');
        $('#img-otto').addClass('d-none');
    });

    $('.quattro').mouseover(function() {
        $('#img-quattro').addClass('d-none');
        $('#img-nove').removeClass('d-none');
    }).mouseout(function() {
        $('#img-quattro').removeClass('d-none');
        $('#img-nove').addClass('d-none');
    });

    $('.cinque').mouseover(function() {
        $('#img-cinque').addClass('d-none');
        $('#img-dieci').removeClass('d-none');
    }).mouseout(function() {
        $('#img-cinque').removeClass('d-none');
        $('#img-dieci').addClass('d-none');
    });

    //animazione empatizziamo
    TweenLite.set(stepuno, {
        x: 0,
        xPercent: -200
    });
    $('#uno').on('click', function() {
        $('#stepuno').removeClass('d-none');

        TweenMax.to(stepuno, 0.8, {
            xPercent: 7,
            ease: Power1.easeInOut,
        });
    });


    $('.close-icon').on('click', function() {
        TweenMax.to(stepuno, 0.6, {
            xPercent: -120,
            ease: Power1.easeInOut,
        });
        $('#stepuno').addClass('d-none');
    });

    //clicca qui stop
    $('#uno').on('click', function() {
      $('#img-uno').removeClass('blob');
      $('#clicca-qui').addClass('d-none');
    });



    //animazione esploriamo
    TweenLite.set(stepdue, {
        x: 0,
        xPercent: -120
    });
    $('#due').on('click', function() {
        $('#stepdue').removeClass('d-none');
        TweenMax.to(stepdue, 0.8, {
            xPercent: 7,
            ease: Power1.easeInOut,
        });
    });


    $('.close-icon').on('click', function() {
        TweenMax.to(stepdue, 0.6, {
            xPercent: -120,
            ease: Power1.easeInOut,
        });
        $('#stepdue').addClass('d-none');
    });

    //animazione ideiamo
    TweenLite.set(steptre, {
        x: 0,
        xPercent: -120
    });
    $('#tre').on('click', function() {
        $('#steptre').removeClass('d-none');
        TweenMax.to(steptre, 0.8, {
            xPercent: 7,
            ease: Power1.easeInOut,
        });
    });


    $('.close-icon').on('click', function() {
        TweenMax.to(steptre, 0.6, {
            xPercent: -120,
            ease: Power1.easeInOut,
        });
        $('#steptre').addClass('d-none');
    });

    //animazione testiamo
    TweenLite.set(stepquattro, {
        x: 0,
        xPercent: -120
    });
    $('#quattro').on('click', function() {
        $('#stepquattro').removeClass('d-none');
        TweenMax.to(stepquattro, 0.8, {
            xPercent: 7,
            ease: Power1.easeInOut,
        });
    });


    $('.close-icon').on('click', function() {
        TweenMax.to(stepquattro, 0.6, {
            xPercent: -120,
            ease: Power1.easeInOut,
        });
        $('#stepquattro').addClass('d-none');
    });

    //animazione sviluppiamo
    TweenLite.set(stepcinque, {
        x: 0,
        xPercent: -120
    });
    $('#cinque').on('click', function() {
        $('#stepcinque').removeClass('d-none');
        TweenMax.to(stepcinque, 0.8, {
            xPercent: 7,
            ease: Power1.easeInOut,
        });
    });

    $('.close-icon').on('click', function() {
        TweenMax.to(stepcinque, 0.6, {
            xPercent: -120,
            ease: Power1.easeInOut,
        });
        $('#stepcinque').addClass('d-none');
    });


    //footer
    $('#footer').hover(function() {
        $('#social-bar').addClass('remove-bar');
    });

    $('#footer').mouseover(function() {
        $('#social-bar').addClass('remove-bar');
    }).mouseout(function() {
        $('#social-bar').removeClass('remove-bar');
    });

    $('.nav-link').on('click', function() {
        $('#navbarSupportedContent').toggle();
    });

    $('.navbar-toggler').on('click', function() {
        $('#navbarSupportedContent').toggle();
    });

    $('.close').on('click', function() {
        $('#navbarSupportedContent').toggle();
    });
})(jQuery);
