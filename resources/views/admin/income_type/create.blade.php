@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('income_type.income_type'))
@section('index_route', route('income_type.index'))
@section('store_route', route('income_type.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('income_type.income_type') @endsection

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
                <label>@lang('income_type.name')<span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('income_type.name')" class="form-control "
                    value="{{ old('name') }}">
            </div>
            <input type="hidden" name="type" value="income_type">
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
