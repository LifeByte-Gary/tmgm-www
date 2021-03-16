@extends('layouts.app')

@section('content')
    <div class="tm-main-banner" style="background-image:url({{ asset('img/banner-img-bk.jpg') }})">
        @include('home._banner')
    </div>

    @include('layouts._get-started')
@endsection
