<?php
    $bg = 'assets/images/header/Frame 1.png';
?>

<header class="header" style="background-image: url('{{asset($bg)}}');">
    <div class="menu">
        <i class="fa fa-window-close" aria-hidden="true"></i>
        @include("client.layouts.partials.nav")
    </div>
    <div class="container">
        <div class="header__top">
            <div class="header__top__wrapper">
                <div class="header__top__tel">
                    <span>
                        <img src="{{asset('assets/icons/navbar/carbon_phone-filled.png')}}" alt="">
                    </span>
                    <span><a href="">+994 50 000 00 00</a></span>
                </div>
                <div class="header__top__logo"><a href="{{route('client.home.index')}}">LOGO</a></div>
                <div class="header__top__lang">
                    <span>
                        <img src="{{asset('assets/icons/navbar/icon-park-outline_earth.png')}}" alt="">
                    </span>
                    <span>EN</span>
                </div>
                <div class="header__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <div class="navbar__wrapper">
                @include("client.layouts.partials.nav")
            </div>
        </nav>
        <div class="header__body">
            <div class="header__body__wrapper">
                <h1 class="header__body__title">Awaken Your <br> <span>Inner Chef</span>
                </h1>
                <div class="header__body__footer">
                    <a href="" class="header__body__footer__more custom__button">Learn more</a>
                    <a href="" class="header__body__footer__videolink custom__links">Watch the video</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__img">
        <img src="{{asset('assets/images/header/Group 1 (2).png')}}" alt="">
    </div>
</header>