
$(document).ready(function(){
    $('.testimonial__items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button type="button" class="testimonial__arrow"><i class="fa-solid fa-arrow-left-long"></i></button>',
        nextArrow: '<button type="button" class="testimonial__arrow testimonial__arrow--right"><i class="fa-solid fa-arrow-right-long"></i></button>',
        autoplay: true,
        autoplaySpeed: 5000
    });

    $('.counter__number').counterUp({
        delay: 10,
        time: 1000
    });
});


