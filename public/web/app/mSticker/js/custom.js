$(document).ready(function(){

  $(".more_contents1").hide();
	$(".more_contents2").hide();
 
  	$(".get_more_pack_a").click(function(){
       $(".more_contents1").fadeIn(1500);
  	   $(".more_contents2").fadeIn(3000);
  	   $(".get_more_pack").fadeOut(1000);
       $(".all_pupular_stkr_pack").css("overflow-y", "scroll");
  	 });
});


$(document).scroll(function() {
  if ($(this).scrollTop() >= 20) {
    $('#return_to_top').fadeIn(200);
  } else {
    $('#return_to_top').fadeOut(200);
  }
});

$('#return_to_top').click(function() {
  $('body,html').animate({
    scrollTop: 0
  }, 1000, 'swing');
});


$(document).on('ready', function() {
  
  $(".center").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    responsive: [
        {
          breakpoint: 968,
          settings: {
            arrows: false,
            centerMode: true,
            // centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            // centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
  });
  
});