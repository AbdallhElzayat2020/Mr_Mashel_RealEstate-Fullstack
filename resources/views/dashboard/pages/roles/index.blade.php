@extends('dashboard.layouts.master')
@section('title', 'الادوار')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            الادوار
        </h4>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <div class="table-responsive text-nowrap">
                <div class="d-flex justify-content-end">
                    <a href="{{route('admin.roles.create')}}" class="btn btn-primary mb-4">اضافة جديد</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الإسم</th>
                        <th>تاريخ الإنشاء</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($roles as $role)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <strong>{{ $role->display_name }}</strong>
                            </td>
                            <td>
                                {{ $role->created_at->diffForHumans() }}
                            </td>
                            <td>
                                <a href="{{route('admin.roles.edit', $role)}}" class="btn btn-primary">تعديل</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $role->id }}">
                                    حذف
                                </button>
                            </td>
                        </tr>
                        @include('dashboard.layouts.delete-modal',
                                [
                                    'model' => $role,
                                    'title'=> $role->name,
                                    'route' => route('admin.roles.destroy', $role)
                                ])
                    @empty
                        <tr class="text-center">
                            <td colspan="4">لا يوجد بيانات لعرضها</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
