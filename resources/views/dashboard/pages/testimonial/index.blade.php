@extends('dashboard.layouts.master')
@section('title', 'اراء العملاء')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            اراء العملاء
        </h4>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <div class="table-responsive text-nowrap">
                <div class="d-flex align-items-center justify-content-between">
                    <form action="{{ URL::current() }}" method="get" class="my-4">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <input type="text" name="s" class="form-control mx-2" placeholder="بحث">
                            <button type="submit" class="btn btn-primary mx-2">بحث</button>
                        </div>
                    </form>
                    <a href="{{route('admin.testimonials.create')}}" class="btn btn-primary mb-4">اضافة جديد</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم العميل</th>
                        <th>اسم الشركه</th>
                        <th>الحالة</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse($testimonials as $testimonial)
                            <tr>
                                <td>
                                    <strong>{{ $testimonial->client_name }}</strong>
                                </td>
                                <td>{{ $testimonial->company_name }}</td>
                                <td>
                                    {{ $testimonial?->status }}
                                </td>
                                <td>
                                    {{ $testimonial->created_at->diffForHumans() }}
                                </td>
                                <td>
                                    <a href="{{route('admin.testimonials.edit')}}" class="btn btn-primary">تعديل</a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $testimonial->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('dashboard.layouts.delete-modal',
                                    [
                                        'model' => $testimonial,
                                        'title'=> $testimonials->client_name
                                    ])
                        @empty
                            <tr class="text-center">
                                <td colspan="8">لا يوجد بيانات لعرضها</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
