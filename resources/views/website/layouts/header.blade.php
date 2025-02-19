<header class="main-header header-style-one" style="background-color: #112e11;">
    <!-- header-lower -->
    <div class="header-lower">
        <div class="large-container">
            <div class="outer-box">
                <div class="logo-box mx-1">
                    <figure class="logo">
                        <a href="/"><img src="{{ asset('assets/website/images/LOGO_Sticky.png') }}" alt="logo"/></a>
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
                            <ul class="navigation clearfix">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}
                                        <i class="fas fa-chevron-down"></i>  <!-- سهم صغير لأسفل -->
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>


                                <li class="#"><a href="{{ route('contact') }}">تواصل معنا</a></li>

                                <li class="#"><a href="{{ route('blogs') }}">المدونة</a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown"
                                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        التدريب والتوظيف <i class="fas fa-chevron-down"></i> <!-- أيقونة السهم -->
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('internship') }}">فرص التدريب</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('apply') }}">فرص التوظيف</a></li>
                                    </ul>
                                </li>


                                <li class="">
                                    <a href="{{ route('services') }}">خدماتنا</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('offers') }}">العروض العقارية</a>
                                </li>
                                <li class="">
                                    <a href="{{ route('about') }}">من نحن</a>
                                </li>
                                <li class="">
                                    <a href="/">الرئيسية</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
                <div class="nav-right">
                    <div class="support-box">
                        <a href="tel:+966541111426" class="theme-btn btn-one">تواصل معنا</a>
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
                        <a href="{{route('home')}}"><img src="{{ asset('assets/website/images/LOGO_Sticky.png') }}"
                                                         alt="LOGO"/></a>
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
                        <a href="tel:+966541111426" class="theme-btn btn-one">تواصل معنا</a>

                        <!-- <h3><a href="tel:+966541111426">تواصل معنا</a></h3> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



{{--<nav class="navbar fixed-top navbar-expand-lg text-white" style="background-color: #112e11;">--}}
{{--    <div class="container">--}}
{{--        <!-- اللوجو -->--}}
{{--        <a class="navbar-brand" href="/">--}}
{{--            <img src="{{ asset('assets/website/images/LOGO_Sticky.png') }}" style="width: 180px;" alt="logo"/>--}}
{{--        </a>--}}

{{--        <!-- زر القائمة في الموبايل -->--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <!-- القائمة -->--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav {{ app()->getLocale() === 'ar' ? 'me-auto' : 'ms-auto' }} mb-2 mb-lg-0" style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white active" href="/">الرئيسية</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="{{ route('about') }}">من نحن</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="{{ route('offers') }}">العروض العقارية</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="{{ route('services') }}">خدماتنا</a>--}}
{{--                </li>--}}

{{--                <!-- التدريب والتوظيف -->--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">--}}
{{--                        التدريب والتوظيف--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a class="dropdown-item" href="{{ route('internship') }}">فرص التدريب</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{ route('apply') }}">فرص التوظيف</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="{{ route('blogs') }}">المدونة</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="{{ route('contact') }}">تواصل معنا</a>--}}
{{--                </li>--}}

{{--                <!-- تغيير اللغة -->--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">--}}
{{--                        {{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}--}}

{{--                    </a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                            <li>--}}
{{--                                <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                    {{ $properties['native'] }}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <!-- زر الاتصال -->--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="tel:+966541111426" class="btn btn-success ms-3">تواصل معنا</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
