@extends('dashboard.layouts.master')
@section('title', 'الاشتراكات بالبريد الالكتروني')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            الاشتراكات بالبريد الالكتروني
        </h4>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <div class="table-responsive text-nowrap">
                <div class="d-flex align-items-center justify-content-between">
                    {{-- seacrh form and filter status --}}
                    <form action="#" method="get" class="my-4">
                        <div class="d-flex justify-content-between align-items-center gap-2">
                            <input type="text" name="search" class="form-control mx-2" placeholder="Search">
                            <select name="status" class="form-control mx-2" id="">
                                <option value="">الكل</option>
                                <option value="active" @selected(request('status') == 'active')>مفعل</option>
                                <option value="archived" @selected(request('status') == 'archived')>غير مفعل</option>
                            </select>
                            <button type="submit" class="btn btn-primary mx-2">بحث</button>
                        </div>
                    </form>
                    {{-- seacrh form and filter status --}}
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>البريد الالكتروني</th>
                        <th>حالات</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($mail_subscriptions as $blog)
                        <tr>
                            <td>#</td>
                            <td>email here</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $blog->id }}">
                                    Delete
                                </button>
                            </td>
                        </tr>
                        @include('dashboard.pages.blog.delete')
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
