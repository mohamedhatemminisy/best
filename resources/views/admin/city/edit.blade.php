@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.city'))
@section('index_route', route('city.index'))
@section('store_route', route('city.update', $data))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.city') @endsection

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
                    <label>@lang('city.name')<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" placeholder="@lang('city.name')" class="form-control"
                        value="{{$data->name}}">
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
