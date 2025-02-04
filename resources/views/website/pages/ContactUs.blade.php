@extends('website.layouts.master')
@section('web_title', 'المدونة || قدرة العقارية')
{{--navbar--}}
@include('website.layouts.header_2')
{{--navbar--}}

@section('content')
    <!-- Page Title -->
    <section class="page-title p_relative pt_250 pb_170 centred" style="
          background-image: url('{{asset('assets/website/images/banner/Home_2.png')}}');
          background-position: center;
        ">
        <div class="bg-layer p_absolute r_100 t_0"></div>
        <div class="large-container">
            <div class="content-box p_relative d_block z_5">
                <div class="title mb_25">
                    <h1 class="d_block fs_68 lh_76 color_white fw_exbold">للتواصل والاستفسار</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- contact-style-three -->
    <section class="contact-style-three p_relative pt_110 pb_120" style="direction: rtl">
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">للتواصل والاستفسار
                </h2>
            </div>
            <div class="row clearfix d-flex align-items-center justify-content-center">
                <div
                    class="col-lg-9 d-flex align-items-center justify-content-center col-md-12 col-sm-12 form-column">
                    <div class="form-inner d-flex align-items-center justify-content-center">
                        <form method="post" action="#" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="username" placeholder="الاسم الكامل" required="" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="phone" required="" placeholder="رقم الهاتف" />
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="اختر الخدمة المطلوبة">
                                                اختر الخدمة المطلوبة
                                            </option>
                                            <option value="1">Duplex / Triplex</option>
                                            <option value="2">Full Suite Apt.</option>
                                            <option value="3">Railroad Complex</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="نوع العقار">نوع العقار</option>
                                            <option value="1">Duplex / Triplex</option>
                                            <option value="2">Full Suite Apt.</option>
                                            <option value="3">Railroad Complex</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <textarea name="message" placeholder="ملاحظات"></textarea>
                                </div>

                                <div class="col-lg-12 mb-3 col-md-12 col-sm-12" style="text-align: start;">
                                    <div class="form-check ">
                                        <input class="form-check-input " type="checkbox" value="checked"
                                               id="flexCheckChecked" checked>
                                        <label class="form-check-label mr-3" for="flexCheckChecked">
                                            أقر بأنني قد قرأت <a href="#">الشروط والاحكام</a> الخاصة بشركة قدرة
                                            العقارية
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0"
                                     style="text-align: center;">
                                    <button class="theme-btn btn-one rounded-lg w-100" style="text-align: center;"
                                            type="submit" name="submit-form">
                                        ارسال
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
                    <h3>البريد الالكتروني</h3>
                    <p>info@qudraha.com</p>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>ارقام الهاتف</h3>
                    <p>0115120188<br>0112216636<br>0541111426</p>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>فروع الشركة</h3>
                    <p>
                        الفرع الرئيسي - الرياض - حي المروج<br>
                        المكتب الفرعي - الرياض - حي السلي
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-three end -->

@endsection
