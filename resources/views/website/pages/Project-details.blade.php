@extends('website.layouts.master')
@section('web_title', ' قدرة العقارية')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .swiper {
            width: 100%;
            margin: 0 auto;
        }

        .mySwiper2 {
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .mySwiper2 .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        .mySwiper {
            height: 120px;
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            overflow: hidden;
            opacity: 0.6;
            border: 2px solid transparent;
            transition: opacity 0.3s, border 0.3s;
        }

        .mySwiper .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
            border-color: #526652;
        }

        .swiper-button-next,
        .swiper-button-prev {
            background: #526652;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background 0.3s;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: #3e5041;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 16px;
            font-weight: bold;
        }

        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            position: relative;
            max-width: 80%;
            max-height: 80%;
        }

        .popup-content img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .popup-close {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #526652;
            color: #fff;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            font-size: 18px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush
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
                        العروض العقارية
                    </li>
                    <li class="breadcrumb-item" style="color: green; text-decoration: none; font-weight: bold;"
                        aria-current="page">
                        اسم العرض العقاري
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- sidebar-page-container end -->


    <div class="container my-5">
        <!-- Slider الرئيسي -->
        <h3 class=" mb-4 " style="text-align: start;">
            مبنى إداري للإيجار بحي الملز بموقع مميز وإستراتيجي
        </h3>
        <div style="--swiper-navigation-color: #526652; --swiper-pagination-color: #526652"
             class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="popup-trigger"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" class="popup-trigger"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" class="popup-trigger"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" class="popup-trigger"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" class="popup-trigger"/>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- Slider الصور المصغرة -->
        <div thumbsSlider="" class="swiper mySwiper mt-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-1.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-2.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-3.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-4.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img src="https://swiperjs.com/demos/images/nature-5.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup للصورة -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="popup-close">&times;</span>
            <img id="popup-image" src="" alt="Popup Image"/>
        </div>
    </div>


    <div class="project-overview">
        <div class="container">
            <div class="col-lg-12 p-3 rounded-lg bg-light col-md-12 col-sm-12 content-column"
                 style="text-align: start;">
                <div class="content-box p_relative d_block ml_30">
                    <!-- العنوان الرئيسي -->
                    <h3 class="d_block fs_24 lh_30 mb_16" style="color: #001D00;">
                        مبنى إداري للإيجار بحي الملز بموقع مميز وإستراتيجي وقريب من كافة الخدمات
                    </h3>

                    <!-- الوصف -->
                    <p class="lh_30 mb_14" style="color: #555;">
                        فرصة ما تتفوت | مكتب اداري للايجار علي شارع صلاح الدين الايوبي (الستين سابقا) بحي المز بموقع
                        استراتيجي ومميز وقريب من كافة الخدمات
                    </p>

                    <ul class="project-info clearfix p_relative d_block mb_70">
                        <li class="p_relative fw_bold d_block fs_25 lh_30 mb_20">
                            <i class="fas fa-home ms-4"></i>
                            <h5 class="d_iblock fs_20 fw_bold w_200" style="color: #001D00;">
                                مواصفات العقار
                            </h5>
                        </li>
                        <li class="p_relative d_block fs_18 lh_30 mb_20">
                            <h5 class="d_iblock fs_18 fw_normal  w_200" style="color: #001D00;">المساحة الإجمالية
                            </h5>
                            2000 متر مربع
                        </li>
                        <li class="p_relative d_block fs_18 lh_30 mb_20">
                            <h5 class="d_iblock fs_18 fw_normal  w_200" style="color: #001D00;">الموقع</h5>الدور
                            الأرضي
                        </li>
                        <li class="p_relative d_block fs_18 lh_30 mb_20">
                            <h5 class="d_iblock fs_18 fw_normal  w_200" style="color: #001D00;">دورات المياه</h5>3
                            دورات مياه
                        </li>
                        <li class="p_relative d_block fs_18 lh_30 mb_20">
                            <h5 class="d_iblock fs_18 fw_normal  w_200" style="color: #001D00;">المقاصة</h5>3 مقاصة
                            جاهزة للاستخدام
                        </li>
                        <li class="p_relative d_block fs_18 lh_30">
                            <h5 class="d_iblock fs_18 fw_normal  w_200" style="color: #001D00;">المرافق</h5>غرفة
                            موصلة
                            بالمياه وتصريف
                            المياه - غرفة لاستقبال الزوار
                        </li>
                    </ul>

                    <div class="features-box mb_50">
                        <h4 class="fs_20 fw_bold mb_20" style="color: #001D00;">
                            <i class="fas fa-star ms-3"></i> مميزات العقار:
                        </h4>
                        <ul class="features-list" style="color: #555;">
                            <li class="fw_normal  w_200">أنظمة دفاع مدني حديثة ومتطورة</li>
                            <li class="fw_normal  w_200">مكتب جديد</li>
                            <li class="fw_normal  w_200">موقع إستراتيجي ومميز</li>
                            <li class="fw_normal  w_200">إطلالة على شارع السنترال</li>
                            <li class="fw_normal  w_200">عدد 2 مواقف خاصة</li>
                            <li class="fw_normal  w_200">متوفر مصعد للصعود والنزول</li>
                            <li class="fw_normal  w_200">عداد كهرباء مستقل</li>
                            <li class="fw_normal  w_200">عداد مياه مستقل</li>
                            <li class="fw_normal  w_200">خدمات الإدراك المشتركة مجاناً</li>
                            <li class="fw_normal  w_200">مستندات مكتملة للتأجير</li>
                        </ul>
                    </div>

                    <div class="price-contact-box">
                        <h4 class="fs_20 fw_bold mb_20" style="color: #001D00;">
                            <i class="fas fa-money-bill-wave ms-3"></i> الأسعار وطرق التواصل:
                        </h4>
                        <ul class="price-list mb_20" style="color: #555;">
                            <li>- ريال الدفعتين 150,000 قيمة الإيجار السنوي</li>
                            <li>- ريال الدفعة الواحدة 135,000 قيمة الإيجار السنوي</li>
                            <li>- قيمة الإيجار غير شاملة الضريبة وعمولة التأجير</li>

                            <p> 0542675602 <br>
                                0569960646
                            </p>
                        </ul>
                        <div class="contact-info my-3" style="color: #001D00;">
                            <p>
                                ------------------------------------------------------
                                <br>
                                شـركة قـدرة العقـارية
                                <br>
                                بقدراتنا المتنوعة،، نمكنك بالوصول لهدفك
                            </p>
                        </div>
                    </div>

                    <div class="btn-box d-flex align-items-center justify-content-center">
                        <a href="project-details.html" class="btn mr_11"
                           style="background-color: #001D00; color: #fff;">400,000 ريال سعودي
                        </a>

                        <a href="project-details.html" class="btn mr_11"
                           style="background-color: #526652; color: #fff;"><i class="fas fa-download fs_16"></i>
                            تنزيل البرشور
                        </a>
                        <a href="project-details.html" class="btn mr_11"
                           style="background-color: #001D00; color: #fff;"><i class="fas fa-phone fs_16"></i> إتصل
                            بنا
                        </a>
                        <a href="project-details.html" class="btn mr_11"
                           style="background-color: #526652; color: #fff;"><i class="fas fa-envelope fs_16"></i>
                            إتصل بنا
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="p-4 mt-5">
        <div class="container">
            <div class="heading text-center font-weight-bold mb-3" style="color: #001D00; font-size: 40px;">
                العقارات
            </div>
            <div class="row">


                <!-- العقارات -->

                <!-- Card 1 -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card realestate-card">
                                <img src="https://via.placeholder.com/300x200" alt="Property"
                                    class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">شقة فاخرة في القاهرة</h5>
                                    <p class="card-text">3 حجرات - 2 حمامات</p>
                                    <span class="text-primary fw-bold">250,000$</span>
                                </div>
                            </div>
                        </div> -->
                <!--  -->
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt=""/>
                                    </a>
                                </figure>
                                <span class="post-date">7 1 2003</span>
                            </div>
                            <div class="lower-content">
                                <h3 style="text-align: center;">
                                    <a href="blog-details.html">Developing in 106 Countries</a>
                                </h3>
                                <p style="text-align: center;">
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img
                                            src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                            alt=""/></a>
                                </figure>
                                <span class="post-date">7 1 2003</span>
                            </div>
                            <div class="lower-content">
                                <h3 style="text-align: center;">
                                    <a href="blog-details.html">Developing in 106 Countries</a>
                                </h3>
                                <p style="text-align: center;">
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img
                                            src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                            alt=""/></a>
                                </figure>
                                <span class="post-date">7 1 2003</span>
                            </div>
                            <div class="lower-content">
                                <h3 style="text-align: center;">
                                    <a href="blog-details.html">Developing in 106 Countries</a>
                                </h3>
                                <p style="text-align: center;">
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img
                                            src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                            alt=""/></a>
                                </figure>
                                <span class="post-date">7 1 2003</span>
                            </div>
                            <div class="lower-content">
                                <h3 style="text-align: center;">
                                    <a href="blog-details.html">Developing in 106 Countries</a>
                                </h3>
                                <p style="text-align: center;">
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img
                                            src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                            alt=""/></a>
                                </figure>
                                <span class="post-date">7 1 2003</span>
                            </div>
                            <div class="lower-content">
                                <h3 style="text-align: center;">
                                    <a href="blog-details.html">Developing in 106 Countries</a>
                                </h3>
                                <p style="text-align: center;">
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img
                                            src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                            alt=""/></a>
                                </figure>
                                <span class="post-date">7 1 2003</span>
                            </div>
                            <div class="lower-content">
                                <h3 style="text-align: center;">
                                    <a href="blog-details.html">Developing in 106 Countries</a>
                                </h3>
                                <p style="text-align: center;">
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('js')
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->

        <script>
            // تهيئة الـ Swiper
            const swiper = new Swiper('.mySwiper2', {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                thumbs: {
                    swiper: {
                        el: '.mySwiper',
                        slidesPerView: 5,
                        spaceBetween: 15,
                    },
                },
            });

            // التعامل مع الـ Popup
            const popup = document.getElementById('popup');
            const popupImage = document.getElementById('popup-image');
            const closePopup = document.querySelector('.popup-close');
            const triggers = document.querySelectorAll('.popup-trigger');

            triggers.forEach(trigger => {
                trigger.addEventListener('click', function () {
                    popupImage.src = this.src;
                    popup.style.display = 'flex';
                });
            });

            closePopup.addEventListener('click', function () {
                popup.style.display = 'none';
            });

            // إغلاق الـ Popup عند الضغط خارجه
            window.addEventListener('click', function (e) {
                if (e.target === popup) {
                    popup.style.display = 'none';
                }
            });
        </script>
    @endpush
@endsection
