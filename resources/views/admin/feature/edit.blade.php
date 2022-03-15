@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.feature'))
@section('index_route', route('feature.index'))
@section('store_route', route('feature.update', $general))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.feature') @endsection

 

{{-- Fields --}}
@section('fields_content')
@method('put')
<div class="card card-custom">
    <div class="card-header card-header-tabs-line">
        <div class="card-title">
            <h3 class="card-label">@lang('general.locales.edit')</h3>
        </div>
         
    </div>
    <div class="card-body">
        <div class="tab-content">
        </div>
        <div class="tab-content">
            
                    <div class="col form-group">
                        <label>@lang('feature.name') <span
                                class="text-danger">*</span></label>
                        <input type="text" name="name" id="name"
                            placeholder="@lang('feature.name')"
                            class="form-control"
                            value="{{ $general->name }}">
                    </div>

                   
                    <div class="col form-group">
                        <label>@lang('feature.desc')<span
                                class="text-danger">*</span></label>
                        <textarea class="form-control"
                            type="text" name="description" rows="4"
                            id="editor1">{{ $general->description }} </textarea>
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
                    
                    

                    
               
        </div>
           
                <div class="tab-pane fade show " role="tabpanel">
                     
                     
                  
                    <div class="col form-group">
                        <label>@lang('general.fields.icon')  <span class="text-danger"></span></label>
                        
                        <div class="icon-preview align-items-center" data-toggle="tooltip" title="" data-original-title="Preview of selected Icon" aria-describedby="tooltip765905">
                            <button type="button" class="btn btn-light-success active mr-5" id="GetIconPicker" data-iconpicker-input="input#IconInput" data-iconpicker-preview="i#IconPreview">@lang('general.fields.icon') </button>  <i id="IconPreview" class="{{ $general->icon }} ml-5"></i>
                        </div>
                        <input type="text" class="form-control" hidden id="IconInput" name="icon"  value="{{ $general->icon }}"  placeholder="Hidden etc. input for icon classname" autocomplete="off" spellcheck="false">
                    </div>
                    

                </div>
           
        
 

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

