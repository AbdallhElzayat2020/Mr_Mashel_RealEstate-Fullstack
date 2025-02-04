@extends('website.layouts.master')
@section('web_title', 'المدونة || قدرة العقارية')
{{--navbar--}}
@include('website.layouts.header_2')
{{--navbar--}}
@section('content')

    <section class="sidebar-page-container sec-pad" style="direction: rtl; padding-top: 200px;">
        <div class="auto-container">

            <nav style="--bs-breadcrumb-divider: '>'; background-color: #f9f9f9; padding: 10px; border-radius: 5px;"
                 aria-label="breadcrumb">
                <ol class="breadcrumb" style=" margin: 0; background-color: transparent; padding: 0;">
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-item active">الرئيسية</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        المدونة
                    </li>
                    <li class="breadcrumb-item" style="color: green; text-decoration: none; font-weight: bold;"
                        aria-current="page">
                        اسم المدونة
                    </li>
                </ol>
            </nav>


            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="sec-title centred mb_20">
                        <h2 class="p_relative d_block fs_40 lh_60 fw_exbold"
                            style="color: #001D00; text-align: start">عنوان المقالة
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
                                    <h3 style="text-align: start; margin-bottom: 15px;">المقدمة</h3>
                                    <div class="text"
                                         style="text-align: start; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                                        <p>Totam rem aperiam, eaque ipsa quae illo inventore veritatis quasi
                                            architecto beatae
                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur
                                            odit autgs sed consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciunt.
                                            Neque poro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 text-column my-4">
                                    <h3 style="text-align: start; margin-bottom: 15px;">المحتوي</h3>
                                    <div class="text"
                                         style="text-align: start; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                                        <p>
                                            Totam rem aperiam, eaque ipsa quae illo inventore veritatis quasi
                                            architecto beatae
                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur
                                            odit autgs sed consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciunt.
                                            Neque poro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                            Totam rem aperiam, eaque ipsa quae illo inventore veritatis quasi
                                            architecto beatae
                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur
                                            odit autgs sed consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciunt.
                                            Neque poro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                            Totam rem aperiam, eaque ipsa quae illo inventore veritatis quasi
                                            architecto beatae
                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur
                                            odit autgs sed consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciunt.
                                            Neque poro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12 text-column">
                                    <div class="text"
                                         style="text-align: start; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                                        <p>Totam rem aperiam, eaque ipsa quae illo inventore veritatis quasi
                                            architecto beatae
                                            vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur
                                            odit autgs sed consequuntur magni dolores eos qui ratione voluptatem
                                            sequi nesciunt.
                                            Neque poro quisquam est, qui dolorem ipsum quia dolor sit amet.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="text">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="card text-center p-4 d-flex align-items-center justify-content-center"
                         style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                        <div class="content">
                            <h5>دونت بواسطة</h5>
                            <img style="width: 100px; height: 100px; border-radius: 50%; margin: 15px auto;"
                                 src="{{asset('assets/website/images/project/project-1.jpg')}}" alt="صورة الكاتب">
                        </div>
                    </div>
                    <div class="card text-center mt-4 d-flex align-items-center justify-content-center"
                         style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 10px; padding: 15px;">
                        <div class="content">
                            <h5>هل لديك سؤال</h5>
                            <button class="btn btn-success" style="margin: 25px auto;">تحدث معنا
                                <i class="fa-solid fa-phone" style="margin: 0px 10px;"></i>
                            </button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection
