$('#footer').css('margin-top',$(document).height() - ($('#header').height() + $('#content').height()  ) - $('#footer').height());


$('#back-to-top').on('click', function (e) {
    e.preventDefault();
    $('html,body').animate({
        scrollTop: 0
    }, 700);
});


$(function() {

    $('.toggle-button').click(function(j) {
  
      $('.toggle-button').not(this).children('.rotate').removeClass("down");
  
      $(this).children('.rotate').toggleClass("down");
  
      
  
      var accordion = $(this).closest('.accordion-body').find('.body-content-accor');
  
      $(this).closest('.accordion-list').find('.body-content-accor').not(accordion).slideUp();
  
  
  
      if ($(this).hasClass('active')) {
  
        $(this).removeClass('active');
  
      } else {
  
        $(this).closest('.accordion-list').find('.toggle-button.active').removeClass('active');
  
        $(this).addClass('active');
  
      }
      accordion.stop(false, true).slideToggle();
  
      j.preventDefault();
  
    });
  
  });



  $(function() {
				$('.do-dont').matchHeight({byRow:false});
  });
  
  // for toggle button on header
  $('.navbar-toggler').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('navbar-toggler--active');
  });

  // for toggling button
  $('.navbar-toggler').click(function() {
    $("header").toggleClass("change_header_bg").toggleClass("main_header_bg");
 });

 $(function() {
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 300) {
          $("header").addClass("active_bg");
      } else {
         $("header").removeClass("active_bg");
      }
  });
});




$(function(){
  $('.selectpicker').selectpicker();
});

$(document).ready(function() {
  $('.news .owl-carousel').owlCarousel({
    margin: 50,
    items: 3,
    center: true,
    responsiveClass:true,
    loop: true,
    responsive:{
    0:{
        items:1
    },
    768:{
        items:2,
    }, 
    1024:{
        items:3
    }
  }							        							    
});
  $('.news .news-card .news-content h3 ').matchHeight({byRow:false});
  $('.news .news-card .news-content p ').matchHeight({byRow:false});
  $('.MYID-coin .coin-card ').matchHeight({byRow:false});


  
});



// AOS.init({
//   easing: 'ease-out-back',
//   duration: 1000,
//   offset: 120,
//   once:true,
//   // disable: 'mobile'
//   });

AOS.init({
  easing: 'ease-out-back',
  duration: 500,
  offset: 50,
  once:true,
  // disable: 'mobile'
  });

  $(window).ready(function(){
      // SCROLL ANIMATION
      wow = new WOW(
      {
          animateClass: 'animated',
          offset:       250,
          callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
      }
      );
      wow.init();
  });

	// window.sr = ScrollReveal();
  //       var fade = {
  //           reset: true,
  //           viewOffset: { bottom: 64 }
  //       }
  //   sr.reveal(".news-reveal", fade, 500);
    

  (function(){

    var doc = document.documentElement;
    var w = window;
  
    var prevScroll = w.scrollY || doc.scrollTop;
    var curScroll;
    var direction = 0;
    var prevDirection = 0;
  
    var header = document.getElementById('site-header');
  
    var checkScroll = function() {
  
      /*
      ** Find the direction of scroll
      ** 0 - initial, 1 - up, 2 - down
      */
  
      curScroll = w.scrollY || doc.scrollTop;
      if (curScroll > prevScroll) { 
        //scrolled up
        direction = 2;
      }
      else if (curScroll < prevScroll) { 
        //scrolled down
        direction = 1;
      }
  
      if (direction !== prevDirection) {
        toggleHeader(direction, curScroll);
      }
      
      prevScroll = curScroll;
    };
  
    var toggleHeader = function(direction, curScroll) {
      if (direction === 2 && curScroll > 52) { 
        
        //replace 52 with the height of your header in px
  
        header.classList.add('hide');
        prevDirection = direction;
      }
      else if (direction === 1) {
        header.classList.remove('hide');
        prevDirection = direction;
      }
    };
    
    window.addEventListener('scroll', checkScroll);
  
  })();

     
  $(document).ready(function () {
    var typed = new Typed('#typed', {
        strings: ["This is yours, This is Ours."],
        startDelay: 500,
        backSpeed: 50,
        typeSpeed: 50,
        backDelay: 4000,
        loop: true,
    });
});

$(".js-modal-btn").modalVideo();

// For wallet function




