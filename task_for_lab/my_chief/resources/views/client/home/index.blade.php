@extends("client.layouts.master")

@section("content")

<section class="aboutUs">
    <div class="container">
        <div class="aboutUs__wrapper">
            <div class="aboutUs__left">
                <h2 class="aboutUs__title custom__title">
                    About us
                </h2>
                <div class="custom__text aboutUs__desc">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta
                    sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                    quia
                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    <br><br>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                    sed quia
                    non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                </div>
                <div class="aboutUs__footer">
                    <a href="" class="custom__button aboutUs__footer__more">Learn more</a>
                    <a href="" class="custom__links aboutUs__footer__videoLink">Watch the video</a>
                </div>
            </div>
            <div class="aboutUs__right">
                <img src="{{asset('assets/images/aboutus/aboutus.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="services__top">
            <div class="custom__title services__title">
                Services
            </div>
            <div class="custom__text services__desc">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo.
            </div>
            <div class="services__button">
                <a class="custom__button" href="">Learn more</a>
            </div>
        </div>
        <div class="services__slider">

            <div class="slide__wrapper">
                <div class="slider">
                    <a href="./service.html">
                        <div class="slider__image__box">
                            Lorem ipsum
                        </div>
                        <img class="services__slider__img" src="{{asset('./assets/images/services/products.png')}}">
                    </a>
                    <a href="./service.html">
                        <div class="slider__image__box">
                            Lorem ipsum
                        </div>
                        <img class="services__slider__img" src="{{asset('assets/images/services/products.png')}}">
                    </a>
                    <a href="./service.html">
                        <div class="slider__image__box">
                            Lorem ipsum
                        </div>
                        <img class="services__slider__img" src="{{asset('assets/images/services/products.png')}}">
                    </a>
                    <a href="./service.html">
                        <div class="slider__image__box">
                            Lorem ipsum
                        </div>
                        <img class="services__slider__img" src="{{asset('assets/images/services/products.png')}}">
                    </a>
                    <a href="./service.html">
                        <div class="slider__image__box">
                            Lorem ipsum
                        </div>
                        <img class="services__slider__img" src="{{asset('assets/images/services/products.png')}}">
                    </a>
                    <a href="./service.html">
                        <div class="slider__image__box">
                            Lorem ipsum
                        </div>
                        <img class="services__slider__img" src="{{asset('assets/images/services/products.png')}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products mainmenu__prod">
    <div class="container">
        <div class="products__top">
            <div class="custom__title">Products</div>
            <a href="./products.html" class="products__top__link">all products</a>
        </div>
        <div class="products__wrapper">
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p1.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p2.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p3.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p4.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p1.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p2.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p3.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
            <a href="./product.html" class="products__item">
                <img src="{{asset('assets/images/products/p4.png')}}" alt="">
                <div class="products__item__text">Lorem ipsum</div>
            </a>
        </div>
    </div>
    <a href="./products.html" class="mini__link">
        all products
    </a>
</section>
<section class="team">
    <div class="container">
        <h4 class="custom__title team__title">Our team</h4>
        <div class="slider__wrapper">

            <div class="team__slider">


                <a href="./ourteam.html" class="team__slider__box">
                    <div class="team__slider__box__wrapper">
                        <div class="team__slider__box__desc">
                            <h5 class="team__slider__box__desc__title">Lorem ipsum</h5>
                            <div class="team__slider__box__desc__body">unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque laudantium, totam rem aperiam
                            </div>
                        </div>
                        <div class="team__slider__box__image">
                            <img src="{{asset('assets/images/ourteam/chief.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="./ourteam.html" class="team__slider__box">
                    <div class="team__slider__box__wrapper">
                        <div class="team__slider__box__desc">
                            <h5 class="team__slider__box__desc__title">Lorem ipsum</h5>
                            <div class="team__slider__box__desc__body">unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque laudantium, totam rem aperiam
                            </div>
                        </div>
                        <div class="team__slider__box__image">
                            <img src="{{asset('assets/images/ourteam/chief.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="./ourteam.html" class="team__slider__box">
                    <div class="team__slider__box__wrapper">
                        <div class="team__slider__box__desc">
                            <h5 class="team__slider__box__desc__title">Lorem ipsum</h5>
                            <div class="team__slider__box__desc__body">unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque laudantium, totam rem aperiam
                            </div>
                        </div>
                        <div class="team__slider__box__image">
                            <img src="{{asset('assets/images/ourteam/chief.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="./ourteam.html" class="team__slider__box">
                    <div class="team__slider__box__wrapper">
                        <div class="team__slider__box__desc">
                            <h5 class="team__slider__box__desc__title">Lorem ipsum</h5>
                            <div class="team__slider__box__desc__body">unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque laudantium, totam rem aperiam
                            </div>
                        </div>
                        <div class="team__slider__box__image">
                            <img src="{{asset('assets/images/ourteam/chief.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="./ourteam.html" class="team__slider__box">
                    <div class="team__slider__box__wrapper">
                        <div class="team__slider__box__desc">
                            <h5 class="team__slider__box__desc__title">Lorem ipsum</h5>
                            <div class="team__slider__box__desc__body">unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque laudantium, totam rem aperiam
                            </div>
                        </div>
                        <div class="team__slider__box__image">
                            <img src="{{asset('assets/images/ourteam/chief.png')}}" alt="">
                        </div>
                    </div>
                </a>
                <a href="./ourteam.html" class="team__slider__box">
                    <div class="team__slider__box__wrapper">
                        <div class="team__slider__box__desc">
                            <h5 class="team__slider__box__desc__title">Lorem ipsum</h5>
                            <div class="team__slider__box__desc__body">unde omnis iste natus error sit voluptatem
                                accusantium
                                doloremque laudantium, totam rem aperiam
                            </div>
                        </div>
                        <div class="team__slider__box__image">
                            <img src="{{asset('assets/images/ourteam/chief.png')}}" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <a href="./ourteams.html" class="see__link">see more</a>
    </div>
</section>
<section class="contactUs">
    <div class="container">
        <div class="custom__title">Contact us</div>
        <div class="contactUs__wrapper">
            <div class="contactUs__contacts">
                <div class="contactUs__contact location">
                    <span>
                        <img src="{{asset('assets/icons/contactus/location.png')}}" alt="">
                    </span>
                    <span>quasi architecto beatae vitae dicta sunt
                    </span>
                </div>
                <div class="contactUs__contact tel">
                    <span>
                        <img src="{{asset('assets/icons/contactus/tel.png')}}" alt="">
                    </span>
                    <a>+994 55 555 55 55
                    </a>
                </div>
                <div class="contactUs__contact email">
                    <span>
                        <img src="{{asset('assets/icons/contactus/email.png')}}" alt="">
                    </span>
                    <a>randommail@gmail.com
                    </a>
                </div>
                <div class="contactUs__contact">
                    <span>
                        <img src="{{asset('assets/icons/contactus/watch.png')}}" alt="">
                    </span>
                    <span>Mon. — Fri:
                        08:00 - 17:00
                    </span>
                </div>
            </div>
            <div class="contactUs__map contactUs__map__main">
                <img class="contactUs__map__img" src="{{asset('assets/images/contactus/image 2.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection