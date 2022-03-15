@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.aside.setting'))
@section('index_route', route('setting'))
@section('store_route', route('setting_update'))
 
@section('form_type', 'POST')
@section('title') @lang('general.aside.setting') @endsection

{{-- Fields --}}
@section('fields_content')
    @method('put')
    <div class="card card-custom">
     
        <div class="card-body">
            
        <div class="card-body">

            <div class="col form-group">
                <label>@lang('general.fields.name') <span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('general.fields.name')" class="form-control"
                    value="{{ $setting->name }}">
            </div>

        </div>

        
        <div class="card-body">

            <div class="col form-group">
                <label>@lang('general.fields.working_hours') <span class="text-danger">*</span></label>
                <input type="text" name="working_times" placeholder="@lang('general.fields.working_hours')" class="form-control"
                    value="{{ $setting->working_times }}">
            </div>

        </div>

         
        <div class="card-body">

            <div class="col form-group">
                <label>@lang('general.fields.address') <span class="text-danger">*</span></label>
                <input type="text" name="address" placeholder="@lang('general.fields.address')" class="form-control"
                    value="{{ $setting->address }}">
            </div>

        </div>

        
        <div class="card-body">


            <div class="col form-group">
                <label>@lang('general.fields.map') <span class="text-danger">*</span></label>
              
                    <input
                     type="text"        
                    name="map"
                    id="map"
                    placeholder="@lang('general.fields.map')"
                    class="form-control"
                    value="{{ $setting->map }}" />
            </div>

        </div>
         
       
        
         
        <div class="card-body">

            <div class="col form-group">
                <label>@lang('general.fields.copyrights') <span class="text-danger">*</span></label>
                <input type="text" name="copyrights" placeholder="@lang('general.fields.copyrights')" class="form-control"
                    value="{{ $setting->copyrights }}">
            </div>

        </div> 
 

 


                    <div class="col form-group">
                        <label>@lang('setting.desc') <span
                                class="text-danger">*</span></label>
                        <textarea name="description" placeholder="@lang('setting.desc')"
                        class="form-control"
                        id="editor1">
                        {{ $setting->description}}
                    </textarea>
                    <script>
                        CKEDITOR.replace('editor1', {
                          
                            contentsLangDirection: 'rtl',
                            height: 270,
                            scayt_customerId: '1:Eebp63-lWHbt2-ASpHy4-AYUpy2-fo3mk4-sKrza1-NsuXy4-I1XZC2-0u2F54-aqYWd1-l3Qf14-umd',
                            scayt_sLang: 'auto',
                            removeButtons: 'PasteFromWord'
                        });
                    </script>
                </div>
            

    <div class="col form-group">
        <label>@lang('setting.phone')</label>
        <input type="text" name="phone" placeholder="@lang('setting.phone')" value="{{$setting->phone}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.email')</label>
        <input type="text" name="email" placeholder="@lang('setting.email')" value="{{$setting->email}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.facebook')</label>
        <input type="text" name="facebook" placeholder="@lang('setting.facebook')" value="{{$setting->facebook}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.twitter')</label>
        <input type="text" name="twitter" placeholder="@lang('setting.twitter')" value="{{$setting->twitter}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.linkedin')</label>
        <input type="text" name="linkedin" placeholder="@lang('setting.linkedin')" value="{{$setting->linkedin}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.instagram')</label>
        <input type="text" name="instagram" placeholder="@lang('setting.instagram')" value="{{$setting->instagram}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.website')</label>
        <input type="text" name="website" placeholder="@lang('setting.website')" value="{{$setting->website}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.fax')</label>
        <input type="text" name="fax" placeholder="@lang('setting.fax')" value="{{$setting->fax}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.whatsapp')</label>
        <input type="text" name="whatsapp" placeholder="@lang('setting.whatsapp')" value="{{$setting->whatsapp}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.start')</label>
        <input type="text" name="start" placeholder="@lang('setting.start')" value="{{$setting->start}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.client')</label>
        <input type="text" name="client" placeholder="@lang('setting.client')" value="{{$setting->client}}" class="form-control">
    </div>

    <div class="col form-group">
        <label>@lang('setting.po_box')</label>
        <input type="text" name="po_box" placeholder="@lang('setting.po_box')" value="{{$setting->po_box}}" class="form-control">
    </div>


    <div class="col form-group">
        @if (isset($setting->logo))
            <label>@lang('setting.logo') <span class="text-danger">*</span></label>
            <br>
            <img src="{{ asset($setting->logo) }}" class="w-25">
        @endif
    </div>

    <div class="col form-group">
        <label>@lang('setting.logo') <span class="text-danger">*</span></label>
        <input type="file" name="logo" placeholder="@lang('setting.logo')" class="form-control" value="">
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
