<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title>{{ __('contact.title') }}</title>

    @include('website.layouts.head')
</head>

<!-- page wrapper -->

<body class="{{ app()->getLocale() }}">
<div class="boxed_wrapper">
    <!-- preloader -->
{{--    <div class="loader-wrap">--}}
{{--        <div class="preloader">--}}
{{--            <div class="preloader-close">x</div>--}}
{{--            <div id="handle-preloader" class="handle-preloader">--}}
{{--                <div class="animation-preloader">--}}
{{--                    <div class="spinner"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- preloader end -->

    <!-- main header -->
    @include('website.layouts.header')
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box" style="direction: rtl; text-align: right">
            <div class="nav-logo">
                <a href="javascript:void(0)">
                    <img style="width: 190px" src="{{ asset('assets/website/images/logo_quadrash.png') }}" alt="LOGO">
                </a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>{{ __('home.contact') }}</h4>
                <ul>
                    <li>{{ __('offers.address_1') }}</li>
                    <li>{{ __('offers.address_2') }}</li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-x"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->


    <!-- Page Title -->
    <section class="page-title p_relative pt_250 pb_170 centred"
             style="
          background-image: url('{{ asset('assets/website/images/banner/Home_2.png') }}');
          background-position: center;
          height: 650px;
        ">
        <div class="bg-layer p_absolute r_100 t_0"></div>
        <div class="large-container">
            <div class="content-box p_relative d_block z_5">
                <div class="title mb_25">
                    <h1 class="d_block fs_68 lh_76 color_white fw_exbold">{{ __('contact.title') }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    @if ($errors->any())
        <div class="alert alert-danger mt-2" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <!-- contact-style-three -->
    <section class="contact-style-three p_relative pt_110 pb_120" style="direction: rtl">
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">
                    {{ __('contact.title') }}
                </h2>
            </div>
            <div class="row clearfix d-flex align-items-center justify-content-center">
                <div
                    class="col-lg-9 d-flex align-items-center justify-content-center col-md-12 col-sm-12 form-column">
                    <div class="form-inner ">
                        @session('message')
                        <div x-data x-init="setTimeout(_ => $el.remove(), 5000)" class="alert alert-success mt-2" role="alert">
                            <span>{{ $value }}</span>
                        </div>
                        @endsession
                        <form method="post" action="{{ route('contact.store') }}" id="contact-form"
                              class="default-form">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="name"
                                           placeholder="{{ __('contact.form_input_1') }}" required=""/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="phone" required=""
                                           placeholder="{{ __('contact.form_input_2') }}"/>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide" name="service_id">
                                            <option data-display="{{ __('contact.choose') }}">
                                                {{ __('contact.choose') }}
                                            </option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide" name="offer_type">
                                            <option data-display="{{ __('contact.type') }}">
                                                {{ __('contact.type') }}</option>
                                            @foreach (\App\Enums\OfferType::cases() as $offerType)
                                                <option value="{{ $offerType->value }}">{{ $offerType->label() }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <textarea name="message" placeholder="{{ __('contact.form_input_8') }}"></textarea>
                                </div>

                                <div class="col-lg-12 mb-3 col-md-12 col-sm-12"
                                     style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                                    <div class="form-check ">
                                        <input class="form-check-input " type="checkbox" value="checked"
                                               id="flexCheckChecked" checked>
                                        <label class="form-check-label mr-3" for="flexCheckChecked">
                                            {!! __('internship.form_input_9') !!}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0"
                                     style="text-align: center;">
                                    <button class="theme-btn btn-one rounded-lg w-100" style="text-align: center;"
                                            type="submit" name="submit-form">
                                        {{ __('internship.form_input_10') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="contact-cards mt-5">
                <!-- Card 1 -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>{{ __('contact.email') }}</h3>
                    <p>info@qudraha.com</p>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>{{ __('contact.phone') }}</h3>
                    <p>0115120188<br>0112216636<br>0541111426</p>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>{{ __('contact.branch') }}</h3>
                    <p>
                        {{ __('offers.address_1') }}<br>
                        {{ __('offers.address_2') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-three end -->

    <!-- subscribe-section -->
    @include('website.layouts.subscribe')
    <!-- subscribe-section end -->

    <!-- main-footer -->
    @include('website.layouts.footer')
    <!-- main-footer end -->

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-long-arrow-up"></span>
    </button>
</div>

@include('website.layouts.scripts')
</body>
<!-- End of .page_wrapper -->

</html>
