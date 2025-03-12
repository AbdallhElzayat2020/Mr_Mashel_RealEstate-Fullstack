<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{__('home.polices')}}</title>

    @include('website.layouts.head')

</head>

<!-- page wrapper -->

<body class="{{ app()->getLocale() }}">
<div class="boxed_wrapper">
    <!-- main header -->
    @include('website.layouts.header_2')
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
                <h4>{{__('offers.contact')}}</h4>
                <ul>
                    <li>{{__('offers.address_1')}}</li>
                    <li>{{__('offers.address_2')}}</li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li>
                        <a href="javascript:void(0)"><span class="fab fa-x"></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="fab fa-facebook-square"></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="fab fa-instagram"></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><span class="fab fa-youtube"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

    <div class="container my-5" style="padding-top: 100px;">
        <nav style="--bs-breadcrumb-divider: '>'; background-color: #f9f9f9; padding: 10px; border-radius: 5px;"
             aria-label="breadcrumb">
            <ol class="breadcrumb" style=" margin: 0; background-color: transparent; padding: 0;">
                <li class="breadcrumb-item">
                    <a href="#" style="color: #001D00; text-decoration: none; font-weight: bold;">{{__('home.home')}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                   {{__('home.polices')}}
                </li>
            </ol>
        </nav>
    </div>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
        <div class="large-container">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                {{__('home.polices')}}
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quidem eius
                                        necessitatibus quasi reprehenderit similique totam commodi, aperiam
                                        reiciendis. Veritatis qui obcaecati soluta molestias laudantium
                                        necessitatibus, tenetur nisi est optio.Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit. Esse quidem eius
                                        necessitatibus quasi reprehenderit similique totam commodi, aperiam
                                        reiciendis. Veritatis qui obcaecati soluta molestias laudantium
                                        necessitatibus, tenetur nisi est optio.Lorem ipsum dolor sit amet
                                        consectetur, adipisicing elit. Esse quidem eius
                                        necessitatibus quasi reprehenderit similique totam commodi, aperiam
                                        reiciendis. Veritatis qui obcaecati soluta molestias laudantium
                                        necessitatibus, tenetur nisi est optio.
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                سياسة القبول
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        • نوفّر بيئة عمل تساعدك تتطور وتبرز مهاراتك.
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        • فرص نمو حقيقية وتقدير لإنجازاتك.
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        • مسار مهني واضح يعزز نجاحك.
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                استخدام المعلومات والمواد
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        • شغوف بالمجال العقاري وتحب التحدي.
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        • عندك طموح تبني مسيرة مهنية قوية.
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        • تبي تشتغل في فريق يقدر شغفك وإبداعك.
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-center fw_bold mt-3">
                    {{__('home.name_company')}} - info@example.com
                </p>
            </div>
        </div>
    </section>

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
