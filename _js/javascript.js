
$('.owl-carousel').owlCarousel({
	smartSpeed:1000,
	autoplay:true,
	center:false,
	stagePadding:30,
    loop:true,
	items:2,
    slideBy:'page',
    margin:50,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:2
        }
    }
})




