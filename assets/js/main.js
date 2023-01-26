
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


function myTimer() {
    var ending = jQuery("#timer").attr("data-endtime"),
        endTime = new Date(ending);
    endTime = Date.parse(endTime) / 1000;
  
    var now = new Date();
    now = Date.parse(now) / 1000;
  
    var timeLeft = endTime - now;
  
    var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor((timeLeft - days * 86400) / 3600);
    var minutes = Math.floor((timeLeft - days * 86400 - hours * 3600) / 60);
    var seconds = Math.floor(
      timeLeft - days * 86400 - hours * 3600 - minutes * 60
    );
  
    if (days < "10") {
      days = "0" + days;
    }
    if (days < "1") {
      days = "0";
    }
    if (hours < "10") {
      hours = "0" + hours;
    }
    if (hours < "1") {
      hours = "0";
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (minutes < "1") {
      minutes = "0";
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }
    if (seconds < "1") {
      seconds = "0";
    }
  
    $("#timer").html(
      "<span id='days'>" +
      days +
      "</span><h4> Days</h4>" +
      "<span id='hours'> - " +
      hours +
      "</span><h4> Hrs</h4>" +
      "<span id='minutes'> - " +
      minutes +
      "</span><h4> Mins</h4>" +
      "<span id='seconds'> - " +
      seconds +
      "</span><h4> Secs</h4>"
    );
  }
  
  setInterval(function() {
    myTimer();
  }, 1000);
  

  