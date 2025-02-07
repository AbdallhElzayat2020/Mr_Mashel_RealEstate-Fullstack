@extends('dashboard.layouts.master')
@section('title', 'إنشاء مدونه')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            المدونات الالكترونية
        </h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.blogs.store') }}">
                            @csrf

                            <div class="col-xl-12 col-md-12">
                                {{--status --}}
                                <div class="form-check form-switch d-flex align-items-center gap-3 mb-5">
                                    <input class="form-check-input fs-large" name="status" value="active"
                                           type="checkbox"
                                           id="blog">
                                    <label class="form-check-label" for="blog">حاله المقاله</label>
                                </div>

                                <div class="nav-align-top mb-4 shadow-none">
                                    <ul class="nav nav-pills mb-3" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                    data-bs-toggle="tab"
                                                    data-bs-target="#navs-pills-top-home"
                                                    aria-controls="navs-pills-top-home"
                                                    aria-selected="true">
                                                العربيه
                                            </button>
                                        </li>
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                    data-bs-target="#navs-pills-top-profile"
                                                    aria-controls="navs-pills-top-profile"
                                                    aria-selected="false">
                                                الإنجليزيه
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content shadow-none">
                                        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                            <div class="my-3">
                                                <label for="defaultFormControlInput" class="form-label">عنوان
                                                    المقاله</label>
                                                <input type="text" name="title[ar]" class="form-control"
                                                       id="defaultFormControlInput" placeholder="عنوان المقاله"
                                                       aria-describedby="defaultFormControlHelp"/>
                                            </div>
                                            <div class="form-group my-3">
                                                <label for="excerpt_ar" class="form-label">المقتطفات</label>
                                                <textarea class="form-control" name="excerpt[ar]" id="excerpt_ar"
                                                          cols="30"
                                                          rows="5"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="content_ar" class="form-label">المحتوي</label>
                                                <textarea class="form-control" name="content[ar]" id="content_ar"
                                                          cols="30"
                                                          rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                            <div class="my-3">
                                                <label for="defaultFormControlInput" class="form-label">عنوان
                                                    المقاله</label>
                                                <input type="text" name="title[en]" class="form-control"
                                                       id="defaultFormControlInput" placeholder="عنوان المقاله"
                                                       aria-describedby="defaultFormControlHelp"/>
                                            </div>

                                            <div class="form-group my-3">
                                                <label for="excerpt_en" class="form-label">المقتطفات</label>
                                                <textarea class="form-control" name="excerpt[en]" id="excerpt_en"
                                                          cols="30"
                                                          rows="5"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="content_en" class="form-label">المحتوي</label>
                                                <textarea class="form-control" name="content[en]" id="content_en"
                                                          cols="30"
                                                          rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-content-center gap-3">
                                    <button class="btn btn-primary" type="submit">إنشاءإ</button>
                                    <a href="{{ route('admin.blogs.index') }}" class="d-block btn btn-secondary" >العودة</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('assets/dashboard/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: `#excerpt_ar`,
            height: 200,
            plugins: 'link lists code',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
            menubar: false
        });
        tinymce.init({
            selector: `#excerpt_en`,
            height: 200,
            plugins: 'link lists code',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
            menubar: false
        });
        tinymce.init({
            selector: `#content_ar`,
            height: 400,
            plugins: 'link lists code',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
            menubar: false
        });
        tinymce.init({
            selector: `#content_en`,
            height: 400,
            plugins: 'link lists code',
            toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent | numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
            menubar: false
        });
    </script>
@endsection

@section('css')
    <style>
        .tox-promotion-link {
            display: none !important;
        }
    </style>
@endsection
