<!DOCTYPE html>
<html lang="en">

<head>
    @include("client.layouts.partials.head")
</head>

<body>
    <div class="up">
        <img src="{{asset('assets/icons/footer/up.png')}}" alt="">
    </div>

    @include("client.layouts.partials.header")

    @yield("content")

    @include("client.layouts.partials.footer")

    @include("client.layouts.partials.scripts")
</body>

</html>