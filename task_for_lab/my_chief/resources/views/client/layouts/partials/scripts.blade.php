<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('assets/script/slider.js')}}"></script>
<script src="{{asset('assets/script/script.js')}}"></script>
<script>
if (window.innerWidth < 600) {

    document.querySelector(".header__img img").src =
        '{{asset("assets/images/header/d0d79678bde22f01166c8159970ffe83 1.png")}}';
}





$('.team__slider').slick({
    infinite: true,
    slidesToShow: 3,
    centerMode: false,
    slidesToScroll: 1,

    prevArrow: '<button type="button" class="slider__arrow team__arrow__prev"><i class="fa fa-angle-right"></i></button>',
    nextArrow: '<button type="button" class="slider__arrow team__arrow__next"><i class="fa fa-angle-left"></i></button>',
    responsive: [{
            breakpoint: 1180,
            settings: {
                slidesToShow: 2,
                arrows: false
            }
        },
        {
            breakpoint: 560,
            settings: {
                slidesToShow: 1,
                arrows: false
            }
        }
    ]
});
$('.slider').slick({
    infinite: true,
    slidesToShow: 4,
    centerMode: false,
    slidesToScroll: 1,

    prevArrow: '<button type="button" class="slider__arrow services__arrow__prev"><i class="fa fa-angle-right"></i></button>',
    nextArrow: '<button type="button" class="slider__arrow services__arrow__next"><i class="fa fa-angle-left"></i></button>',
    responsive: [{
            breakpoint: 1180,
            settings: {
                slidesToShow: 3,
                arrows: false
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                arrows: false
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
                arrows: false
            }
        },
    ]
});
</script>