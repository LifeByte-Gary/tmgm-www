<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{--Normalize CSS--}}
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">

    {{--Third party CSS--}}
    <link rel="stylesheet" href="{{ mix('css/third-parties.css') }}">

    {{--Core CSS--}}
    <link rel="stylesheet" href="{{ asset('css/core.css') }}">

    {{--Core JS--}}
    <script src="{{ mix('js/app.js') }}"></script>

    {{--JQuery UI--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}

</head>
<body class="antialiased">
@if($domain === 'global')
    @include('layouts._header-global')
    @include('layouts._language-panel')
    @yield('content')
    @include('layouts._footer-global')

@elseif($domain === 'au')
    @include('layouts._header-au')
    @include('layouts._language-panel')
    @yield('content')
    @include('layouts._footer-au')
@endif

{{--Foot JS--}}
<script src="{{ mix('js/foot.js') }}"></script>

{{--Owl Carousel JS
<script src="{{asset('owl/owl.carousel.min.js')}}"></script>

AOS JS
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800
    });
    window.addEventListener("load", function (event) {
        lazyload();
    });
</script>--}}

</body>
</html>
