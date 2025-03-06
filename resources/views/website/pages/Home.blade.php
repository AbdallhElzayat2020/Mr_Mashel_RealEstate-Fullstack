<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{__('home.title')}}</title>

    @include('website.layouts.head')

</head>

<!-- page wrapper -->

<body class="{{ app()->getLocale() }}">

<div class="boxed_wrapper">

    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    @include('website.layouts.header')

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box" style="direction: rtl; text-align: right;">
            <div class="nav-logo">
                <a href="javascript:void(0)">
                    <img style="width: 190px" src="{{ asset('assets/website/images/logo_quadrash.png') }}" alt="LOGO">
                </a>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>{{__('home.contact')}}</h4>
                <ul>
                    <li>{{__('offers.address_1')}}</li>
                    <li>{{__('offers.address_2')}}</li>
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

    <!-- banner-section -->
    <section class="page-title p_relative pt_250 pb_170 centred"
             style="background-image: url({{asset('assets/website/images/banner/Home_2.png')}});background-position: center; height: 620px;">
        <div class="bg-layer p_absolute r_100 t_0">
        </div>
        <div class="large-container">
            <div class="content-box p_relative d_block z_5">
                <div class="title mb_25">
                    <h3 class="color_white d_block fs_30 lh_76 mb_35 fw_exbold">
                        {{__('home.tag')}}
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- about -->
    <section class="about-style-three p_relative sec-pad">
        <div class="large-container">
            <div class="row clearfix d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_5">
                        <div class="content-box p_relative d_block">
                            <div class="sec-title mb_45">
                                <div class="icon-box p_relative d_block fs_14 lh_20 mb_10"
                                     style="text-align: {{ app()->getLocale() === 'ar' ? 'right' : 'left' }};">
                                    <img  src="{{ asset('assets/website/images/logo_quadrash_2.png') }}" alt="LOGO"
                                         style="display: inline-block; width: 190px; "/>
                                </div>
                                <h2 class="p_relative d_block fs_20 lh_60 fw_bold mt-4"
                                    style="color: #526652; text-align: start;">
                                    {!! __('home.about_sec') !!}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box p_relative d_block pr_120 pb_150">
                        <figure class="image image-1 p_relative d_block mb-2 z_1 paroller"><img
                                src="{{ asset('assets/website/images/About.png') }}" alt="qudrah IMG">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->


    <!-- Services -->
    @if($services->count())
        <section class="feature-style-two p_relative sec-pad">
            <div class="intro text-center mb-5">
                <div class="heading text-center font-weight-bold mb-3" style="color: #001D00; font-size: 40px;">
                    {{__('home.services')}}
                </div>
                <p style="color: #526652;">
                    {{__('home.services_desc')}}
                </p>
            </div>
            <div class="large-container">
                <div class="row clearfix d-flex align-items-center justify-content-center">
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                            <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                                 data-wow-duration="1500ms">
                                <div
                                    class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                                    <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                        <img style=" width: 100px; height: 100px" src="{{ $service->getIconUrl() }}"
                                             alt="{{ $service->title }}">
                                    </div>
                                    <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                        <a href="{{ route('service.details', $service) }}"
                                           class="d_iblock color_black hov_color"
                                           style="color: #526652 !important;">{{ $service->title }}</a>
                                    </h3>
                                    <p style="text-align: start;">{!! $service->short_description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </section>
    @endif
    <!-- /Services -->

    <section class="featured-projects p_relative sec-pad bg-color-3" style="direction: ltr;">
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">
                    {{__('home.offers')}}
                </h2>
                <span class="sub-title p_relative d_block fs_18 lh_25 mb_10">{{ __('home.real_offers') }}</span>
            </div>
            <div class="row">
                @foreach($offers as $offer)
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box bg-color-1">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="{{ route('offers.details', $offer) }}"><img
                                                src="{{ $offer->getThumbUrl() }}" alt=""/></a>
                                    </figure>
                                </div>
                                <div class="lower-content">
                                    <h3>
                                        <a href="{{ route('offers.details', $offer) }}">{!! $offer->short_title !!}</a>
                                    </h3>
                                    <p style="
                                    word-wrap: break-word;
                                    overflow-wrap: break-word;
                                    white-space: normal;">
                                        {!! $service->description !!}
                                    </p>
                                    <h3>
                                        <a href="{{ route('offers.details', $offer) }}">{{ $offer->price }} ريال
                                            / {{ $offer->price_type->label() }}</a>

                                    </h3>
                                    <p
                                        style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                        <a class="text-white" href="{{ route('offers.details', $offer) }}">
                                            {{__('home.offer_details')}}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="z-index: 1000;" class="mx-auto text-center mt-4">

                <a style="background-color: #001D00; padding: 7px 20px; color: #fff;font-weight: bold; border-radius: 5px;"
                   href="{{ route('offers') }}">{{__('home.show_all')}}</a>
            </div>
        </div>
    </section>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(/websiteassets//images/shape/shape-7.png);"></div> -->
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;"
                    class="p_relative d_block fs_40 lh_60 mb-5 fw_exbold">
                    {{__('home.our_branches')}}
                </h2>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: {{ app()->getLocale() === 'ar' ? 'start' : 'left' }};"
                                class="p_relative d_block fs_50 lh_60 mb-5 fw_sbold">
                                {{__('home.brach_desc')}}
                            </h2>
                            <p style="font-size: 30px; line-height: 1.8; color: #526652;">{{__('home.brach_desc2')}}</p>
                            <p style="font-size: 30px; line-height: 1.8; color: #526652;">{{__('home.brach_desc3')}}</p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <img style="width: 100%; max-width: 100%;"
                             src="{{ asset('assets/website/images/الخريطة.png') }}"
                             alt="خريطة الممكلة">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    @if($partners->count())
        <section class="clients-section p_relative sec-pad centred" style="direction: ltr;">
            <div class="large-container">
                <div class="sec-title mb_30">
                    <h2 class="p_relative d_block fs_42 lh_52 mb_45 fw_exbold"
                        style="color: #001D00;">{{__('home.partners')}}</h2>
                    <p style="color: #526652;">
                        {{__('home.partners_desc')}}
                    </p>
                </div>
                <ul class="six-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    @foreach($partners as $partner)
                        <li>
                            <figure class="clients-logo">
                                <img src="{{ $partner->getLogoUrl() }}" alt="{{ $partner->name }}">
                            </figure>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @endif
    <!-- /Partners -->

    <!-- Testimonials -->
    @if($testimonials->count())
        <section class="testimonial-style-two p_relative sec-pad bg-color-1" style="direction: ltr;">
            <div class="pattern-layer p_absolute"
                 style="background-image: url({{ asset('assets/website/images/shape/shape-14.png') }});">
            </div>
            <div class="large-container">
                <div class="sec-title centred mb_55">
                    <h2 class="p_relative d_block fs_40 lh_60 fw_exbold"
                        style="color: #001D00;">{{__('home.testimonials')}}</h2>
                </div>
                <div class="testimonial-inner p_relative pl_100 pr_100">
                    <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-block-one mb_75">
                                <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                                    <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                        <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i>
                                        </div>
                                        <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                                src="{{ $testimonial->profileImageUrl() }}" alt=""></figure>
                                        <h5 class="d_block fs_18 lh_30 fw_sbold">{{ $testimonial->client_name }}</h5>
                                        <span
                                            class="designation p_relative d_block fs_14 lh_20">{{ $testimonial->job_title }}</span>
                                    </div>
                                    <div class="text p_relative d_block">
                                        <p class="lh_30">{{ $testimonial->testimonial }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- /Testimonials -->


    <section class="clients-section p_relative sec-pad centred" style="direction: ltr;">
        <div class="large-container">
            <div class="sec-title mb_30">
                <h2 class="p_relative d_block fs_42 lh_52 mb_45 fw_exbold" style="color: #001D00;">
                    {{__('home.companies')}}
                </h2>
                <p style="color: #526652;">
                    {{__('home.companies_desc')}}
                </p>
            </div>
            <ul class="six-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                @foreach($clients as $client)
                    <li>
                        <figure class="clients-logo">
                            <img src="{{ $client->getLogoUrl() }}" alt="{{ $client->name }}">
                        </figure>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="feature-style-two p_relative sec-pad">
        <div class="intro text-center mb-5">
            <div class="heading text-center font-weight-bold mb-3" style="color: #001D00; font-size: 40px;">
                {{__('home.why_us')}}
            </div>
        </div>
        <div class="large-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{ asset('assets/website/images/التوسيق العقاري.png') }}" alt="تسويق العقاري">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="javascript:void(0)" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">{{__('home.why_us_1')}}</a>
                            </h3>
                            <p>
                                {{__('home.why_us_desc_1')}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{ asset('assets/website/images/إدارة العقارات.png') }}" alt="ادارة العقارات">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="javascript:void(0)" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">{{__('home.why_us_2')}}</a>
                            </h3>
                            <p>
                                {{__('home.why_us_desc_2')}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{ asset('assets/website/images/ادارة المرافق.png') }}" alt="ادارة المرافق">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="javascript:void(0)" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">
                                    {{__('home.why_us_3')}}
                                </a>
                            </h3>
                            <p class="text-center">
                                {{__('home.why_us_desc_3')}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{ asset('assets/website/images/ادارة المرافق.png') }}" alt="ادارة المرافق">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="javascript:void(0)" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">{{__('home.why_us_4')}}</a>
                            </h3>
                            <p class="text-center">
                                {{__('home.why_us_desc_4')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{ asset('assets/website/images/المزادات العقارية.png') }}"
                                     alt="المزادات العقارية">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="javascript:void(0)" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">{{__('home.why_us_5')}}</a>
                            </h3>
                            <p class="text-center">
                                {{__('home.why_us_desc_5')}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Blogs -->
    @if($blogs->count())
        <section class="news-section p_relative sec-pad">
            <div class="large-container">
                <div class="sec-title centred mb_55">
                    <h2 class="p_relative d_block fs_50 lh_60 fw_exbold">{{__('home.blog')}}</h2>
                </div>
                <div class="row clearfix">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                 data-wow-duration="1500ms">
                                <div class="inner-box bg-color-1" style="text-align: start;">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{ route('blogs.details', $blog) }}">
                                                <img src="{{ $blog->getThumbUrl() }}" alt="">
                                            </a>
                                        </figure>
                                        <span
                                            class="post-date">{{ strtoupper($blog->created_at->format('d M Y')) }}</span>
                                        {{--                                    <span class="post-date">23 JUN 2021</span>--}}
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ route('blogs.details', $blog) }}">{{ $blog->title }}</a>
                                        </h3>
                                        <p>{!! $blog->excerpt !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- /Blogs -->


    @include('website.layouts.subscribe')
    @include('website.layouts.footer')

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-long-arrow-up"></span>
    </button>
</div>

@include('website.layouts.scripts')

</body><!-- End of .page_wrapper -->


</html>
