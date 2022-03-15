@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('user.users'))
@section('index_route', route('users.index'))
@section('store_route', route('users.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('user.users') @endsection

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
                <label>@lang('user.name')<span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('user.name')" class="form-control "
                    value="{{ old('name') }}">
            </div>
            <div class="col form-group">
                <label>@lang('user.email')<span class="text-danger">*</span></label>
                <input type="email" name="email" placeholder="@lang('user.email')" class="form-control "
                    value="{{ old('email') }}">
            </div>
            <div class="col form-group">
                <label>@lang('user.password')<span class="text-danger">*</span></label>
                <input type="password" name="password" placeholder="@lang('user.password')" class="form-control "
                    value="{{ old('password') }}">
            </div>
            <div class="col form-group">
                <label>@lang('user.confrim_password')<span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" placeholder="@lang('user.confrim_password')"
                    class="form-control " value="{{ old('confrim_password') }}">
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
