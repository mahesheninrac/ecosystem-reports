$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1, 
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 }
        }
    });

});

$(document).ready(function () {
    $(".carousel-card.owl-carousel").owlCarousel({
        items: 1, 
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 },
           
        }
    });

});
