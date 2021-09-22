$( document ).ready(function() {

    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 200, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1200, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
    if ($(".main-banner__container").length){
        var swiper = new Swiper(".main-banner__container", {
            scrollbar: {
                el: ".main-banner__controls .pagination",
                hide: true,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
    };

    if ($(".popup-fade").length){
        $(".js-zapisatsia").click( function(e) {
            var CurrentAbonement = $(this).closest('.best__item').find('.best__item-title').html();
            $('input.zakaz').val(CurrentAbonement);
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-zapisatsa').fadeIn(300);
        });
        $(".close-zapisatsa").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-zapisatsa').fadeOut(300);
        });
        $(".js-callback").click( function(e) {
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-callback').fadeIn(300);
        });
        $(".close-callback").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-callback').fadeOut(300);
        });
        $(".js-try").click( function(e) {
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-try').fadeIn(300);
        });
        $(".close-try").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-try').fadeOut(300);
        });
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('body').removeClass('locked');
            $('.popup-fade > div').fadeOut(300);
            $('.popup-fade').fadeOut(300);
            $('.wpcf7-response-output').empty();
            setTimeout(function (){
                $('#success-send').removeClass('active-popup');
            }, 2000);
        }, false );
    };
    if ($(".header").length){
        $(".mobile-burger").click( function(e) {
            $('.mobile-menu').fadeToggle().css('display', 'flex');
            $('body').toggleClass('locked');
        });
        $(".mobile-menu li a").click( function(e) {
            $('.mobile-menu').fadeOut(300);
            $('body').toggleClass('locked');
        });
    };
});




