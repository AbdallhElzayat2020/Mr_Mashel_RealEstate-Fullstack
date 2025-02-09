@extends('dashboard.layouts.master')
@section('title', 'الفرص')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            الفرص
        </h4>
        <!-- Basic Bootstrap Table -->
        <div class="card p-3">
            <div class="table-responsive text-nowrap">
                <div class="d-flex align-items-center justify-content-between">
                    <form action="{{ URL::current() }}" method="get" class="my-4 flex flex-grow-1">
                        <div class="d-flex justify-content-between align-items-center gap-2 col-6">
                            <input type="text" name="op_s" class="form-control mx-2" placeholder="بحث"
                                   value="{{ request('op_s') }}">
                            <select name="op_type" class="form-control mx-2" id="">
                                <option value="">الكل</option>
                                @foreach(\App\Enums\OpportunityType::cases() as $opportunity)
                                    <option
                                        value="{{ $opportunity->value }}" @selected(request('op_type') === $opportunity->value)>{{ $opportunity->label() }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary mx-2">بحث</button>
                        </div>
                    </form>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>الإسم</th>
                        <th>البريد</th>
                        <th>النوع</th>
                        <th>تاريخ الإنشاء</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @forelse($opportunities as $opportunity)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <strong>{{ $opportunity->name }}</strong>
                            </td>
                            <td>{{ $opportunity->email }}</td>
                            <td>
                                {{ $opportunity->type->label() }}
                            </td>
                            <td>
                                {{ $opportunity->created_at->diffForHumans() }}
                            </td>
                            <td>
                                @can('view-opportunities')
                                    <a href="{{route('admin.opportunities.show', $opportunity)}}"
                                       class="btn btn-primary">تعديل</a>
                                @endcan
                                @can('delete-opportunities')
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $opportunity->id }}">
                                        حذف
                                    </button>
                                @endcan
                            </td>
                        </tr>
                        @include('dashboard.layouts.delete-modal',
                                [
                                    'model' => $opportunity,
                                    'title'=> $opportunity->name,
                                    'route' => route('admin.opportunities.destroy', $opportunity)
                                ])
                    @empty
                        <tr class="text-center">
                            <td colspan="6">لا يوجد بيانات لعرضها</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection
