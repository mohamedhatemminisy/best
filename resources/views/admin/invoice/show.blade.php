
@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.invoice'))
@section('index_route', route('invoice.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.invoice') @endsection
 
@push('css')
<style>
 p
 {
     border:none !important;
 }
</style>
@endpush
{{-- Fields --}}

@section('fields_content')
<div class="card card-custom">
    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">@lang('invoice.order_summary')</h3>
        </div>
        <div class="card-toolbar">
           
        </div>
    </div>
    <div class="card-body">
         <div class="row">
            <div class="col-3 form-group">
                
                <label>@lang('invoice.status')</label>
                <br>
                    <p> {{ $general->status }}</p>
            </div>
            <div class="col-3 form-group">
                
                <label>@lang('invoice.redirect_to')</label>
                <br>
                    <p> {{ $general->redirect_to }}</p>
            </div>
                <div class="col-3 form-group">
                
                    <label>@lang('invoice.order_number')</label>
                    <br>
                        <p> {{ $general->order_number }}</p>
                </div>
                <div class="col-3 form-group">
                
                    <label>@lang('invoice.orderDate')</label>
                    <br>
                        <p> {{ $general->orderDate }}</p>
                </div>
                <div class="col-3 form-group">
                    
                    <label>@lang('invoice.orderDate')</label>
                    <br>
                    <p> {{ $general->orderDate }}</p>
                </div>
                <div class="col-3 form-group">
                        
                    <label>@lang('invoice.orderDate')</label>
                    <br>
                    <p> {{ $general->orderDate }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.order_type')</label>
                    <br>
                    <p> {{ $general->order_type }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.cid')</label>
                    <br>
                    <p> {{ $general->cid }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.company')</label>
                    <br>
                    <p> {{ $general->company }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.city')</label>
                    <br>
                    <p> {{ $general->city }}</p>
                </div>
                <div class="col-3 form-group">        
                    <label>@lang('invoice.employee_name')</label>
                    <br>
                    <p> {{ $general->employee_name }}</p>
                </div>
                <div class="col-3 form-group">          
                    <label>@lang('invoice.branch_name')</label>
                    <br>
                    <p> {{ $general->branch_name }}</p>
                </div>
                <div class="col-3 form-group">            
                    <label>@lang('invoice.emp_basic_salary')</label>
                    <br>
                    <p> {{ $general->emp_basic_salary }}</p>
                </div>
                <div class="col-3 form-group">                
                    <label>@lang('invoice.emp_allowances')</label>
                    <br>
                    <p> {{ $general->emp_allowances }}</p>
                </div>
                <div class="col-3 form-group">         
                    <label>@lang('invoice.bDate')</label>
                    <br>
                    <p> {{ $general->bDate }}</p>
                </div>
                <div class="col-3 form-group">         
                    <label>@lang('invoice.job_title')</label>
                    <br>
                    <p> {{ $general->job_title }}</p>
                </div>
                <div class="col-3 form-group">        
                    <label>@lang('invoice.client_name')</label>
                    <br>
                    <p> {{ $general->client_name }}</p>
                </div>
                <div class="col-3 form-group">          
                    <label>@lang('invoice.client_phone')</label>
                    <br>
                    <p> {{ $general->client_phone }}</p>
                </div>
                <div class="col-3 form-group">
                    <label>@lang('invoice.client_salary')</label>
                    <br>
                    <p> {{ $general->client_salary }}</p>
                </div>
                <div class="col-3 form-group">  
                    <label>@lang('invoice.client_bank')</label>
                    <br>
                    <p> {{ $general->client_bank }}</p>
                </div>
                <div class="col-3 form-group">        
                    <label>@lang('invoice.client_bank_transfer')</label>
                    <br>
                    <p> {{ $general->client_bank_transfer }}</p>
                </div>
                <div class="col-6 form-group">             
                    <label>@lang('invoice.emp_notes')</label>
                    <br>
                    <p> {{ $general->emp_notes }}</p>
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
                        <p> {{ $general->product_salary }}</p>
                </div>
                <div class="col-3 form-group">
                
                    <label>@lang('invoice.product_type')</label>
                    <br>
                        <p> {{ $general->product_type }}</p>
                </div>
                <div class="col-3 form-group">
                    
                    <label>@lang('invoice.product_side')</label>
                    <br>
                    <p> {{ $general->product_side }}</p>
                </div>
                <div class="col-3 form-group">
                        
                    <label>@lang('invoice.product_payment_status')</label>
                    <br>
                    <p> {{ $general->product_payment_status }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.product_payment_needs')</label>
                    <br>
                    <p> {{ $general->product_payment_needs }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.product_installment')</label>
                    <br>
                    <p> {{ $general->product_installment }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.product_notes')</label>
                    <br>
                    <p> {{ $general->product_notes }}</p>
                </div>
                <div class="col-3 form-group">
                            
                    <label>@lang('invoice.total_indebtedness')</label>
                    <br>
                    <p> {{ $general->total_indebtedness }}</p>
                </div>
                <div class="col-3 form-group">        
                    <label>@lang('invoice.profit_ratio')</label>
                    <br>
                    <p> {{ $general->profit_ratio }}</p>
                </div>
                <div class="col-3 form-group">          
                    <label>@lang('invoice.personal_finance')</label>
                    <br>
                    <p> {{ $general->personal_finance }}</p>
                </div>
                <div class="col-3 form-group">            
                    <label>@lang('invoice.required_salary')</label>
                    <br>
                    <p> {{ $general->required_salary }}</p>
                </div>
                <div class="col-3 form-group">                
                    <label>@lang('invoice.total')</label>
                    <br>
                    <p> {{ $general->total }}</p>
                </div>
                <div class="col-3 form-group">         
                    <label>@lang('invoice.mortgage')</label>
                    <br>
                    <p> {{ $general->mortgage }}</p>
                </div>
                <div class="col-3 form-group">         
                    <label>@lang('invoice.order_description')</label>
                    <br>
                    <p> {{ $general->order_description }}</p>
                </div>
                <div class="col-3 form-group">        
                    <label>@lang('invoice.additional_notes')</label>
                    <br>
                    <p> {{ $general->additional_notes }}</p>
                </div>
            
                
          </div>        

          <div class="row">
            <div class="col-6 form-group">          
                <label>@lang('invoice.mediators_notes')</label>
                <br>
                <p> {{ $general->mediators_notes }}</p>
            </div>
            <div class="col-6 form-group">
                <label>@lang('invoice.admin_notes')</label>
                <br>
                <p> {{ $general->admin_notes }}</p>
            </div>
          </div>

                 
    </div>




    </div>
</div>
@endsection
