<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>قدره العقارية || التدريب</title>

    @include('website.layouts.head')
    @vite(['resources/js/app.js'])
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

    <div class="container my-5" style="padding-top: 100px;">
        <nav style="--bs-breadcrumb-divider: '>'; background-color: #f9f9f9; padding: 10px; border-radius: 5px;"
             aria-label="breadcrumb">
            <ol class="breadcrumb" style=" margin: 0; background-color: transparent; padding: 0;">
                <li class="breadcrumb-item">
                    <a href="#" style="color: #001D00; text-decoration: none; font-weight: bold;">{{ __('internship.bread_crumb_1') }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ __('internship.bread_crumb_2') }}
                </li>

            </ol>
        </nav>
    </div>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">{{ __('internship.header') }}</h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">{{ __('internship.intern_1') }}</h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        {{ __('internship.intern_1_body') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('internship.intern_2_body') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('internship.intern_3_body') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                {{ __('internship.why_choose_our_program') }}
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        {{ __('internship.why_choose_our_program_body_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('internship.why_choose_our_program_body_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('internship.why_choose_our_program_body_3') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    @if($errors->any())
        <div class="alert alert-danger mt-2" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <section class="contact-style-three p_relative pt_110 pb_120 bg-light" style="direction: rtl"

    x-data="{
    terms: false,
    showError  : false,
     checkTerms() {
         if (!this.terms)
         {
            this.showError = true;
            return;
         }

         this.$refs.form.submit()
     }
     }"
    >
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_30 lh_60 mb-2 fw_exbold">
                    {!! __('internship.form_header') !!}
                </h2>
                <p style="color: #526652" class="text-center">
                    {!! __('internship.form_info') !!}
                </p>
            </div>
            <div class="row clearfix d-flex align-items-center justify-content-center">
                <div
                    class="col-lg-9 d-flex align-items-center justify-content-center col-md-12 col-sm-12 form-column">

                    <div class="form-inner ">
                        @session('message')
                        <div x-data x-init="setTimeout(_=> $el.remove(), 5000)" class="alert alert-success mt-2" role="alert">
                            <span>{{ $value }}</span>
                        </div>
                        @endsession
                        <form method="post" @submit.prevent="checkTerms" x-ref="form"  action="{{ route('internship.store') }}" id="contact-form" class="default-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="name" placeholder="{!! __('internship.form_input_1') !!}" required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="phone" required placeholder="{!! __('internship.form_input_2') !!}" />
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="email" placeholder="{!! __('internship.form_input_3') !!}"
                                           required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="education" required placeholder="{!! __('internship.form_input_4') !!}" />
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide" name="years_of_exp" required>
                                            <option data-display="{!! __('internship.form_input_5') !!}">
                                                {!! __('internship.form_input_5') !!}
                                            </option>
                                            <option value="لايوجد خبرة سابقة">{{ __('internship.option_1') }}</option>
                                            <option value="من سنة الي تلاثة سنوات">{{ __('internship.option_2') }}</option>
                                            <option value="من 3 سنوات الي 5 سنوات">{{ __('internship.option_3') }}</option>
                                            <option value="من 5 الي 10 سنوات">{{ __('internship.option_4') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="field_of_exp" required placeholder="{!! __('internship.form_input_6') !!}" />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <div
                                        style="border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem; display: flex; align-items: center;">
                                        <input type="file" name="file" class="form-control border-0" id="inputGroupFile02"
                                               accept=".pdf,.doc,.docx"
                                               style="border: none; box-shadow: none; width: 100%;">
                                        <label class="input-group-text border-0" for="inputGroupFile02"
                                               style="border: none; background-color: transparent; margin-bottom: 0;">
                                            {!! __('internship.form_input_7') !!}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <textarea name="message" placeholder="{!! __('internship.form_input_8') !!}"></textarea>
                                </div>

                                <div class="col-lg-12 mb-3 col-md-12 col-sm-12" style="text-align: start;">
                                    <div class="form-check ">
                                        <input class="form-check-input " x-model="terms" type="checkbox" value="checked"
                                               id="flexCheckChecked"
                                               required
                                        >
                                        <label class="form-check-label mr-3" for="flexCheckChecked">
                                            {!! __('internship.form_input_9') !!}
                                        </label>
                                    </div>
                                    <template x-if="showError">
                                        <div class="alert alert-danger mt-2" role="alert">
                                            <ul class="mb-0">
                                                <li>You Must check the terms</li>
                                            </ul>
                                        </div>
                                    </template>
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
