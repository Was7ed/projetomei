
$('#section2-car').owlCarousel({
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


$('#footer-car').owlCarousel({
    smartSpeed:1000,
    autoplay:true,
    center:true,
    stagePadding:300,
    loop:true,
    items:1,
    slideBy:'page',
    margin:200,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1,
            margin:50,
            stagePadding: 10
        },
        700:{
            items:1,
            margin:50,
            stagePadding: 10
        },
        1000:{
            items:1
        }
    }
})

$('#noticias-car').owlCarousel({
    smartSpeed:1000,
    autoplay:true,
    center:true,
    stagePadding:20,
    loop:true,
    items:3,
    slideBy:'page',
    margin:50,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:1,
            margin:50,
            stagePadding: 10
        },
        700:{
            items:2,
            margin:50,
            stagePadding: 10
        },
        1000:{
            items:3
        }
    }
})


