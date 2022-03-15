@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.mediator'))
@section('index_route', route('mediator.index'))
@section('store_route', route('mediator.update', $general))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.mediator') @endsection

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
                    <label>@lang('mediator.name')<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" placeholder="@lang('mediator.name')" class="form-control"
                        value="{{ $general->name }}">
                </div>
                <div class="col form-group">
                    <label>@lang('mediator.phone_one')</label>
                    <input type="number" name="phone_one" placeholder="@lang('mediator.phone_one')" class="form-control "
                        value="{{ $general->phone_one }}">
                </div>
             
                <div class="col form-group">
                    <label>@lang('mediator.phone_two')</label>
                    <input type="number" name="phone_two" placeholder="@lang('mediator.phone_two')" class="form-control "
                        value="{{ $general->phone_two }}">
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
