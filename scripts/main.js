// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"], a[href="#services"], a[href="#contact-us"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(() => {
    $('.asbestos-location-btn').on('click', function(){
        $('.asbestos-location-btn').removeClass('active');
        $(this).addClass('active');
        
        $('.pointer').css('display', 'none');
        $(`.${$(this).attr('data-target')}`).css('display', 'block');
    });

    $("#hide-slide-nav").on('click', function() {
        $('.slide-navigation').removeClass('show');
    });

    $('.slide-navigation ul.nav-list a').on('click', function() {
        $('.slide-navigation').removeClass('show');
    });
    
    $('#slide-nav-enquire').on('click', function() {
        $('.slide-navigation').removeClass('show');
    });

    $("#show-slide-nav").on('click', function() {
        $('.slide-navigation').addClass('show');
    });

    $('#license-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        // autoplay: true,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    })
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