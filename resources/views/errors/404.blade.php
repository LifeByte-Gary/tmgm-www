@extends('layouts.app')

@section('content')
    <div class="Page404">
        <div class="tm-container tm-commonweb clearfix">
            <div class="Page404-img">
                <img src="/en/img/404-img.png" alt="">
                <div class="Page404-title">Page not found</div>
            </div>
            <div class="Page404-content">
                <div class="Page404-text">
                    Sorry, we couldn't find the page
                    <br>
                    you are looking for. But here are some options
                    <br>
                    that might help you
                </div>
                <div class="Page404-link">
                    <a href="https://portal.tmgm.com/register?register_type=demo&language=en">Try a Demo Account</a>
                    <a href="https://portal.tmgm.com/register?language=en">Open an Account</a>
                    <a href="https://www.tmgm.com/en/">Home Page</a>
                    <a href="https://v2.zopim.com/widget/popout.html?key=36H7HmdeytBAZh4q3201xZoJUbuyP993"
                       target="_blank">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
@endsection
