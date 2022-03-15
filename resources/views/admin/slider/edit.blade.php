@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('slider.slider'))
@section('index_route', route('slider.index'))
@section('store_route', route('slider.update', $data))
@section('page_type', trans('general.edit'))
@section('form_type', 'POST')
@section('title') @lang('slider.slider') @endsection

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

              
                   
                        <div class="col form-group">
                            <label>@lang('slider.name')<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name" id="name"
                                placeholder="@lang('slider.name')" class="form-control" value="{{  $data->name }}">
                    </div>



                    <div class="col form-group">
                        <label>@lang('slider.desc')  <span
                                class="text-danger">*</span></label>
                        <textarea name="description" placeholder="@lang('slider.description')"
                        class="form-control"
                        id="editor1">
                            {{$data->description   }}
                        </textarea>
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


      


     




    <div class="col form-group">
        @if (isset($data->image))
            <label>@lang('slider.image') <span class="text-danger">*</span></label>
            <br>
            <img src="{{ asset($data->image) }}" class="w-25">
        @endif
    </div>
    <div class="col form-group">
        <label>@lang('slider.image') <span class="text-danger">*</span></label>
        <input type="file" name="image" placeholder="@lang('slider.image')" class="form-control" value="{{ asset($data->image) }}">
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
