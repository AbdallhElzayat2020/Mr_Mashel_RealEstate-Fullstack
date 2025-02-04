@extends('website.layouts.master')
@section('web_title', 'الخدمات || قدرة العقارية')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endpush
@include('website.layouts.header_2')

@section('content')

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container sec-pad" style="direction: rtl; padding-top: 200px;">
        <div class="auto-container">

            <nav style="--bs-breadcrumb-divider: '>'; background-color: #f9f9f9; padding: 10px; border-radius: 5px;"
                 aria-label="breadcrumb">
                <ol class="breadcrumb" style=" margin: 0; background-color: transparent; padding: 0;">
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-item active">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        الخدمات
                    </li>
                    <li class="breadcrumb-item" style="color: green; text-decoration: none; font-weight: bold;"
                        aria-current="page">
                        اسم الخدمة
                    </li>
                </ol>
            </nav>

            <div class="row clearfix">
                <div class="col-lg-4 mt-5">
                    <!-- <div class="card text-center p-4 d-flex align-items-center justify-content-center"
                        style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                        <div class="content">
                            <h5>دونت بواسطة</h5>
                            <img style="width: 100px; height: 100px; border-radius: 50%; margin: 15px auto;"
                                src="./assets/images/project/project-1.jpg" alt="صورة الكاتب">
                        </div>
                    </div> -->
                    <div class="text" style="text-align: start;">
                        <h3>خدمات اخري</h3>
                        <ul>
                            <li
                                style="background-color: #F9F9F9; padding: 5px; font-weight: 400; margin-top: 10px;">
                                <a style="color: #112e11;" href="">التسويق العقاري</a>
                            </li>
                            <li
                                style="background-color: #F9F9F9; padding: 5px; font-weight: 400; margin-top: 10px;">
                                <a style="color: #112e11;" href="">ادارة العقارات</a>
                            </li>
                            <li
                                style="background-color: #F9F9F9; padding: 5px; font-weight: 400; margin-top: 10px;">
                                <a style="color: #112e11;" href="">ادارة المرافق</a>
                            </li>
                            <li
                                style="background-color: #F9F9F9; padding: 5px; font-weight: 400; margin-top: 10px;">
                                <a style="color: #112e11;" href="">الاستشارات العقارية</a>
                            </li>
                            <li
                                style="background-color: #F9F9F9; padding: 5px; font-weight: 400; margin-top: 10px;">
                                <a style="color: #112e11;" href="">المزادات العقارية</a>
                            </li>
                            <li
                                style="background-color: #F9F9F9; padding: 5px; font-weight: 400; margin-top: 10px;">
                                <a style="color: #112e11;" href="">إدارة وتشغيل العقارات</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card text-center color_white mt-5 w-100"
                         style="background-color:#526652 ; padding: 10px;">
                        <h3 class="color_white my-3">لا تتردد بالتواصل معنا</h3>
                        <div
                            style="background-color: #C19C6E; padding: 15px; border-radius: 50%; margin: 10px auto;">
                            <i class="fa-solid fa-phone" style="color: #fff; font-size: 25px;"></i>
                        </div>
                        <p class="color_white">وأبشر بطيبة الخاطر</p>
                        <h3 class="color_white fw_bold mt-2">966 542675602</h3>
                    </div>
                    <div class="button mt-4 text-center" style="background-color:#526652 ; padding: 10px;">
                        <a href="" class="color_white text-white">
                            تنزيل برشور الشركة <i class="fa-solid fa-file-pdf mx-3"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="sec-title centred mb_20">
                        <h2 class="p_relative d_block fs_40 lh_60 fw_exbold"
                            style="color: #001D00; text-align: start">
                            التسويق العقاري
                        </h2>
                    </div>
                    <div class="blog-details-content">
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('assets/website/images/news/news-11.jpg')}}"
                                                               alt="Blog_Image"></figure>
                                </div>
                            </div>
                        </div>
                        <div class="two-column">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-6 col-sm-12 text-column">
                                    <h3 style="text-align: start; margin-bottom: 15px; color: #C19C6E;">تفاصيل
                                        الخدمة</h3>
                                    <div class="text"
                                         style="text-align: start; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                                        <p>
                                            في قدرة العقارية، نقدم حلولًا مبتكرة لتسويق العقارات السكنية والتجارية،
                                            مصممة خصيصًا لتلبية احتياجات الملاك والمطورين
                                            العقاريين. نحن لا نكتفي بعرض العقار فقط، بل نُبرز مميزاته بأسلوب احترافي
                                            يجذب اهتمام العملاء المناسبين. من خلال خبرتنا
                                            بالسوق العقاري، نُقدم استراتيجيات تسويقية متكاملة تعتمد على أحدث
                                            التقنيات مثل التصوير الاحترافي والجولات الافتراضية،
                                            لضمان تقديم عقارك بطريقة تعكس قيمته الحقيقية للعملاء المستهدفين.في قدرة
                                            العقارية، نعتبر علاقتنا معك أكثر من مجرد خدمة،
                                            بل شراكة حقيقية لتحقيق أهدافك.
                                        </p>
                                    </div>
                                    <div class="features mt-3" style="text-align: start; margin-bottom: 15px;">
                                        <div class="text">
                                            <h4>
                                                المميزات:
                                            </h4>
                                            <ul>
                                                <li>خبرة كبيرة بالمجال تتخطى 10 سنوات</li>
                                                <li>حلوًل مبتكرةلتسويق العقارات السكنيةوالتجارية</li>
                                                <li>‫مصممة‬ ‫خصيصا لتلبية احتياجات الملاك والمطورين ‫العقاريين‪</li>
                                                <li>استراتيجيات‬ ‫تسويقية‬ ‫متكاملة‬</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->



    <section class="testimonial-style-two p_relative sec-pad bg-color-1" style="direction: ltr;">
        <div class="pattern-layer p_absolute"
             style="background-image: url('{{asset('assets/website/images/shape/shape-14.png')}}');">
        </div>
        <div class="large-container">
            <div class="sec-title centred mb_55">
                <h2 class="p_relative d_block fs_40 lh_60 fw_exbold" style="color: #001D00;">ماذا يقولون عنا</h2>
            </div>
            <div class="testimonial-inner p_relative pl_100 pr_100">
                <div class="two-item-carousel owl-carousel owl-theme owl-nav-none">
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one mb_75">
                        <div class="inner-box p_relative d_block bg_white pt_45 pr_40 pb_40 pl_40">
                            <div class="author-box p_relative d_block pl_80 pr_80 mb_35">
                                <div class="quote p_absolute t_0 r_0 fs_50"><i class="fal fa-quote-right"></i></div>
                                <figure class="author-thumb p_absolute l_0 t_0 w_60 h_60 b_radius_50"><img
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt="">
                                </figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Sophia J. Milton</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Property Owner</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- clients-section -->
    <section class="clients-section p_relative sec-pad centred" style="direction: ltr;">
        <div class="large-container">
            <div class="sec-title mb_30">
                <h2 class="p_relative d_block fs_42 lh_52 mb_45 fw_exbold" style="color: #001D00;">عملاء يثقون بنا
                </h2>
                <p style="color: #526652;">تطور قدرةالعقارية شراكاتها الاستراتيجية في مختلف القطاعات لتعزز قدرتها
                    وتوسيع نطاقها</p>
            </div>
            <ul class="six-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img
                                src="{{asset('assets/website/images/clients/clients-1.png')}}" alt=""></a>
                    </figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img
                                src="{{asset('assets/website/images/clients/clients-1.png')}}" alt=""></a>
                    </figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img
                                src="{{asset('assets/website/images/clients/clients-1.png')}}" alt=""></a>
                    </figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img
                                src="{{asset('assets/website/images/clients/clients-1.png')}}" alt=""></a>
                    </figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img
                                src="{{asset('assets/website/images/clients/clients-1.png')}}" alt=""></a>
                    </figure>
                </li>
            </ul>
        </div>
    </section>
    <!-- clients-section end -->

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
                                    <input type="text" name="username" placeholder="الاسم الكامل" required=""/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="phone" required="" placeholder="رقم الهاتف"/>
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

@endsection
