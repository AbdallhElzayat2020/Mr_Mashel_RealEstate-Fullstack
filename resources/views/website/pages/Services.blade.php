@extends('website.layouts.master')
@section('web_title', 'الخدمات || قدرة العقارية')
@include('website.layouts.header_2')
@section('content')
    <!-- sidebar-page-container -->
    <section class="sidebar-page-container sec-pad" style="direction: rtl; padding-top: 150px;">
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
                </ol>
            </nav>
        </div>
    </section>
    <!-- sidebar-page-container end -->

    <section class="feature-style-two p_relative sec-pad">
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
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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
                                <img src="{{asset('assets/website/images/المزادات العقارية.png')}}"
                                     alt="المزادات العقارية">
                            </div>
                            <h3 class="d_block fs_20 lh_30 fw_exbold mb_25 pb_25">
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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
                                <a href="index-3.html" class="d_iblock color_black hov_color"
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


    <!-- clients-section -->
    <section class="clients-section p_relative sec-pad centred" style="direction: ltr;">
        <div class="large-container">
            <div class="sec-title mb_30">
                <h2 class="p_relative d_block fs_42 lh_52 mb_45 fw_exbold" style="color: #001D00;">عملاء يثقون بنا
                </h2>
                <p style="color: #526652;">‫تطور ‬‫قدرة‬ ‫العقارية‬ ‫شراكاتها‬ ‫‬ الا‫ستراتيجية ‬‫في‬ ‫مختلف‬
                    ‫القطاعات‬ ‫لتعزز‬ ‫قدرتها‬ ‫وتوسيع‬ ‫نطاقها‬</p>
            </div>
            <ul class="six-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <li>
                    <figure class="clients-logo"><a href="index-3.html"><img
                                src="{{asset('assets/website/images/clients/clients-1.png')}}" alt=""></a></figure>
                </li>

            </ul>
        </div>
    </section>
    <!-- clients-section end -->


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
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt=""></figure>
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
                                        src="{{asset('assets/website/images/resource/testimonial-2.jpg')}}" alt=""></figure>
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
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt=""></figure>
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
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt=""></figure>
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
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt=""></figure>
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
                                        src="{{asset('assets/website/images/resource/testimonial-1.jpg')}}" alt=""></figure>
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

@endsection
