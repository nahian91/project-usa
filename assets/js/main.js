
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

    
    var typed = new Typed('.team-title', {
        strings: ['See Our Skilled Expert Team'],
        smartBackspace: true, // Default value
        loop: true,
        typeSpeed: 100,
        backSpeed : 50
    });
    var typed = new Typed('.service-title', {
        strings: ['We Provide Exclusive Service'],
        smartBackspace: true, // Default value
        loop: true,
        typeSpeed: 100,
        backSpeed : 50
    });
    var typed = new Typed('.blog-title', {
        strings: ['Get Every Single Update Blog'],
        smartBackspace: true, // Default value
        loop: true,
        typeSpeed: 100,
        backSpeed : 50
    });
    var typed = new Typed('.testimonial-title', {
        strings: ['Let’s Here What Are The Customer Saying'],
        smartBackspace: true, // Default value
        loop: true,
        typeSpeed: 100,
        backSpeed : 50
    });
    var typed = new Typed('.process-title', {
        strings: ['Industry Best Practices to the Core'],
        smartBackspace: true, // Default value
        loop: true,
        typeSpeed: 100,
        backSpeed : 50
    });
});

$(window).scroll(function(){
    var winTop = $(window).scrollTop();
    if(winTop >= 30){
      $(".header").addClass("sticky");
    }else{
      $(".header").removeClass("sticky");
    }//if-else
});//win func.


