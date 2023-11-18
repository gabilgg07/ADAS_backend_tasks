<?php
    $url = $_SERVER["REQUEST_URI"];
    $page = '';
    $pageHeaderName = '';
    switch ($url) {
        case '/':
            $page = $pageHeaderName ='Home';
            break;
        case '/about':
            $page = 'About';
            $pageHeaderName = 'About Us';
            break;
        case '/service':
            $page = $pageHeaderName ='Service';
            break;
        case '/contact':
            $page = $pageHeaderName ='Contact';
            break;
        case '/feature':
            $page = $pageHeaderName ='Feature';
            break;
        case '/team':
            $page = $pageHeaderName ='Doctors';
            break;
        case '/appointment':
            $page = $pageHeaderName ='Appointment';
            break;
        case '/testimonial':
            $page = $pageHeaderName ='Testimonial';
            break;
        default:
            $page = $pageHeaderName ='404 Error';
            break;
    }
?>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">{{$pageHeaderName}}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home.index')}}">Home</a></li>
                @if ($url === '/feature' || $url === '/team' || $url === '/appointment' || $url === '/testimonial')
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                @endif
                <li class="breadcrumb-item text-primary active" aria-current="page">{{$page}}</li>
            </ol>
        </nav>
    </div>
</div>