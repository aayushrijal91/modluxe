// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"],a[href="#about"],a[href="#portfolio"],a[href="#team"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function initPlaces() {
    if ($('#suburb').length) {
        new google.maps.places.Autocomplete(
            document.getElementById('suburb'),
            { types: ['geocode'] }
        );
    }
};

$(() => {
    $('.portfolio-slider').each(function() {
      let e = $(this);

      e.slick({
          slidesToShow:1,
          variableWidth: true,
          dots: true,
          prevArrow: false,
          nextArrow: e.parent().find('.nextArrow'),
      });
    });

    $("#about-slider-1").slick({
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
        vertical: true,
        centerPadding: '220px',
        autoplay: true,
        autoplaySpeed: 1000,
    });
    $("#about-slider-2").slick({
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
        vertical: true,
        centerPadding: '220px',
        autoplay: true,
        autoplaySpeed: 3000,
    });
    $("#about-slider-3").slick({
        slidesToShow: 1,
        centerMode: true,
        arrows: false,
        vertical: true,
        centerPadding: '220px',
        autoplay: true,
        autoplaySpeed: 2000,
    });
})

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});