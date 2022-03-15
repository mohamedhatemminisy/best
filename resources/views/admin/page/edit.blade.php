@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.page'))
@section('index_route', route('page.index'))
@section('store_route', route('page.update', $general))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.page') @endsection

 

{{-- Fields --}}
@section('fields_content')
@method('put')
<div class="card card-custom">
    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">@lang('general.locales.edit')  @lang('general.modules.singlepage')   {{  $pageName}}</h3>
        </div>
    </div>  
    <div class="card-body">
        <div class="tab-content">
        </div>
     
                    <div class="col form-group">
                        <label>@lang('page.name') <span
                                class="text-danger">*</span></label>
                        <input type="text" name="name"
                            placeholder="@lang('page.name')"
                            class="form-control "
                            value="{{ $general->name }}">
                    </div>

                   
                    <div class="col form-group">
                        <label>@lang('page.description')<span
                                class="text-danger">*</span></label>
                        <textarea class="form-control"
                            type="text" name="description" rows="4"
                            id="editor1">{{   $general->description  }} </textarea>
                            <script>
                                CKEDITOR.replace('editor1', {
                                   
                                    // Setting default language direction to right-to-left.
                                    contentsLangDirection: 'rtl',
                                    height: 270,
                                    scayt_customerId: '1:Eebp63-lWHbt2-ASpHy4-AYUpy2-fo3mk4-sKrza1-NsuXy4-I1XZC2-0u2F54-aqYWd1-l3Qf14-umd',
                                    scayt_sLang: 'auto',
                                    removeButtons: 'PasteFromWord'
                                });
                            </script>

                    </div>
                    
                    

                    
               
           
               
@if ($pageName == 'about' || $pageName == 'contact')
       <div class="col form-group">
        @if (isset($general->image))
            <label>@lang('page.image') <span class="text-danger">*</span></label>
            <br>
           

      <img src="{{ asset($general->image) }}" class="w-25">

  
      
          
        @endif
    </div>
        <div class="col form-group">
            <label>@lang('general.fields.image')</label>
            <input
                type="file"
                name="image"
                multiple
                placeholder="@lang('general.fields.image')"
                class="form-control">
        </div>

 @endif

{{--  --}}
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

