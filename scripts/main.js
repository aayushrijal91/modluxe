// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"],a[href="#about"],a[href="#portfolio"],a[href="#team"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(() => {
    $('.portfolio-slider').slick({
        slidesToShow:1,
        variableWidth: true,
        dots: true,
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