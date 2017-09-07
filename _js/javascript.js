
$('.owl-carousel').owlCarousel({
	smartSpeed:1000,
	autoplayTimeout:4000,
	autoplay:true,
	center:false,
	stagePadding:30,
    loop:true,
	items:1,
    margin:50,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:2
        }
    }
})

