@extends('website.layouts.master')
@section('web_title', 'التدريب || قدرة العقارية')
@include('website.layouts.header_2')
@section('content')
    <div class="container my-5" style="padding-top: 100px;">
        <nav style="--bs-breadcrumb-divider: '>'; background-color: #f9f9f9; padding: 10px; border-radius: 5px;"
             aria-label="breadcrumb">
            <ol class="breadcrumb" style=" margin: 0; background-color: transparent; padding: 0;">
                <li class="breadcrumb-item">
                    <a href="#" style="color: #001D00; text-decoration: none; font-weight: bold;">الرئيسية</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    التدريب
                </li>

            </ol>
        </nav>
    </div>

    <section class="featured-projects p_relative sec-pad ">
        <!-- <div class="pattern-layer p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-7.png);"></div> -->
        <div class="large-container">
            <div class="sec-title mb_55 centred">
                <h2 style="color: #001D00;" class="p_relative d_block fs_40 lh_60 mb-2 fw_exbold">التدريب</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">إنطلق نحو عالم العقار مع برنامج
                                تدريب قدرة
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        أكيد تطمح تبني مسيرة مهنية ناجحة في المجال العقاري
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        في شركة قدرة العقارية، نقدم لك فرصة فريدة لتبدأ طريقك باحترافية
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        ينضمون لفريقنا بعروض وظيفية مميزة!
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="text mt-5">
                            <h2 style="color: #001D00; text-align: start;"
                                class="p_relative d_block fs_25 lh_60 mb-2 fw_bold">
                                ليش تختار برنامجنا؟
                            </h2>
                            <ul class="d-flex flex-column gap-3 " style="text-align: start;">
                                <li>
                                    <a style="color: #526652;" href="javascript:void(0)">
                                        • تدريب عملي واحترافي يقوده خبراء المجال
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        • تأهيل شامل يغطي كل ما تحتاجه لتتميز في السوق
                                    </a>
                                </li>
                                <li>
                                    <a class="mt-3" style="color: #526652;" href="javascript:void(0)">
                                        • فرصة حقيقية لتحول شغفك إلى وظيفة مستقبلية
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
                    الفرصة قدامك الآن🚀!
                </h2>
                <p style="color: #526652" class="text-center">
                    عبّ بياناتك وخلنا نبدأ سوا رحلة النجاح
                </p>
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
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group mb_20">
                                    <input type="text" name="username" placeholder="البريد الالكتروني"
                                           required="" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                    <input type="text" name="subject" required="" placeholder="المؤهل الدراسي" />
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
                                    <input type="text" name="phone" required="" placeholder="مجال الخبرة ان وجدت" />
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

@endsection
