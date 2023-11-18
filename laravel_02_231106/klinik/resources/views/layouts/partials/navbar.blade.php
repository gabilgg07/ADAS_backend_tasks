<?php
    $url = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{route('home.index')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('home.index')}}" class="nav-item nav-link {{$url==='/'?'active':''}}">Home</a>
            <a href="{{route('about.index')}}" class="nav-item nav-link {{$url==='/about'?'active':''}}">About</a>
            <a href="{{route('service.index')}}" class="nav-item nav-link {{$url==='/service'?'active':''}}">Service</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link dropdown-toggle {{$url==='/feature' || $url==='/team' || $url==='/appointment' || $url==='/testimonial'?'active':''}}"
                    data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{route('feature.index')}}"
                        class="dropdown-item {{$url==='/feature'?'active':''}}">Feature</a>
                    <a href="{{route('team.index')}}" class="dropdown-item {{$url==='/team'?'active':''}}">Our
                        Doctor</a>
                    <a href="{{route('appointment.index')}}"
                        class="dropdown-item {{$url==='/appointment'?'active':''}}">Appointment</a>
                    <a href="{{route('testimonial.index')}}"
                        class="dropdown-item {{$url==='/testimonial'?'active':''}}">Testimonial</a>
                </div>
            </div>
            <a href="{{route('contact.index')}}" class="nav-item nav-link {{$url==='/contact'?'active':''}}">Contact</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Appointment<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>