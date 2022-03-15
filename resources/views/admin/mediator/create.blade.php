@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('mediator.mediator'))
@section('index_route', route('mediator.index'))
@section('store_route', route('mediator.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('mediator.mediator') @endsection

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
                <label>@lang('mediator.name')<span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('mediator.name')" class="form-control "
                    value="{{ old('name') }}">
            </div>
         
            <div class="col form-group">
                <label>@lang('mediator.phone_one')</label>
                <input type="number" name="phone_one" placeholder="@lang('mediator.phone_one')" class="form-control "
                    value="{{ old('phone_one') }}">
            </div>
         
            <div class="col form-group">
                <label>@lang('mediator.phone_two')</label>
                <input type="number" name="phone_two" placeholder="@lang('mediator.phone_two')" class="form-control "
                    value="{{ old('phone_two') }}">
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
