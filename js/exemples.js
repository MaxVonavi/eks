$(document).ready(function() {

	//Слайдер с работами
	// $('.banner-slider').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	infinite: true,
  //   fade: true,
  //   arrows: true,
  //   dots: true,
	// });
	$('.image-block').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
    fade: true,
    arrows: true,
	});

	// $(document).ready(function() {
	//     $(".limenu").on("click","a", function (event) {
	//         event.preventDefault();
	//         var id  = $(this).attr('href'),
	//             top = $(id).offset().top;
	//
	//         $('body,html').animate({scrollTop: top}, 1000);
	//     });
	// });
	$(window).scroll(function() {
	        if ($(this).scrollTop() > 100) {
	            if ($('#upbutton').is(':hidden')) {
	                $('#upbutton').css({opacity : 1}).fadeIn('slow');
	            }
	        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
	    });
	$(document).ready(function(){
	    $("#upbutton").on("click","a", function (event) {
	        event.preventDefault();
	        var id  = $(this).attr('href'),
	            top = $(id).offset().top;

	        $('body,html').animate({scrollTop: top}, 1000);
	    });
	});
});
$(document).ready(function() {
  $('#indexHref').on('click', function () {
    window.open("index.php","_self");
  });
});
