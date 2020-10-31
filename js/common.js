$(document).ready(function() {

	$(".button").magnificPopup({
		type: 'inline',
    removalDelay: 500, 
    callbacks: {
    	beforeOpen: function () {
    		this.st.mainClass = this.st.el.attr('data-effect');
    	}
    },
    midClick: true 
  });

  $(".toggle-mnu").click(function() {
    $(this).toggleClass("on");
    $(".main-mnu").slideToggle();
    return false;
  });

	$(".toggle_mnu").click(function() {
		$(".main-mnu").toggleClass("active");
	});

	$(".mfp-gallery").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-1").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-2").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-3").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-4").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-5").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-6").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".mfp-gallery-7").magnificPopup({
		type:"image",
		closeOnContentClick: true,
		image: {
			verticalFit: false
		},
		gallery: {
			enabled: true
		},
	});

	$(".prem_block span").height('auto').equalHeights();
  $(".prem_block p").height('auto').equalHeights();

  $(".testimonial_item").each(function(e) {

        var th = $(this);

        th.attr("href", "#resp_img-" + e)
            .find(".testimonial_popup")
                .attr("id", "resp_img-" + e);

    });
    $(".testimonial_item").magnificPopup({
        mainClass: 'my-mfp-zoom-in',
        removalDelay: 500,   
        type: 'inline',
    });

    $("#nav-section ul a").mPageScroll2id();
    $("footer ul a").mPageScroll2id();


});

$(window).load(function() {


}); 


$(document).ready( function() {

	if($('.slick-carousel').length > 0) {
		$('.recent-works.slick-carousel .portfolio-container').slick({
			dots: true,
			slidesToShow: 3,
			cssEase: 'ease-in',
			prevArrow: '<button type="button" data-role="none" class="btn slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="btn slick-next">Next</button>',
			responsive: [
				{
					breakpoint: 993,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 481,
					settings: {
						slidesToShow: 1
					}
				}
			]
		});

		$('#carousel-hero .carousel-inner').slick({
			speed: 800,
			dots: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 2500,
			prevArrow: '<button type="button" data-role="none" class="carousel-control left slick-prev">Previous</button>',
			nextArrow: '<button type="button" data-role="none" class="carousel-control right slick-next">Next</button>',
		});
	}

});


