$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  
    $('.mess-btn').click(function() {
          $('.mess-box').toggle();
    });
  
    $('.btn-close').click(function() {
          $('.mess-box').hide();
    });
  
    $('.feedback-slick').slick({
      centerMode: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 5000,
      prevArrow: $('.left'),
      nextArrow: $('.right'),
      slidesToShow: 2,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 980,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
          }
        }
      ]
    });
  });
  