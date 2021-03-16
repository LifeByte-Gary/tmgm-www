<header class="tm-main-header">
    {{-- Desktop Header --}}
    <div class="tm-container flx logo-row">
        <div class="tm-logo-holder">
            <a href="/">
                <img src="{{ asset('img/main-logo.png') }}" alt="TMGM"/>
            </a>
        </div>
        <div class="top-lang">
            @switch(get_current_locale($domain)['url'])
                @case('en')
                <a href="https://competition.tmgm.com/en/" target="_blank" class="btn-rounded white">
                    {{ __('layouts/header.header.btn_1') }}
                </a>
                <a href="https://portal.tmgm.com/login?language=en" target="_blank" class="btn-rounded white-line">
                    {{ __('layouts/header.header.btn_2') }}
                </a>
                <a href="https://portal.tmgm.com/register?language=en" target="_blank" class="btn-rounded white">
                    {{ __('layouts/header.header.btn_3') }}
                </a>
                @break

                @case('chs')
                <a href="https://competition.tmgm.com/cn/" target="_blank" class="btn-rounded white">
                    {{ __('layouts/header.header.btn_1') }}
                </a>
                <a href="https://portal.tmgm.com/login?language=zh" target="_blank" class="btn-rounded white-line">
                    {{ __('layouts/header.header.btn_2') }}
                </a>
                <a href="https://portal.tmgm.com/register?language=zh" target="_blank" class="btn-rounded white">
                    {{ __('layouts/header.header.btn_3') }}
                </a>
                @break
            @endswitch
            <span class="lang-trigger">
                    <img src="{{ asset('/img/flag-uk.png') }}" alt=""/>
                </span>

            <div class="select-language-drop">
                @foreach(get_active_locales($domain) as $locale)
                    <a href="javascript:" data-href="{{ route('pages.home', ['locale' => $locale['url']]) }}"
                       class="item-lang">
                        <img src="{{ asset($locale['flag']) }}" alt=""/>
                        <span>{{ $locale['description'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Desktop Header Ends --}}

    {{-- Desktop Navbar --}}
    <div class="tm-container flx nav-row">
        <nav>
            <div class="tm-container">
                <ul>
                    <li class="has-submenu">
                        <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.1') }}</a>
                        <ul class="tm-submenu">
                            <li>
                                <a href="{{ route('pages.markets', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.1_1') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.forex', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.1_2') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.shares', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.1_3') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.metals', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.1_4') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.energies', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.1_5') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.indices', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.1_6') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.2') }}</a>
                        <ul class="tm-submenu">
                            <li>
                                <a href="{{ route('pages.trading-platforms', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.2_1') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.mt4', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.2_2') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.mt5', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.2_3') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.iress', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.2_4') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.3') }}</a>
                        <ul class="tm-submenu">
                            <li>
                                <a href="{{ route('pages.markets', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.3_1') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.trading-accounts', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.3_2') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.deposit-and-withdrawal', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.3_3') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.tmgm-pro', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.3_4') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.4') }}</a>
                        <ul class="tm-submenu">
                            <li>
                                <a href="{{ route('pages.hubx', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.4_1') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.trade-with-ao', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.4_2') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.5') }}</a>
                        <ul class="tm-submenu">
                            <li>
                                <a href="{{ route('pages.partnership-plans', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.5_1') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.6') }}</a>
                        <ul class="tm-submenu">
                            <li>
                                <a href="{{ route('pages.about', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.6_1') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.why-us', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.6_2') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.regulations', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.6_3') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.legal-documents', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.6_4') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.contact', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.6_5') }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.ao-21', get_current_locale($domain)['url']) }}">
                                    {{ __('layouts/header.nav.sub_nav.6_6') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- Desktop Navbar Ends --}}

    {{-- Desktop Sticky Navbar --}}
    <div class="sticky-header-nav-prime">
        <div class="flx">
            <div class="responsive-logo-holder">
                <a href="/">
                    <img src="{{ asset('img/main-logo.png') }}" alt="TMGM"/>
                </a>
            </div>
            <nav class="mobile-nav">
                <div class="mobile-menu-items-wraper">
                    <ul>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.1') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.markets', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.forex', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.shares', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.metals', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_4') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.energies', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_5') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.indices', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_6') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.2') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.trading-platforms', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.mt4', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.mt5', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.iress', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_4') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.3') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.markets', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.trading-accounts', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.deposit-and-withdrawal', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.tmgm-pro', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_4') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.4') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.hubx', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.4_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.trade-with-ao', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.4_2') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.5') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.partnership-plans', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.5_1') }}
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.6') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.about', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.why-us', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.regulations', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.legal-documents', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_4') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.contact', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_5') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.ao-21', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_6') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="tm-btn-holder">
                <a href="https://portal.tmgm.com/register" target="_blank" class="btn-rounded white
                    get-started-btn">
                    {{ __('layouts/header.header.btn_3') }}
                </a>
            </div>
        </div>
    </div>
    {{-- Desktop Sticky Navbar Ends --}}

    {{-- Mobile Header --}}
    <div class="sticky-header-nav">
        <div class="flx">
            <div class="responsive-logo-holder">
                <a href="{{ route('pages.home', get_current_locale($domain)['url']) }}">
                    <img src="{{asset('img/logo.png')}}" alt="TMGM">
                </a>
            </div>

            {{-- Mobile Menu Nav --}}
            <nav class="mobile-nav">
                    <span class="close-menu">
                        ×
                    </span>
                <div class="tm-btn-wrapper tm-pt-40 t-al-c">
                    @switch(get_current_locale($domain)['url'])
                        @case('en')
                        <a href="https://portal.tmgm.com/register?language=en" target="_blank" class="btn-rounded white
                    get-started-btn t-dn m-dib">
                            {{ __('layouts/header.header.btn_3') }}
                        </a>
                        <a href="https://portal.tmgm.com/login?language=en" target="_blank"
                           class="btn-rounded white-line t-dn m-dib">
                            {{ __('layouts/header.header.btn_2') }}
                        </a>
                        @break

                        @case('chs')
                        <a href="https://portal.tmgm.com/register?language=zh" target="_blank" class="btn-rounded white
                    get-started-btn t-dn m-dib">
                            {{ __('layouts/header.header.btn_3') }}
                        </a>
                        <a href="https://portal.tmgm.com/login?language=zh" target="_blank"
                           class="btn-rounded white-line t-dn m-dib">
                            {{ __('layouts/header.header.btn_2') }}
                        </a>
                        @break
                    @endswitch
                </div>

                <div class="mobile-menu-items-wraper tm-pt-40">

                    <ul>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.1') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.markets', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.forex', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.shares', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.metals', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_4') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.energies', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_5') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.indices', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.1_6') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.2') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.trading-platforms', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.mt4', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.mt5', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.iress', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.2_4') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.3') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.markets', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.trading-accounts', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.deposit-and-withdrawal', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.tmgm-pro', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.3_4') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.4') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.hubx', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.4_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.trade-with-ao', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.4_2') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.5') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.partnership-plans', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.5_1') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="javascript:void(0);">{{ __('layouts/header.nav.main_nav.6') }}</a>
                            <ul class="tm-submenu">
                                <li>
                                    <a href="{{ route('pages.about', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.why-us', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.regulations', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_3') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.legal-documents', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_4') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.contact', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_5') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.ao-21', get_current_locale($domain)['url']) }}">
                                        {{ __('layouts/header.nav.sub_nav.6_6') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="competition-btn">
                        @switch(get_current_locale($domain)['url'])
                            @case('en')
                            <a href="https://competition.tmgm.com/en/" class="btn-rounded white get-started-btn"
                               target="_blank">
                                {{ __('layouts/header.header.btn_1') }}
                            </a>
                            @break

                            @case('chs')
                            <a href="https://competition.tmgm.com/cn/" class="btn-rounded white get-started-btn"
                               target="_blank">
                                {{ __('layouts/header.header.btn_1') }}
                            </a>
                            @break
                        @endswitch
                    </div>
                </div>
            </nav>
            {{-- Mobile Menu Nav Ends --}}

            {{-- Mobile Header Button Wrapper --}}
            <div class="tm-btn-holder">
                @switch(get_current_locale($domain)['url'])
                    @case('en')
                    <a href="https://portal.tmgm.com/register?language=en" target="_blank"
                       class="btn-rounded white get-started-btn t-dib m-dn">
                        {{ __('layouts/header.header.btn_3') }}
                    </a>
                    <a href="https://portal.tmgm.com/login?language=en" target="_blank"
                       class="btn-rounded white-line t-dib m-dn">
                        {{ __('layouts/header.header.btn_2') }}
                    </a>
                    @break

                    @case('chs')
                    <a href="https://portal.tmgm.com/register?language=zh" target="_blank"
                       class="btn-rounded white get-started-btn t-dib m-dn">
                        {{ __('layouts/header.header.btn_3') }}
                    </a>
                    <a href="https://portal.tmgm.com/login?language=zh" target="_blank"
                       class="btn-rounded white-line t-dib m-dn">
                        {{ __('layouts/header.header.btn_2') }}
                    </a>
                    @break
                @endswitch

                <span class="lang-trigger">
                        <img src="{{ asset('img/flag-uk.png') }}" alt="">
                        <span>EN</span>
                    </span>
                <div class="select-language-drop">
                    @foreach(get_active_locales($domain) as $locale)
                        <a href="javascript:" data-href="{{ route('pages.home', ['locale' => $locale['url']]) }}" class="item-lang">
                            <img src="{{ asset($locale['flag']) }}" alt="">
                            <span>{{ $locale['description'] }}</span>
                        </a>
                    @endforeach
                </div>
                <span class="menu-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
            </div>
            {{-- Mobile Header Button Wrapper Ends --}}
        </div>
    </div>
    {{-- Mobile Header Ends --}}

</header>

