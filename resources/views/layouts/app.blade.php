<!DOCTYPE html>
<html lang="{{ get_current_locale($domain)['code'] }}">
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

</head>
<body class="antialiased">
@if($domain === 'global')
    @include('layouts._header-global')
    @yield('content')
    @include('layouts._footer-global')

@elseif($domain === 'au')
    @include('layouts._header-au')
    @yield('content')
    @include('layouts._footer-au')
@endif

{{--Foot JS--}}
<script src="{{ mix('js/foot.js') }}"></script>

</body>
</html>
