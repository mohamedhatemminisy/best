@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.orders'))
@section('index_route', route('order.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.orders') @endsection

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
            <h3 class="card-label">@lang('general.locales.show')</h3>
        </div>
        <div class="card-toolbar">
           
        </div>
    </div>
    <div class="card-body">
 
              
                <div class="col form-group">
                
                    <label>@lang('contact.name') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->name }}</p>
                </div>

                <div class="col form-group">
                
                    <label>@lang('contact.city') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->city }}</p>
                </div>
                <div class="col form-group">
                
                    <label>@lang('contact.phone') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->phone }}</p>
                </div>
                <div class="col form-group">
                
                    <label>@lang('contact.identify_number') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->identify_number }}</p>
                </div>
                 

                <div class="col form-group">
                
                    <label>@lang('contact.company') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->company }}</p>
                </div>
                <div class="col form-group">
                
                    <label>@lang('contact.salary') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->salary }}</p>
                </div>   <div class="col form-group">
                
                    <label>@lang('contact.bank') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->bank }}</p>
                </div>   
                <div class="col form-group">
                
                    <label>@lang('contact.financing') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->financing }}</p>
                </div>
                <div class="col form-group">
                
                    <label>@lang('contact.benefit') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->benefit }}</p>
                </div>
                <div class="col form-group">
                
                    <label>@lang('contact.responsible') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->responsible }}</p>
                </div>

                <div class="col form-group">
                
                    <label>@lang('contact.problem') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->problem }}</p>
                </div>

                <div class="col form-group">
                
                    <label>@lang('contact.message') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->message }}</p>
                </div>
                
                <div class="col form-group">
                
                    <label>@lang('contact.code') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $general->code }}</p>
                </div>
               
                <div class="col form-group">
                
                    <label>@lang('contact.mediator_name') <span class="text-danger">*</span></label>
                    <br>
                     <p> {{ $mediator_name->name }}</p>
                </div>

                

                 
    </div>



    </div>
</div>
@endsection
