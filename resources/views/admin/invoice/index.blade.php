@extends('admin.components.index')
@section('module_name') @lang('general.modules.invoice') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.invoice') @endsection
@section('create_route') {{ route('invoice.create') }} @endsection
{{-- Table Content --}}


@section('page_content')
    <style>
        .activeBtn {
            color: #3699ff !important;
            background-color: #f3f6f9 !important;
            border-color: transparent !important;
        }

        .activeBtn i {
            color: #3699ff !important;

        }
    @media screen and (max-width:991px)
    {
        .invoice-table .action.sorting_disabled
        {
            display: block !important;
            margin: 18px 0px 0px;
        }
    }
    </style>
   

    <table class="table table-separate table-head-custom collapsed dataTable dtr-inline  invoice-table" id="kt_datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('invoice.order_number')</th>
                <th scope="col">@lang('invoice.orderDate')</th>
                <th scope="col">@lang('invoice.employee_name')</th>
                <th scope="col">@lang('invoice.status')</th>
                <th scope="col">@lang('invoice.redirect_to')</th>
                <th scope="col">@lang('invoice.delay_time')</th>
                <th scope="col" class="action">@lang('general.fields.control')</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($invoice as $key => $value)


                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->order_number }}</td>
                    <td>{{ $value->orderDate }}</td>
                    <td>{{ $value->employee_name }}</td>
                    <td>{{ $value->status }}</td>
                    @if ($value->getRedirectUser)
                        <td>{{ $value->getRedirectUser->name }}</td>
                    @else
                        <td></td>
                    @endif
                    @if ($value->delay)
                        <td> {{ $value->delay }} </td>
                    @else
                        <td></td>
                    @endif

                    <td class="d-flex">
                        @include('admin.components.table-control', ['permission' => 'organization', 'name'=>'invoice',
                        'value'=>$value])
                        @can('invoice.accept')
                            <a href="{{ route('invoice.accept', $value->id) }}"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn @if ($value->status == 'accept') activeBtn @endif"
                                title="@lang('invoice.accept')">
                                <i class="fas fa-check"></i>
                            </a>
                        @endcan
                        @can('invoice.reject')
                            <a href="{{ route('invoice.reject', $value->id) }}"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn @if ($value->status == 'reject') activeBtn @endif"
                                title="
                                        @lang('invoice.reject')">
                                <i class="fas fa-times"></i>
                            </a>
                        @endcan
                        @can('invoice.delay')
                            <button type="button"
                                class="btn btn-primary btn btn-sm btn-clean
                  btn-icon mr-2 custimizeEditBtn"
                                title="@lang('invoice.delay')" data-toggle="modal" data-target="{{ '#delay' . $value->id }}">
                                <i class="fas fa-stopwatch"></i>
                            </button>
                        @endcan
                        @can('invoice.forward')
                            <button type="button"
                                class="btn btn-primary btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn"
                                title="@lang('invoice.forward')" data-toggle="modal"
                                data-target="{{ '#exampleModal' . $value->id }}">
                                <i class="fas fa-share"></i>
                            </button>
                        @endcan
                        <button type="button"
                            class="btn btn-primary btn btn-sm btn-clean
                        btn-icon mr-2 custimizeEditBtn"
                            title="@lang('invoice.show')" data-toggle="modal"
                            data-target="{{ '#showdata' . $value->id }}">
                            <i class="fas fa-info-circle"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        @foreach ($invoice as $key => $value)
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
                        <form action="{{ route('invoice.forward') }}" method="GET">
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
        @foreach ($invoice as $key => $value)
            <div class="modal fade" id="delay{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="delay"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اختار المحول اليه </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <form action="{{ route('invoice.delay') }}" method="GET">
                            <input type="hidden" name="id" value="{{ $value->id }}" />
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleSelect1">اختار المحول اليه
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" id="exampleSelect1" name="delay">
                                        <option value="one_month">تاجيل لشهر</option>
                                        <option value="three_months">تاجيل ل 3 شهور</option>
                                        <option value="six_months">تاجيل ل 6 شهور</option>
                                        <option value="one_year">تاجيل لسنة</option>
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
        @foreach ($invoice as $key => $value)
            <div class="modal fade" id="showdata{{ $value->id }}" tabindex="-1" role="dialog"
                aria-labelledby="delay" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">@lang('invoice.order_summary')</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-custom">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.status')</label>
                                            <br>
                                            <p> {{ $value->status }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.redirect_to')</label>
                                            <br>
                                            <p> {{ $value->redirect_to }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.order_number')</label>
                                            <br>
                                            <p> {{ $value->order_number }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.orderDate')</label>
                                            <br>
                                            <p> {{ $value->orderDate }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.orderDate')</label>
                                            <br>
                                            <p> {{ $value->orderDate }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.orderDate')</label>
                                            <br>
                                            <p> {{ $value->orderDate }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.order_type')</label>
                                            <br>
                                            <p> {{ $value->order_type }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.cid')</label>
                                            <br>
                                            <p> {{ $value->cid }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.company')</label>
                                            <br>
                                            <p> {{ $value->company }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.city')</label>
                                            <br>
                                            <p> {{ $value->city }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.employee_name')</label>
                                            <br>
                                            <p> {{ $value->employee_name }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.branch_name')</label>
                                            <br>
                                            <p> {{ $value->branch_name }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.emp_basic_salary')</label>
                                            <br>
                                            <p> {{ $value->emp_basic_salary }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.emp_allowances')</label>
                                            <br>
                                            <p> {{ $value->emp_allowances }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.bDate')</label>
                                            <br>
                                            <p> {{ $value->bDate }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.job_title')</label>
                                            <br>
                                            <p> {{ $value->job_title }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.client_name')</label>
                                            <br>
                                            <p> {{ $value->client_name }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.client_phone')</label>
                                            <br>
                                            <p> {{ $value->client_phone }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.client_salary')</label>
                                            <br>
                                            <p> {{ $value->client_salary }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.client_bank')</label>
                                            <br>
                                            <p> {{ $value->client_bank }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.client_bank_transfer')</label>
                                            <br>
                                            <p> {{ $value->client_bank_transfer }}</p>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label>@lang('invoice.emp_notes')</label>
                                            <br>
                                            <p> {{ $value->emp_notes }}</p>
                                        </div>
                                    </div>


                                </div>

                                <div class="card-header card-header-tabs-line">
                                    <div class="card-title">
                                        <h3 class="card-label">@lang('invoice.order_details')</h3>
                                    </div>
                                    <div class="card-toolbar">

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_salary')</label>
                                            <br>
                                            <p> {{ $value->product_salary }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_type')</label>
                                            <br>
                                            <p> {{ $value->product_type }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_side')</label>
                                            <br>
                                            <p> {{ $value->product_side }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_payment_status')</label>
                                            <br>
                                            <p> {{ $value->product_payment_status }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_payment_needs')</label>
                                            <br>
                                            <p> {{ $value->product_payment_needs }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_installment')</label>
                                            <br>
                                            <p> {{ $value->product_installment }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.product_notes')</label>
                                            <br>
                                            <p> {{ $value->product_notes }}</p>
                                        </div>
                                        <div class="col-3 form-group">

                                            <label>@lang('invoice.total_indebtedness')</label>
                                            <br>
                                            <p> {{ $value->total_indebtedness }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.profit_ratio')</label>
                                            <br>
                                            <p> {{ $value->profit_ratio }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.personal_finance')</label>
                                            <br>
                                            <p> {{ $value->personal_finance }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.required_salary')</label>
                                            <br>
                                            <p> {{ $value->required_salary }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.total')</label>
                                            <br>
                                            <p> {{ $value->total }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.mortgage')</label>
                                            <br>
                                            <p> {{ $value->mortgage }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.order_description')</label>
                                            <br>
                                            <p> {{ $value->order_description }}</p>
                                        </div>
                                        <div class="col-3 form-group">
                                            <label>@lang('invoice.additional_notes')</label>
                                            <br>
                                            <p> {{ $value->additional_notes }}</p>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-6 form-group">
                                            <label>@lang('invoice.mediators_notes')</label>
                                            <br>
                                            <p> {{ $value->mediators_notes }}</p>
                                        </div>
                                        <div class="col-6 form-group">
                                            <label>@lang('invoice.admin_notes')</label>
                                            <br>
                                            <p> {{ $value->admin_notes }}</p>
                                        </div>
                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    @endforeach

    </div>
@endsection
