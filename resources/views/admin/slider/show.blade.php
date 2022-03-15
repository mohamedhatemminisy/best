@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('slider.slider'))
@section('index_route', route('slider.index'))
@section('page_type', trans('general.show'))
@section('title') @lang('slider.slider') @endsection

@push('css')
    <style>
        p {
            border: none !important;
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
                            <label>@lang('slider.name')<span class="text-danger">*</span></label>

                            <p>{{ $data->name }}</p>
                        </div>

                        <div class="col form-group">
                            <label>@lang('slider.desc')<span class="text-danger">*</span></label>

                            <p>{!! $data->description !!}</p>
                        </div>

                    </div>
                
            </div>

            <div class="col form-group">
            
                @if (isset($data->image))
                    <label>@lang('slider.image') <span class="text-danger">*</span></label>
                    <br>
                    <img src="{{ asset($data->image) }}" class="w-25">
                @endif
            </div>
        </div>



    </div>
    </div>
@endsection
