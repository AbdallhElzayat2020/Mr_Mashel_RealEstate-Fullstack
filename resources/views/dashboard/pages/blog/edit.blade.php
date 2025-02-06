@extends('dashboard.layouts.master')
@section('title', 'Add blog Page')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            المدونات الالكترونية
        </h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">

                        <div class="col-xl-12 col-md-12">
                            <div class="nav-align-top mb-4 shadow-none">
                                <ul class="nav nav-pills mb-3" role="tablist">
                                    <li class="nav-item">
                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-top-home"
                                                aria-controls="navs-pills-top-home"
                                                aria-selected="true">
                                            Ar
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#navs-pills-top-profile"
                                                aria-controls="navs-pills-top-profile"
                                                aria-selected="false">
                                            En
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content shadow-none">
                                    <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                                        <div class="my-3">
                                            <label for="defaultFormControlInput" class="form-label">Name ar</label>
                                            <input type="text" name="title[ar]"
                                                   value="{{$blog->getTranslation('title','ar')}}" class="form-control"
                                                   id="defaultFormControlInput" placeholder="John Doe"
                                                   aria-describedby="defaultFormControlHelp"/>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="excerpt" id="" cols="30"
                                                      rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                                        <div class="my-3">
                                            <label for="defaultFormControlInput" class="form-label">Name En</label>
                                            <input type="text" name="title[en]"
                                                   value="{{$blog->getTranslation('title','en')}}" class="form-control"
                                                   id="defaultFormControlInput" placeholder="John Doe"
                                                   aria-describedby="defaultFormControlHelp"/>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="excerpt" id="" cols="30"
                                                      rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--status --}}
                            <div class="col-xl-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" name="status" value="active" type="checkbox"
                                           id="flexSwitchCheckDefault">
                                    <input class="form-check-input" name="status" value="disActive" type="checkbox"
                                           id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">الحالة</label>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
