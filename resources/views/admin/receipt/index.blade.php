@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.receipts') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.receipts') @endsection
@section('create_route') {{ route('receipts.create') }} @endsection
{{-- Table Content --}}

<style>
    td {
        font-size: 1.5rem;
    }

    .activeBtn {
        color: #3699ff !important;
        background-color: #f3f6f9 !important;
        border-color: transparent !important;
    }

    .activeBtn i {
        color: #3699ff !important;

    }

    @media screen and (max-width:991px) {
        .invoice-table .action.sorting_disabled {
            display: block !important;
            margin: 18px 0px 0px;
        }
    }

</style>
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('general.fields.name')</th>
                <th scope="col">الكود</th>
                <th scope="col">@lang('receipts.status')</th>
                <th scope="col">@lang('invoice.status')</th>
                <th scope="col">@lang('invoice.redirect_to')</th>
                <th scope="col">@lang('invoice.delay_time')</th>
                <th scope="col">@lang('general.fields.created_at')</th>
                <th scope="col">@lang('general.fields.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->code }}</td>

                    <td>@if ($value->compelete){{ $value->compelete->name }} @endif</td>
                    <td>@if ($value->status) @lang('invoice.'.$value->status) @endif</td>
                    @if ($value->redirected_to )
                        <td>{{ $value->getRedirectUser->name }}</td>
                    @else
                        <td></td>
                    @endif

                    @if ($value->status == 'delay')
                        <td> @lang('receipts.'.$value->delay) </td>
                    @else
                        <td></td>
                    @endif
                    <td>{{ $value->created_at }}</td>
                    <td>
                        @include('admin.components.table-control', ['permission' => 'organization', 'name'=>'receipts',
                        'value'=>$value])
                        @can('receipts.accept')
                            <a href="{{ route('receipts.accept', $value->id) }}"
                                class="btn btn-sm btn-clean
                                                btn-icon mr-2 custimizeEditBtn @if ($value->status == 'accept') activeBtn @endif"
                                title="@lang('invoice.accept')">
                                <i class="fas fa-check"></i>
                            </a>
                        @endcan
                        @can('receipts.reject')
                            <a href="{{ route('receipts.reject', $value->id) }}"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn @if ($value->status == 'reject') activeBtn @endif"
                                title="
                                                                        @lang('invoice.reject')">
                                <i class="fas fa-times"></i>
                            </a>
                        @endcan
                        @can('receipts.archive')
                            <a href="{{ route('receipts.archive', $value->id) }}"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn @if ($value->status == 'archive') activeBtn @endif"
                                title=" @lang('invoice.archive')">
                                <i class="far fa-file-archive"></i>
                            </a>
                        @endcan
                        @can('receipts.delay')
                            <button type="button" class="btn btn-primary btn btn-sm btn-clean btn-icon mr-2 custimizeEditBtn"
                                title="@lang('invoice.delay')" data-toggle="modal" data-target="{{ '#delay' . $value->id }}">
                                <i class="fas fa-stopwatch"></i>
                            </button>
                        @endcan
                        @can('receipts.forward')
                            <button type="button"
                                class="btn btn-primary btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn"
                                title="@lang('invoice.redirect')" data-toggle="modal"
                                data-target="{{ '#exampleModal' . $value->id }}">
                                <i class="fas fa-share"></i>
                            </button>
                        @endcan

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>

        @foreach ($data as $key => $value)
            <div class="modal fade" id="delay{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="delay"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> اختار مدة التاجيل </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <form action="{{ route('receipts.delay') }}" method="GET">
                            <input type="hidden" name="id" value="{{ $value->id }}" />
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleSelect1">اختار مدة التاجيل
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" id="exampleSelect1" name="delay">
                                        <option value="one_month"> @lang('receipts.one_month')</option>
                                        <option value="three_months">@lang('receipts.three_months')</option>
                                        <option value="six_months"> @lang('receipts.six_months') </option>
                                        <option value="one_year">@lang('receipts.one_year') </option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">اغلاق</button>
                                <button type="submit" class="btn btn-light-success active">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($data as $key => $value)
            <div class="modal fade" id="exampleModal{{ $value->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اختار المحول اليه </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <form action="{{ route('receipts.forward') }}" method="GET">
                            <input type="hidden" name="id" value="{{ $value->id }}" />
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleSelect1">اختار المحول اليه
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" id="exampleSelect1" name="redirected_to">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">اغلاق</button>
                                <button type="submit" class="btn btn-light-success active">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
@endsection
