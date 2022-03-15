@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.service'))
@section('index_route', route('service.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.service') @endsection

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
       
    </div>
    <div class="card-body">
        <div class="tab-content">
               
                    <div class="col form-group">
                        
                            <label>@lang('general.fields.title') <span class="text-danger">*</span></label>
                            <br>
                            <p> {{ $general->name }}</p>
                        </div>

                       
                        <div class="col form-group">
                        
                            <label>@lang('general.fields.detail') <span class="text-danger">*</span></label>
                            <br>
                            <p> {!! $general->description !!}</p>
                        </div>
                

                
              
        </div>
                
                 

             

                

                <div class="col form-group">
                    @if(isset($general->image))
                    <label>@lang('general.fields.image') <span class="text-danger">*</span></label>
                    <br>
                    <img src="{{asset($general->image)}}" class="w-25">
                    @endif

                </div>
    </div>



    </div>
</div>
@endsection
