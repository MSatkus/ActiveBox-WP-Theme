$(document).ready(function(){

   	var $header = $(".menu-header");
   	var $logo = $('.header-logo'); 
   	$(window).on("scroll resize", function() {
   		if (document.documentElement.offsetWidth > 1199) {
			if($(this).scrollTop() > 100){
	          	$header.css('background-color', "rgba(0, 0, 0, 0.7" );
		        $logo.css('margin', '20px 0');
		    }else{
		        $header.css('background-color', "transparent" );
		        $logo.css('margin', '40px 0');
			}
		}else{
			$header.css('background-color', '#21272a');
		}
	});


    $('.toggle').click(function(){
        $('ul').toggleClass('active');
   	});

	$("nav a").click(function(e){
   		e.preventDefault();
	    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top-70 }, 1000);
	});

	$(".hero-button").click(function(e){
   		e.preventDefault();
	    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top-70 }, 1000);
	});

   	$('.bandomSlick').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        pauseOnHover: false,
    });


    $('.responsive').slick({
  		dots: true,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 3,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 2
			}
		}
		]
	});
});