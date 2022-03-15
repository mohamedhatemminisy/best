@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('real_estate_status.real_estate_status'))
@section('index_route', route('real_estate_status.index'))
@section('store_route', route('real_estate_status.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('real_estate_status.real_estate_status') @endsection

{{-- Fields --}}
@section('fields_content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col form-group">
                <label>@lang('real_estate_status.name')<span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('real_estate_status.name')" class="form-control "
                    value="{{ old('name') }}">
            </div>
            <input type="hidden" name="type" value="real_estate_status">
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
