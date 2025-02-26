$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1, 
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 }
        }
    });
});
