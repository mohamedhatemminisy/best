@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.invoice'))
@section('index_route', route('invoice.index'))
@section('store_route', route('invoice.update', $general))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.invoice') @endsection
 {{-- Fields --}}
@section('fields_content')
    @method('put')
    
         
<div class="card card-custom">
    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">@lang('general.locales.add_new_invoice_order')</h3>
        </div>
    </div>
    <div class="card-body">
       
        <div class="tab-content">
           
                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('invoice.order_number')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="order_number" id="order_number"
                            placeholder="@lang('invoice.order_number')"
                            class="form-control"
                            value="{{  $general->order_number}}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.order_type')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="order_type" id="order_type"
                            placeholder="@lang('invoice.order_type')"
                            class="form-control"
                            value="{{ $general->order_type    }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.orderDate')<span
                                class="text-danger">*</span></label>
                        <input class="form-control" name="orderDate" id="orderDate" type="date" value="{{  $general->orderDate   }}"  placeholder="@lang('invoice.orderDate')">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.employee_name')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="employee_name" id="employee_name"
                            placeholder="@lang('invoice.employee_name')"
                            class="form-control"
                            value="{{ $general->employee_name   }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.branch_name')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="branch_name" id="branch_name"
                            placeholder="@lang('invoice.branch_name')"
                            class="form-control"
                            value="{{ $general->employee_name}}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.cid') </label>
                        <input type="text" name="cid" id="cid"
                            placeholder="@lang('invoice.cid')"
                            class="form-control"
                            value="{{ $general->cid }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.client_name')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="client_name" id="client_name"
                            placeholder="@lang('invoice.client_name')"
                            class="form-control"
                            value="{{ $general->client_name  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.bDate')<span
                                class="text-danger">*</span></label>
                                <input class="form-control" name="bDate" id="bDate" type="date" value="{{ $general->bDate }}"  placeholder="@lang('invoice.bDate')">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.company')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="company" id="company"
                            placeholder="@lang('invoice.company')"
                            class="form-control"
                            value="{{ $general->company }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.city')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="city" id="city"
                            placeholder="@lang('invoice.city')"
                            class="form-control"
                            value="{{ $general->city }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.emp_basic_salary')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="emp_basic_salary" id="emp_basic_salary"
                            placeholder="@lang('invoice.emp_basic_salary')"
                            class="form-control"
                            value="{{ $general->emp_basic_salary }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.emp_allowances')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="emp_allowances" id="emp_allowances"
                            placeholder="@lang('invoice.emp_allowances')"
                            class="form-control"
                            value="{{ $general->emp_allowances }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.client_phone')<span
                                class="text-danger">*</span></label>
                        <input type="number" name="client_phone" id="client_phone"
                            placeholder="@lang('invoice.client_phone')"
                            class="form-control"
                            value="{{ $general->client_phone }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.client_salary')<span
                                class="text-danger">*</span></label>
                        <input type="number" name="client_salary" id="client_salary"
                            placeholder="@lang('invoice.client_salary')"
                            class="form-control"
                            value="{{ $general->client_salary }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.client_bank')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="client_bank" id="client_bank"
                            placeholder="@lang('invoice.client_bank')"
                            class="form-control"
                            value="{{ $general->client_bank }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.client_bank_transfer')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="client_bank_transfer" id="client_bank_transfer"
                            placeholder="@lang('invoice.client_bank_transfer')"
                            class="form-control"
                            value="{{ $general->client_bank_transfer }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.hiring_date')<span
                                class="text-danger">*</span></label>
                       
                        <input class="form-control" name="hiring_date" id="hiring_date" type="date" value="{{ $general->hiring_date }}"  placeholder="@lang('invoice.hiring_date')">

                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.job_title')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="job_title" id="job_title"
                            placeholder="@lang('invoice.job_title')"
                            class="form-control"
                            value="{{ $general->job_title }}" >
                    </div>
                   
                    <div class="col-6 form-group">
                        <label>@lang('invoice.emp_notes') </label>
                        <textarea class="form-control "
                            type="text" name="emp_notes" rows="2" cols="2"
                            id="emp_notes">{{ $general->emp_notes}} </textarea>
                    </div>
                </div>
        </div>
    </div>
    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">@lang('general.locales.order_details')</h3>
        </div>
    </div>
    <div class="card-body">
       
        <div class="tab-content">
           
                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('invoice.product_salary')<span
                                class="text-danger">*</span></label>
                        <input type="number" name="product_salary" id="product_salary"
                            placeholder="@lang('invoice.product_salary')"
                            class="form-control"
                            value="{{$general->product_salary }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.product_type')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="product_type" id="product_type"
                            placeholder="@lang('invoice.product_type')"
                            class="form-control"
                            value="{{ $general->product_type  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.product_side')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="product_side" id="product_side"
                            placeholder="@lang('invoice.product_side')"
                            class="form-control"
                            value="{{ $general->product_side  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.product_payment_status')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="product_payment_status" id="product_payment_status"
                            placeholder="@lang('invoice.product_payment_status')"
                            class="form-control"
                            value="{{ $general->product_payment_status  }}">
                    </div>
                    <div class="col-3 form-group d-flex align-items-center ">
                        <label style="margin-bottom: 0px !important;" class="mr-3">@lang('invoice.product_payment_needs')<span
                                class="text-danger">*</span></label>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" id="product_payment_needs1" type="radio" name="product_payment_needs"  {{ ($general->product_payment_needs=="yes")? "checked" : "" }}  value="yes">
                                      <label class="form-check-label" for="product_payment_needs1">نعم </label>
                                    </div>
                                    <div class="form-check form-check-inline">       
                                      <input class="form-check-input" id="product_payment_needs2" type="radio" name="product_payment_needs" value="no"  {{ ($general->product_payment_needs=="no")? "checked" : "" }} >
                                      <label class="form-check-label" for="product_payment_needs2">لا  </label>
                                    </div>
                    </div>     
                    <div class="col-3 form-group">
                        <label>@lang('invoice.product_installment')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="product_installment" id="product_installment"
                            placeholder="@lang('invoice.product_installment')"
                            class="form-control"
                            value="{{ $general->product_payment_status  }}"> 
                    </div>
                    <div class="col-6 form-group">
                        <label>@lang('invoice.product_notes') </label>
                       
                        <textarea class="form-control "
                            type="text" name="product_notes" rows="2" cols="2"
                            id="product_notes">{{  $general->product_notes }} </textarea>    
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('invoice.total_indebtedness')<span
                                class="text-danger">*</span></label>
                        <input type="number" name="total_indebtedness" id="total_indebtedness"
                            placeholder="@lang('invoice.total_indebtedness')"
                            class="form-control"
                            value="{{ $general->total_indebtedness  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.profit_ratio')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="profit_ratio" id="profit_ratio"
                            placeholder="@lang('invoice.profit_ratio')"
                            class="form-control"
                            value="{{ $general->profit_ratio  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.personal_finance')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="personal_finance" id="personal_finance"
                            placeholder="@lang('invoice.personal_finance')"
                            class="form-control"
                            value="{{ $general->personal_finance  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.required_salary')<span
                                class="text-danger">*</span></label>
                        <input type="number" name="required_salary" id="required_salary"
                            placeholder="@lang('invoice.required_salary')"
                            class="form-control"
                            value="{{ $general->required_salary  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.total')<span
                                class="text-danger">*</span></label>
                        <input type="number" name="total" id="total"
                            placeholder="@lang('invoice.total')"
                            class="form-control"
                            value="{{ $general->total  }}">
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('invoice.mortgage')<span
                                class="text-danger">*</span></label>
                        <input type="text" name="mortgage" id="mortgage"
                            placeholder="@lang('invoice.mortgage')"
                            class="form-control"
                            value="{{ $general->mortgage  }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label>@lang('invoice.order_description')</label>
                        <textarea class="form-control "
                            type="text" name="order_description" rows="2" cols="2"
                            id="order_description">{{ $general->order_description }} </textarea>
                    </div>
                    <div class="col-6 form-group">
                        <label>@lang('invoice.additional_notes') </label>
                        <textarea class="form-control"
                            type="text" name="additional_notes" rows="2" cols="2"
                            id="additional_notes">{{ $general->additional_notes}} </textarea>
                    </div>
                </div>
        </div>
    </div>


    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">@lang('invoice.admin_mediators_notes')</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
                <div class="row">
                    <div class="col-6 form-group">
                        <label>@lang('invoice.mediators_notes')</label>
                        <textarea class="form-control "
                            type="text" name="mediators_notes" "@if (checkPermissions() == 'employee') disabled  @endif rows="2" cols="2"
                            id="mediators_notes">{{  $general->mediators_notes }} </textarea>    
                    </div>
                    <div class="col-6 form-group">
                        <label>@lang('invoice.admin_notes')</label>
                        <textarea class="form-control "
                            type="text" name="admin_notes" "@if (checkPermissions() == 'employee') disabled  @endif rows="2" cols="2"
                            id="admin_notes">{{  $general->admin_notes }} </textarea>    
                    </div>
                   
                </div>
 
        </div>
    </div>
</div>
<div class="card card-custom">
<div class="card-footer text-center">
    <button type="submit" class="btn btn-light-success active">
        <i class="far fa-save fa-sm"></i>
        @lang('general.save')
    </button>
</div>
</div>
@endsection
 