@extends('dashboard.layouts.master')
@section('title', 'إنشاء شهادة')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            اراء العملاء
        </h4>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <form>
                <div class="row">
                    <div class="my-3 my-md-0  col-12 col-md-6 ">
                        <label for="c_name" class="form-label">إسم العميل</label>
                        <input type="text" name="client_name" class="form-control"
                               id="c_name" placeholder="إسم العميل"
                               value="{{ old('client_name') }}"
                               aria-describedby="Client Name"/>
                    </div>
                    <div class="my-3 my-md-0  col-12 col-md-6">
                        <label for="c_name" class="form-label">إسم العميل</label>
                        <input type="text" name="client_name" class="form-control"
                               id="c_name" placeholder="إسم العميل"
                               value="{{ old('client_name') }}"
                               aria-describedby="Client Name"/>
                    </div>


                    <div class="form-group mt-4">
                        <label for="testimonial" class="form-label">شهادة العميل</label>
                        <textarea class="form-control" name="testimonial" id="testimonial"
                                  cols="30"
                                  rows="5">{{ old('testimonial') }}</textarea>
                    </div>
                </div>
            </form>

        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
