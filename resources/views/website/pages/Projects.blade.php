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
                    العروض العقارية
                </li>

            </ol>
        </nav>
        <div class="row g-3 align-items-center">
            <!-- Property Status -->
            <div class="col-lg-4 mt-3 col-md-4 col-sm-6">
                <div class="select-box">
                    <select class="wide">
                        <option data-display="حالة العقار">حالة العقار</option>
                        <option value="1">للإيجار</option>
                        <option value="2">للبيع</option>
                    </select>
                </div>
            </div>
            <!-- Property Type -->
            <div class="col-lg-4 mt-3 col-md-4 col-sm-6">
                <div class="select-box">
                    <select class="wide">
                        <option selected>نوع العقار</option>
                        <option value="1">شقة</option>
                        <option value="2">فيلا</option>
                    </select>
                </div>
            </div>
            <!-- Locations -->
            <div class="col-lg-4 mt-3 col-md-4 col-sm-6">

                <div class="select-box">
                    <select class="wide">
                        <option selected>الموقع</option>
                        <option value="1">الرياض</option>
                        <option value="2">جدة</option>
                    </select>
                </div>
            </div>
            <!-- Price Range -->
            <div class="col-lg-9 col-md-4 col-sm-6 mt-3">
                <input type="number" class="form-control shadow-sm" placeholder="السعر" min="0" max="10000"
                       step="100" id="priceRangeInput">
            </div>

            <!-- Search Button -->
            <div class="col-lg-3 col-md-4 col-sm-12 mt-3 text-center">
                <button class="btn btn-success w-100 shadow-sm">بحث <i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box bg-color-1">
                        <div class="image-box">
                            <figure class="image">
                                <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}" alt="" /></a>
                            </figure>
                        </div>
                        <div class="lower-content">
                            <h3>
                                <a href="blog-details.html">مستودع للايجار بحي السلي بمخطط 360</a>
                            </h3>
                            <p>
                                Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                idet laboru sed perspise tis undy omnis iste natus.
                            </p>
                            <h3>
                                <a href="blog-details.html">200,000 ريال / سنوياً</a>
                            </h3>
                            <p
                                style="background-color: #001D00; padding: 5px; color: #fff;font-weight: bold; border-radius: 5px;">
                                تفاصيل العقار
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
