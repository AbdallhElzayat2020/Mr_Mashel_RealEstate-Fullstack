<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>قدرة العقارية || التوظيف</title>

    @include('website.layouts.head')
</head>

<!-- page wrapper -->

<body>
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
    @include('website.layouts.header')
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box" style="direction: rtl; text-align: right">
            <div class="nav-logo">
                <a href="index-2.html"><img src="{{ asset('assets/website/images/LOGO.png') }}" alt="" title=""/></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>للتواصل معنا</h4>
                <ul>
                    <li>الرياض - حي المروج</li>
                    <li>الرياض - حي السلي</li>
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
                    <a href="#" style="color: #001D00; text-decoration: none; font-weight: bold;">الرئيسية</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    التوظيف
                </li>

            </ol>
        </nav>
    </div>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">التوظيف</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                فرصتك تبدأ من هنا - انضم لفريق قدرة العقارية!
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        حلمك بوظيفة مميزة في المجال العقاري؟ نحن جاهزين نحققه معك!
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        في شركة قدرة العقارية نفتح لك الباب للعمل مع فريق محترف في بيئة مليانة شغف،
                                        تطور، وإنجاز.
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                ليه تختارنا💼 ؟
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
                                نبحث عنك إذا🎯 :
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
            </div>
        </div>
    </section>



    <section class="contact-style-three p_relative pt_110 pb_120 bg-light" style="direction: rtl">
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_30 lh_60 mb-2 fw_exbold">
                    جاهز تبدأ رحلتك معنا🚀؟
                </h2>
                <p style="color: #526652" class="text-center">
                    عبّ بياناتك في النموذج تحت وخلنا نبدأ طريق النجاح سوا!
                </p>
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
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="username" placeholder="البريد الالكتروني"
                                           required=""/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="subject" required="" placeholder="المؤهل الدراسي"/>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="عدد سنوات الخبرة">
                                                عدد سنوات الخبرة
                                            </option>
                                            <option value="1">لايوجد خبرة سابقة</option>
                                            <option value="2">من سنة الي تلاثة سنوات</option>
                                            <option value="3">من 3 سنوات الي 5 سنوات</option>
                                            <option value="3">من 5 الي 10 سنوات</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="phone" required="" placeholder="مجال الخبرة ان وجدت"/>
                                </div>
                                <div class="col-lg- col-md-12 col-sm-12 form-group">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="المسمى الوظيفي">
                                                المسمى الوظيفي
                                            </option>
                                            <option value="">- مهندس مدني</option>
                                            <option value="">- مهندس معماري</option>
                                            <option value="">- مهندس كهربائي</option>
                                            <option value="">- مهندس تقنية معلومات</option>
                                            <option value="">- فني إلكترونيات</option>
                                            <option value="">- فني كهربائي</option>
                                            <option value="">- فني حدادة / لحام</option>
                                            <option value="">- فني نجارة</option>
                                            <option value="">- عامل عادي</option>
                                            <option value="">- عامل تحميل وتنزيل</option>
                                            <option value="">- أخصائي مشاريع</option>
                                            <option value="">- منسق مشاريع</option>
                                            <option value="">- مدير مشروع</option>
                                            <option value="">- فني سباك</option>
                                            <option value="">- فني دهان</option>
                                            <option value="">- فني بناء</option>
                                            <option value="">- مقاول</option>
                                            <option value="">- مشرف عمال</option>
                                            <option value="">- مشرف صيانة</option>
                                            <option value="">- مشرف عقار</option>
                                            <option value="">- أخصائي موارد بشرية</option>
                                            <option value="">- مسؤول علاقات حكومية</option>
                                            <option value="">- مسؤول تحصيل</option>
                                            <option value="">- أخصائي تسويق</option>
                                            <option value="">- أخصائي خدمة عملاء</option>
                                            <option value="">- مشرف مرافق</option>
                                            <option value="">- مدير عمليات</option>
                                            <option value="">- مشرف عمليات</option>
                                            <option value="">- مدير تنفيذي</option>
                                            <option value="">- محاسب أول</option>
                                            <option value="">- محاسب عام</option>
                                            <option value="">- محاسب مالي</option>
                                            <option value="">- محلل مالي</option>
                                            <option value="">- فني شبكات وإتصالات</option>
                                            <option value="">- وسيط عقاري</option>
                                            <option value="">- مسجل عقاري</option>
                                            <option value="">- محكم عقاري</option>
                                            <option value="">- مدير عقار مشترك</option>
                                            <option value="">- مسؤول مزادات عقارية</option>
                                            <option value="">- مقيم عقاري</option>
                                            <option value="">- سائق</option>
                                            <option value="">- عامل نظافة</option>
                                            <option value="">- مهندس ديكور</option>
                                            <option value="">- مصمم داخلي</option>
                                            <option value="">- سكرتير تنفيذي</option>
                                            <option value="">- مراجع داخلي</option>
                                            <option value="">- محلل مبيعات</option>
                                            <option value="">- محلل أعمال</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                    <div
                                        style="border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem; display: flex; align-items: center;">
                                        <input type="file" class="form-control border-0" id="inputGroupFile02"
                                               accept=".pdf,.doc,.docx"
                                               style="border: none; box-shadow: none; width: 100%;">
                                        <label class="input-group-text border-0" for="inputGroupFile02"
                                               style="border: none; background-color: transparent; margin-bottom: 0;">
                                            ارفق السيرة الذاتية
                                        </label>
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
