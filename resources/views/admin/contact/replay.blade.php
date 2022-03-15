@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.aside.contact_messages'))
@section('index_route', getRoute('contact.index'))
@section('store_route', getRoute('contact_replay'))
@section('page_type', trans('general.add_new'))
@section('form_type', 'POST')
@section('title') @lang('general.aside.contact_messages') @endsection

{{-- Fields --}}
@section('fields_content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
        </div>
        <div class="card-body">
            <div class="tab-content">
            </div>
            <div class="tab-content">
                <div class="col form-group">
                    <label>@lang('contact.subject')<span class="text-danger">*</span></label>
                    <input type="text" name="subject" id="subject" placeholder="@lang('contact.subject')"
                        class="form-control @error('subject') is-invalid @enderror"
                        value="{{ old('subject') }}">
                </div>
                <input type='hidden' name="contact_id" value="{{$id}}">
                <div class="col form-group">
                    <label>@lang('contact.message')<span class="text-danger">*</span></label>
                    <textarea class="form-control @error('message') is-invalid @enderror " type="text"
                        name="message" rows="4"
                        id="editor1">{{ old('message') }}</textarea>
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
