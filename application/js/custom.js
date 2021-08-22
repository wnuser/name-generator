// custom js for carousels
$(".main-slider").owlCarousel({
           items: 3,
           margin: 0,
           loop: true,
           nav: false,
           navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
           dots: true,
           dotsEach: true,
           center: false,
           animateOut: 'fadeOut',
           animateIn: 'fadeIn',
           autoplay: true,
           responsive: {
               0: {
                   items: 1
               },
               768: {
                   items: 1
               }
           }
       });


// project slider

$(".video-slider").owlCarousel({
           items: 3,
           margin: 0,
           loop: true,
           nav: true,
           navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
           dots: true,
           dotsEach: true,
           center: false,
           autoplay: false,
           responsive: {
               0: {
                   items: 1
               },
               768: {
                   items: 1
               }
           }
       });











$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
 
         

  $(".about-menu-mob").click(function(){
   $(".right-drop-ul").show();
  });
  $(".back-dis").click(function(){
   $(".right-drop-ul").hide();
  });

 $(".about-menu-mob-2").click(function(){
   $(".right-drop-ul").show();
  });
  $(".back-dis").click(function(){
   $(".right-drop-ul").hide();
  });

  $(".about-menu-mob-3").click(function(){
   $(".right-drop-ul").show();
  });
  $(".back-dis").click(function(){
   $(".right-drop-ul").hide();
  });
    




    

