<header class="main-header header-style-one"  >
    <!-- header-lower -->
    <div class="header-lower">
        <div class="large-container">
            <div class="outer-box">
                <div class="logo-box mx-1 {{ app()->getLocale() === 'ar' ? 'rtl-logo' : 'ltr-logo' }}">
                    <figure class="logo">
                        <a href="/"><img src="{{ asset('assets/website/images/logo_quadrash.png') }}" alt="logo"/></a>
                    </figure>
                </div>
                <div class="menu-area clearfix">

                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>

                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            @if(app()->getLocale() === 'ar')
                                <ul class="navigation clearfix">
                                    <li class="dropdown">
                                        <a>
                                            {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                                            <i class="fas fa-chevron-down arrow_mob"></i>
                                        </a>
                                        <ul>
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a class="" rel="alternate"
                                                       hreflang="{{ $localeCode }}"
                                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="#"><a href="{{ route('contact') }}">{{__('home.contact')}}</a></li>

                                    <li class="#"><a href="{{ route('blogs') }}">{{__('home.blogs')}}</a></li>

                                    <li class=" dropdown">
                                        <a>
                                            {{__('home.dropdown')}}
                                            <i class="fas fa-chevron-down arrow_mob"></i>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('internship') }}">
                                                    {{__('home.train')}}
                                                </a>
                                            </li>
                                            <li><a href="{{ route('apply') }}">{{__('home.hire')}}</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="{{ route('services') }}">{{__('home.services')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('offers') }}">{{__('home.offers')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('about') }}">{{__('home.about')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="/">{{__('home.home')}}</a>
                                    </li>
                                </ul>
                            @else
                                {{--------------------------------}}
                                <ul class="navigation clearfix">
                                    <li class="">
                                        <a href="/">{{__('home.home')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('about') }}">{{__('home.about')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('offers') }}">{{__('home.offers')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{ route('services') }}">{{__('home.services')}}</a>
                                    </li>
                                    <li class=" dropdown">
                                        <a>
                                            {{__('home.dropdown')}}
                                            <i class="fas fa-chevron-down arrow_mob"></i>
                                        </a>
                                        <ul>
                                            <li><a href="{{ route('internship') }}">
                                                    {{__('home.train')}}
                                                    </a>
                                            </li>
                                            <li><a href="{{ route('apply') }}">{{__('home.hire')}}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="#"><a href="{{ route('blogs') }}">{{__('home.blogs')}}</a></li>
                                    <li class="#"><a href="{{ route('contact') }}">{{__('home.contact')}}</a></li>

                                    <li class=" dropdown">
                                        <a>
                                            {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                                            <i class="fas fa-chevron-down arrow_mob"></i>
                                        </a>
                                        <ul>
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a rel="alternate"
                                                       hreflang="{{ $localeCode }}"
                                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        {{ $properties['native'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            @endif

                        </div>
                    </nav>

                </div>
                <div class="nav-right">
                    <div class="support-box">
                        <a href="tel:+966541111426" class="theme-btn btn-one">{{__('home.contact')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="large-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets/website/images/logo_quadrash.png') }}" alt="LOGO"/>
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="nav-right">
                    <div class="support-box">
                        <!-- <div class="icon-box"><i class="far fa-phone"></i></div> -->
                        <a href="tel:+966541111426" class="theme-btn btn-one">{{__('home.contact')}}</a>

                        <!-- <h3><a href="tel:+966541111426">تواصل معنا</a></h3> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
