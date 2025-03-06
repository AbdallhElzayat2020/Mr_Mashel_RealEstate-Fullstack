<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title>{{ __('hireing.page_title') }}</title>

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
                    <li>
                        <a href="index-2.html"><span class="fab fa-x"></span></a>
                    </li>
                    <li>
                        <a href="index-2.html"><span class="fab fa-facebook-square"></span></a>
                    </li>
                    <li>
                        <a href="index-2.html"><span class="fab fa-instagram"></span></a>
                    </li>
                    <li>
                        <a href="index-2.html"><span class="fab fa-youtube"></span></a>
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
                    <a href="#"
                       style="color: #001D00; text-decoration: none; font-weight: bold;">{{ __('hireing.bread_1') }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ __('hireing.bread_2') }}
                </li>

            </ol>
        </nav>
    </div>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;"
                    class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">{{ __('hireing.header') }}</h2>
            </div>

            @session('message')
            <div x-data x-init="setTimeout(_=> $el.remove(), 5000)" class="alert alert-success mt-2" role="alert">
                <span>{{ $value }}</span>
            </div>
            @endsession

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                {{ __('hireing.main_header') }}
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.main_header_body_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;"
                                       href="javascript:void(0)">{{ __('hireing.main_header_body_2') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                {{ __('hireing.why_us') }}
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.why_us_1') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.why_us_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.why_us_3') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                {{ __('hireing.hire_head') }}
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.hire_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.hire_2') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        {{ __('hireing.hire_3') }}
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


    <section class="contact-style-three p_relative pt_110 pb_120 bg-light" style="direction: rtl">
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_30 lh_60 mb-2 fw_exbold">
                    {!! __('hireing.form_header') !!}
                </h2>
                <p style="color: #526652" class="text-center">
                    {{ __('hireing.form_info') }}
                </p>
            </div>
            <div class="row clearfix d-flex align-items-center justify-content-center">
                <div
                    class="col-lg-9 d-flex align-items-center justify-content-center col-md-12 col-sm-12 form-column">
                    <div class="form-inner d-flex align-items-center justify-content-center">
                        <form method="post" action="{{ route('apply.store') }}" id="contact-form" class="default-form"
                              enctype="multipart/form-data">
                            @csrf

                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="name" placeholder="{{ __('hireing.form_input_1') }}"
                                           required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="phone" required
                                           placeholder="{{ __('hireing.form_input_2') }}"/>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="email" placeholder="{{ __('hireing.form_input_3') }}"
                                           required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="education" required
                                           placeholder="{{ __('hireing.form_input_4') }}"/>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide" name="years_of_exp">
                                            <option data-display="{{ __('hireing.form_input_5') }}">
                                                {{ __('hireing.form_input_5') }}
                                            </option>
                                            <option value="لايوجد خبرة سابقة">{{ __('hireing.option_1') }}</option>
                                            <option value="من سنة الي تلاثة سنوات">{{ __('hireing.option_2') }}</option>
                                            <option value="من 3 سنوات الي 5 سنوات">{{ __('hireing.option_3') }}</option>
                                            <option value="من 5 الي 10 سنوات">{{ __('hireing.option_4') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="field_of_exp" required
                                           placeholder="{{ __('hireing.form_input_6') }}"/>
                                </div>
                                <div class="col-lg- col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide" name="job_title" required>
                                            <option data-display="{{ __('hireing.form_input_11') }}">
                                                {{ __('hireing.form_input_11') }}
                                            </option>
                                            <option value="مهندس مدني">{{ __('hireing.option__1') }}</option>
                                            <option value="مهندس معماري">{{ __('hireing.option__2') }}</option>
                                            <option value="مهندس كهربائي">{{ __('hireing.option__3') }}</option>
                                            <option value="مهندس تقنية معلومات">{{ __('hireing.option__4') }}</option>
                                            <option value="فني إلكترونيات">{{ __('hireing.option__5') }}</option>
                                            <option value="فني كهربائي">{{ __('hireing.option__6') }}</option>
                                            <option value="فني حدادة / لحام">{{ __('hireing.option__7') }}</option>
                                            <option value="فني نجارة">{{ __('hireing.option__8') }}</option>
                                            <option value="عامل عادي">{{ __('hireing.option__9') }}</option>
                                            <option value="عامل تحميل وتنزيل">{{ __('hireing.option__10') }}</option>
                                            <option value="أخصائي مشاريع">{{ __('hireing.option__11') }}</option>
                                            <option value="منسق مشاريع">{{ __('hireing.option__12') }}</option>
                                            <option value="مدير مشروع">{{ __('hireing.option__13') }}</option>
                                            <option value="فني سباك">{{ __('hireing.option__14') }}</option>
                                            <option value="فني دهان">{{ __('hireing.option__15') }}</option>
                                            <option value="فني بناء">{{ __('hireing.option__16') }}</option>
                                            <option value="مقاول">{{ __('hireing.option__17') }}</option>
                                            <option value="مشرف عمال">{{ __('hireing.option__18') }}</option>
                                            <option value="مشرف صيانة">{{ __('hireing.option__19') }}</option>
                                            <option value="مشرف عقار">{{ __('hireing.option__20') }}</option>
                                            <option value="أخصائي موارد بشرية">{{ __('hireing.option__21') }}</option>
                                            <option value="مسؤول علاقات حكومية">{{ __('hireing.option__22') }}</option>
                                            <option value="مسؤول تحصيل">{{ __('hireing.option__23') }}</option>
                                            <option value="أخصائي تسويق">{{ __('hireing.option__24') }}</option>
                                            <option value="أخصائي خدمة عملاء">{{ __('hireing.option__25') }}</option>
                                            <option value="مشرف مرافق">{{ __('hireing.option__26') }}</option>
                                            <option value="مدير عمليات">{{ __('hireing.option__27') }}</option>
                                            <option value="مشرف عمليات">{{ __('hireing.option__28') }}</option>
                                            <option value="مدير تنفيذي">{{ __('hireing.option__29') }}</option>
                                            <option value="محاسب أول">{{ __('hireing.option__30') }}</option>
                                            <option value="محاسب عام">{{ __('hireing.option__31') }}</option>
                                            <option value="محاسب مالي">{{ __('hireing.option__32') }}</option>
                                            <option value="محلل مالي">{{ __('hireing.option__33') }}</option>
                                            <option value="فني شبكات وإتصالات">{{ __('hireing.option__34') }}</option>
                                            <option value="وسيط عقاري">{{ __('hireing.option__35') }}</option>
                                            <option value="مسجل عقاري">{{ __('hireing.option__36') }}</option>
                                            <option value="محكم عقاري">{{ __('hireing.option__37') }}</option>
                                            <option value="مدير عقار مشترك">{{ __('hireing.option__38') }}</option>
                                            <option value="مسؤول مزادات عقارية">{{ __('hireing.option__39') }}</option>
                                            <option value="مقيم عقاري">{{ __('hireing.option__40') }}</option>
                                            <option value="سائق">{{ __('hireing.option__41') }}</option>
                                            <option value="عامل نظافة">{{ __('hireing.option__42') }}</option>
                                            <option value="مهندس ديكور">{{ __('hireing.option__43') }}</option>
                                            <option value="مصمم داخلي">{{ __('hireing.option__44') }}</option>
                                            <option value="سكرتير تنفيذي">{{ __('hireing.option__45') }}</option>
                                            <option value="مراجع داخلي">{{ __('hireing.option__46') }}</option>
                                            <option value="محلل مبيعات">{{ __('hireing.option__47') }}</option>
                                            <option value="محلل أعمال">{{ __('hireing.option__48') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <div
                                        style="border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem; display: flex; align-items: center;">
                                        <input type="file" class="form-control border-0" id="inputGroupFile02"
                                               accept=".pdf,.doc,.docx"
                                               name="file"
                                               style="border: none; box-shadow: none; width: 100%;">
                                        <label class="input-group-text border-0" for="inputGroupFile02"
                                               style="border: none; background-color: transparent; margin-bottom: 0;">
                                            {{ __('hireing.form_input_7') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <textarea name="note" placeholder="{{ __('hireing.form_input_8') }}"></textarea>
                                </div>

                                <div class="col-lg-12 mb-3 col-md-12 col-sm-12" style="text-align: start;">
                                    <div class="form-check ">
                                        <input class="form-check-input " type="checkbox" value="checked"
                                               id="flexCheckChecked" checked>
                                        <label class="form-check-label mr-3"
                                               for="flexCheckChecked">{!!  __('hireing.form_input_9')  !!}</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0"
                                     style="text-align: center;">
                                    <button class="theme-btn btn-one rounded-lg w-100" style="text-align: center;"
                                            type="submit" name="submit-form">
                                        {{ __('hireing.form_input_10') }}
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
