@extends('website.layouts.master')
@section('web_title', 'المدونة || قدرة العقارية')
@include('website.layouts.header_2')
@section('content')
    <!-- news-section -->
    <section class="news-section p_relative sec-pad pt_250 pb_170" style="padding-top: 200px;">
        <div class="large-container">
            <nav style="--bs-breadcrumb-divider: '>'; background-color: #f9f9f9; padding: 10px; border-radius: 5px;"
                 aria-label="breadcrumb">
                <ol class="breadcrumb" style=" margin: 0; background-color: transparent; padding: 0;">
                    <li class="breadcrumb-item">
                        <a href="{{route('home')}}" style="color: green; text-decoration: none; font-weight: bold;">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        المدونة
                    </li>
                </ol>
            </nav>

            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                                                     alt="" /></a>
                                </figure>
                                <!-- <span class="post-date">7 1 2003</span> -->
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="blog-details.html">عنوان المدونة</a>
                                </h3>
                                <p>
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                                                     alt="" /></a>
                                </figure>
                                <!-- <span class="post-date">7 1 2003</span> -->
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="blog-details.html">عنوان المدونة</a>
                                </h3>
                                <p>
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                                                     alt="" /></a>
                                </figure>
                                <!-- <span class="post-date">7 1 2003</span> -->
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="blog-details.html">عنوان المدونة</a>
                                </h3>
                                <p>
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                                                     alt="" /></a>
                                </figure>
                                <!-- <span class="post-date">7 1 2003</span> -->
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="blog-details.html">عنوان المدونة</a>
                                </h3>
                                <p>
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                                                     alt="" /></a>
                                </figure>
                                <!-- <span class="post-date">7 1 2003</span> -->
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="blog-details.html">عنوان المدونة</a>
                                </h3>
                                <p>
                                    Voluptate velit cillum dol fugiat pariatur. Excepteur anim
                                    idet laboru sed perspise tis undy omnis iste natus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block mt-4 text-center">
                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                         data-wow-duration="1500ms">
                        <div class="inner-box bg-color-1">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-details.html"><img src="{{asset('assets/website/images/news/news-1.jpg')}}"
                                                                     alt="" /></a>
                                </figure>
                                <!-- <span class="post-date">7 1 2003</span> -->
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="blog-details.html">عنوان المدونة</a>
                                </h3>
                                <p>
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
    <!-- news-section end -->
@endsection
