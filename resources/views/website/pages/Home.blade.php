@extends('website.layouts.master')
@section('web_title', 'الرئيسية || قدرة العقارية')

@section('content')
    <!-- banner-section -->
    <section class="page-title p_relative pt_250 pb_170 centred"
             style="background-image: url('{{ asset('assets/website/images/banner/Home_2.png') }}'); background-position: center;">
        <div class="bg-layer p_absolute r_100 t_0">
        </div>
        <div class="large-container">
            <div class="content-box p_relative d_block z_5">
                <div class="title mb_25">
                    <h3 class="color_white d_block fs_30 lh_76 mb_35 fw_exbold">بقدرتنا المتنوعة نُحقق
                        أهدافكم
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- about -->
    <section class="about-style-three p_relative pt-5">
        <div class="large-container">
            <div class="row clearfix d-flex align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_5">
                        <div class="content-box p_relative d_block">
                            <div class="sec-title mb_45">
                                <div class="icon-box p_relative d_block fs_14 lh_20 mb_10" style="text-align: right;">
                                    <img src="{{asset('assets/website/images/LOGO.png')}}" alt="LOGO"
                                         style="display: inline-block;">
                                </div>
                                <h2 class="p_relative d_block fs_20 lh_60 fw_bold mt-4"
                                    style="color: #526652; text-align: start;">
                                    إنطلقت <span style="color: #c19c6e">“ قدرة العقارية”</span> في عام 2021 لتقديم
                                    مجموعة واسعة من الخدمات
                                    العقارية
                                    عالية الجودة والتي تتوافق مع أفضل المعايير
                                    والممارسات لتواكب رؤية المملكة 2030 نحو مستقبل عقاري مزدهر.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box p_relative d_block pr_120 pb_150">
{{--                        <figure class="image image-1 p_relative d_block mb-2 z_1 paroller">--}}
                            <img src="{{asset('assets/website/images/About.png')}}" alt="qudrah IMG">
{{--                        </figure>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <section class="feature-style-two p_relative pt-5">
        <div class="intro text-center mb-5">
            <div class="heading text-center font-weight-bold mb-3" style="color: #001D00; font-size: 40px;">خدماتنا
            </div>
            <p style="color: #526652;">تقدم <span class="gold-color text-center">“قدرة العقارية”</span> مجموعة
                متنوعة من الخدمات بإسلوب حديث وإحترافي بخبرات متنوعة لتلبية إحتياجات مُختلف شرائح القطاع العقاري</p>
        </div>
        <div class="large-container">
            <div class="row clearfix d-flex align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{asset('assets/website/images/التوسيق العقاري.png')}}" alt="تسويق العقاري">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="#" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">التسويق العقاري</a>
                            </h3>
                            <p style="text-align: start;">عبر أحدث التقنيات ووسائل التسويق الحديثة لفتح آفاق جديدة
                                لتسويق
                                العقارات وجذب العملاء المناسبين</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{asset('assets/website/images/المزادات العقارية.png')}}" alt="المزادات العقارية">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">المزادات العقارية</a>
                            </h3>
                            <p style="text-align: start;">نسعى في المزادات العقارية أن نوفر البيع السريع بأسعار
                                السوق
                                العادلة سواءً كانت مزادات حضورية أو إلكترونية</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{asset('assets/website/images/إدارة العقارات.png')}}" alt="ادارة العقارات">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="#" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">ادارة
                                    العقارات</a>
                            </h3>
                            <p style="text-align: start;">من خلال أفضل الطرق والممارسات نقوم بإدارة العقارات عبر
                                مجموعة
                                متكاملة من الخدمات العقارية لنمو الأُصول وزيادة دخلها والمحافظة عليها
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
                                <img src="{{asset('assets/website/images/التوسيق العقاري.png')}}" alt="تسويق العقاري">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="#" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">
                                    إدارة وتشغيل العقارات
                                </a>
                            </h3>
                            <p style="text-align: start;">عبر أحدث التقنيات ووسائل التسويق الحديثة لفتح آفاق جديدة
                                لتسويق
                                العقارات وجذب العملاء المناسبين</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="{{asset('assets/website/images/ادارة المرافق.png')}}" alt="ادارة المرافق">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="#" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">ادارة
                                    المرافق</a>
                            </h3>
                            <p style="text-align: start;">من خلال أفضل الطرق والممارسات نقوم بإدارة العقارات عبر
                                مجموعة
                                متكاملة من الخدمات العقارية لنمو الأُصول وزيادة دخلها والمحافظة عليها
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
                                <img src="{{asset('assets/website/images/التقييم العقاري.png')}}" alt="التقييم العقاري">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="#" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">
                                    التقييم العقاري
                                </a>
                            </h3>
                            <p style="text-align: start;">
                                نقدم تقييم عقاري معتمد وموثوق يساعدك في معرفة القيمة الحقيقية لعقارك بناءً على تحليل
                                شامل للسوق وإحتياجاتك، مما يسهل
                                عليك إتخاذ قرارات مدروسة.
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
                                <img src="{{asset('assets/website/images/ادارة المرافق.png')}}" alt="ادارة المرافق">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">الاستشارات العقارية</a>
                            </h3>
                            <p style="text-align: start;">نقدم خدماتنا الإستشارية بمختلف الإحتياجات لعملائنا
                                لتمكينهم من
                                إتخاذ قرارتهم العقارية المتنوعة على أساس المعرفة الشاملة والرؤى القائمة على البيانات
                                والخبرات المتراكمة لفريق العمل</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="featured-projects p_relative sec-pad bg-color-3" style="direction: ltr;">
        <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url('{{asset('assets/website/images/shape/shape-7.png')}}');">
        </div>
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">العروض العقارية
                </h2>
                <span class="sub-title p_relative d_block fs_18 lh_25 mb_10">عقارات مُختارة تُناسب إحتياجكم</span>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                <div class="inner-box p_relative d_block pl_130 pr_120">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <figure class="image-box p_relative d_block pr_15">
                                <img src="assets/images/صورة العقار.png" alt="صورة العقار">
                            </figure>
                        </div>
                        <div style="text-align: right;" class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_4">
                                <div class="content-box p_relative d_block mr_50">
                                    <div class="title-box p_relative d_block mb_25">
                                        <h3 class="d_block fs_24 lh_30 fw_exbold mb_3">مصنع للايجار</h3>
                                        <span class="p_relative d_block fs_17 mt-3 lh_20">مواصفات العقار</span>
                                    </div>
                                    <div class="text p_relative d_block mb_30">
                                        <p class="lh_30">Anim idet laborum. Sed ut perspiciatis und omnis iste natus
                                            goluptatem acusantium dolore mque lorem ipsum dolor sit amet consectetur
                                            adipisicing elit sed incididunt.</p>
                                    </div>
                                    <ul class="project-discription p_relative d_block mb_50">
                                        <li style="text-align: right;"
                                            class="p_relative d_block fs_16 lh_25 color_black mb_15">المساحة
                                            الاجمالية: <span class="fw_sbold">1,195متر</span></li>
                                        <li style="text-align: right;"
                                            class="p_relative d_block fs_16 lh_25 color_black mb_15">مسطح البناء:
                                            <span class="fw_sbold">1,111متر</span>
                                        </li>
                                        <li style="text-align: right;"
                                            class="p_relative d_block fs_16 lh_25 color_black mb_15"> سعة عداد
                                            لاكهربا: <span class="fw_sbold">200</span></li>
                                        <li style="text-align: right;"
                                            class="p_relative d_block fs_16 lh_25 color_black mb_15">تكلفة الكهرباء:
                                            <span class="fw_sbold">1</span>
                                        </li>
                                        <li style="text-align: right;"
                                            class="p_relative d_block fs_16 lh_25 color_black mb_15"> دورات المياة:
                                            <span class="fw_sbold">1</span>
                                        </li>
                                        <li style="text-align: right;"
                                            class="p_relative d_block fs_16 lh_25 color_black">
                                            سعر الايجار السنوي:
                                            <span class="fw_sbold">6300,000 ريال</span>
                                        </li>
                                        <p style="color: #526652; margin-top: 10px;">غير شامل الضريبة وعمولة الوساطة
                                            العقارية</p>
                                    </ul>
                                    <div class="btn-box">
                                        <!-- <a href="project-details.html" class="theme-btn btn-three mr_10">مشاهدة التفاصيل<i class="icon-3"></i></a> -->
                                        <a href="project.html" class="theme-btn btn-one rounded-pill">مشاهدة
                                            التفاصيل</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">فروعنا</h2>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: right;"
                                class="p_relative d_block fs_50 lh_60 mb-2 fw_sbold">نخدمكم في</h2>
                            <p style="font-size: 30px; line-height: 1.8; color: #526652;">ونطمح لخدمتكم في جميع</p>
                            <p style="font-size: 30px; line-height: 1.8; color: #526652;">أنحاء السعودية عن قريب</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <img style="width: 100%; max-width: 100%;" src="./assets/images/الخريطة.png"
                             alt="خريطة الممكلة">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-section p_relative sec-pad centred" style="direction: ltr;">
        <div class="large-container">
            <div class="sec-title mb_30">
                <h2 class="p_relative d_block fs_42 lh_52 mb_45 fw_exbold" style="color: #001D00;">شركاء النجاح</h2>
                <p style="color: #526652;">تقدم تطور قدرة العقارية شراكاتها الاستراتيجية في مختلف
                    القطاعات لتعزز قدرتها وتوسيع نطاقها
                </p>
            </div>
            <ul class="six-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-1.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-2.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-3.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-4.png"
                                                                             alt=""></a></figure>
                </li>
                <!-- <li style="border: 3px solid #C19C6E; border-radius: 10px;">
                                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                                </li> -->
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-5.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-6.png"
                                                                             alt=""></a></figure>
                </li>
            </ul>
            <div class="more-text p_relative d_block mt_10">
                <p>ثقة عملائنا ورضاهم من اهم اهدافنا </p>
            </div>
        </div>
    </section>

    <section class="testimonial-style-two p_relative sec-pad bg-color-1" style="direction: ltr;">
        <div class="pattern-layer p_absolute" style="background-image: url(assets/images/shape/shape-14.png);">
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
                                        src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
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
                                        src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Andy S. Matthew</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Senior Manager</span>
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
                                        src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
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
                                        src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Andy S. Matthew</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Senior Manager</span>
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
                                        src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
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
                                        src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <h5 class="d_block fs_18 lh_30 fw_sbold">Andy S. Matthew</h5>
                                <span class="designation p_relative d_block fs_14 lh_20">Senior Manager</span>
                            </div>
                            <div class="text p_relative d_block">
                                <p class="lh_30">Duis aute irure dolor reprehenderit in voluptate cilum fugiat nulla
                                    pariatur. Excepteur aintys cupidata proidents sunt in culpa qui officia desmolit
                                    anim.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-1.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-2.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-3.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-4.png"
                                                                             alt=""></a></figure>
                </li>
                <!-- <li style="border: 3px solid #C19C6E; border-radius: 10px;">
                                        <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                                    </li> -->
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-5.png"
                                                                             alt=""></a></figure>
                </li>
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img src="assets/images/clients/clients-6.png"
                                                                             alt=""></a></figure>
                </li>
            </ul>
        </div>
    </section>

    <section class="feature-style-two p_relative sec-pad">
        <div class="intro text-center mb-5">
            <div class="heading text-center font-weight-bold mb-3" style="color: #001D00; font-size: 40px;">لماذا
                تختار قدرة
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
                                <img src="./assets/images/التوسيق العقاري.png" alt="تسويق العقاري">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="index-3.html" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">‫مرخصة‫ومعتمدة</a>
                            </h3>
                            <p>‫تعتبر‬‫شركة‬ ‫قدرة‬ ‫العقارية‬ ‫من‬ ‫أوائل‬ ‫الشركات‬ ‫المرخصة‬
                                ‫والمصنفة‬ ‫من‬ ‫قبل‬ ‫الهيئة‬ ‫العامة‬ ‫للعقار‬ ‫في‬ ‫المملكة‬ ‫العربية‬ ‫السعودية‬
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
                                <img src="./assets/images/إدارة العقارات.png" alt="ادارة العقارات">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="index-3.html" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">الابتكار والتطوير</a>
                            </h3>
                            <p>‫تدمج‬‫قدرة‬ ‫العقارية‬ ‫التقنيات‬ ‫الحديثة‬ ‫في‬ ‫جميع‬ ‫مراحل‬
                                ‫الخدمات‬ ‫العقارية‬ ‫لتحسين‬ ‫عمليات‬ ‫ه‬‫ا‬‫وتقديم‬ ‫حلول‬ ‫جديدة‬ ‫وفعالة‬</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="./assets/images/ادارة المرافق.png" alt="ادارة المرافق">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="index-3.html" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">‫الكفاءة ‬‫واالحترافية‬</a>
                            </h3>
                            <p class="text-center">‫بسلسلة‬‫من‬ ‫الممارسات‬ ‫االحترافية‬ ‫المستدامة‪،‬‬ ‫تمكن‬
                                ‫قدرة‬ ‫العقارية‬ ‫من‬ ‫رفع‬ ‫الكفاءة‬ ‫التشغيلية‬ ‫للعقار‬ ‫وإطالة‬ ‫العمر‬
                                ‫الفعلي‬</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="./assets/images/ادارة المرافق.png" alt="ادارة المرافق">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="index-3.html" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">‫النزاهة</a>
                            </h3>
                            <p class="text-center">‫نتمسك‬‫بأعلى‬ ‫المعايير‬ ‫األخالقية‬ ‫والشفافية‬ ‫في‬ ‫جميع‬
                                ‫تعامالتنا‬ ‫مع‬ ‫عمالئنا‬</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 feature-block mt-3">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div
                            class="inner-box p_relative text-center d_block bg_white b_shadow_6 pt_60 pr_45 pb_55 pl_45 tran_5">
                            <div class="icon-box p_relative d_block fs_100 lh_100 green_color mb_25 tran_5">
                                <img src="./assets/images/المزادات العقارية.png" alt="المزادات العقارية">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="index-3.html" class="d_iblock color_black hov_color"
                                   style="color: #526652 !important;">‫المسؤولية‬‫والثقة</a>
                            </h3>
                            <p class="text-center">‫نسعى ‬‫لبناء‬ ‫علاقات‬ ‫متينة‬ ‫مع‬ ‫عمالئنا‬ ‫وشركاء‬ ‫األعمال‬
                                ‫عبر‬ ‫تقديم‬ ‫األولية‬ ‫القصوى‬ ‫ل‬ ‫مصالح‬‫هم‬‫المتنوعة‬</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section class="news-section p_relative sec-pad">
        <div class="large-container">
            <div class="sec-title centred mb_55">
                <h2 class="p_relative d_block fs_50 lh_60 fw_exbold">مقالات تُفيدك</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1" style="text-align: start;">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                <span class="post-date">23 JUN 2021</span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Developing in 106 Countries For Many Communities</a>
                                </h3>
                                <p>Voluptate velit cillum dol fugiat pariatur. Excepteur anim idet laboru sed
                                    perspise tis undy omnis iste natus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1" style="text-align: start;">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="assets/images/news/news-1.jpg" alt=""></a>
                                </figure>
                                <span class="post-date">23 JUN 2021</span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Developing in 106 Countries For Many Communities</a>
                                </h3>
                                <p>Voluptate velit cillum dol fugiat pariatur. Excepteur anim idet laboru sed
                                    perspise tis undy omnis iste natus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1" style="text-align: start;">
                            <div class="image-box">
                                <figure class="image"><a href="blog-details.html"><img
                                            src="assets/images/news/news-1.jpg" alt=""></a>
                                </figure>
                                <span class="post-date">23 JUN 2021</span>
                            </div>
                            <div class="lower-content">
                                <h3><a href="blog-details.html">Developing in 106 Countries For Many Communities</a>
                                </h3>
                                <p>Voluptate velit cillum dol fugiat pariatur. Excepteur anim idet laboru sed
                                    perspise tis undy omnis iste natus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
