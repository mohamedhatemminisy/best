@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.mediator'))
@section('index_route', route('users.index'))
@section('store_route', route('users.update', $general))
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
                    <label>@lang('user.name')<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" placeholder="@lang('user.name')" class="form-control"
                        value="{{ $general->name }}">
                </div>


                <div class="col form-group">
                    <label>@lang('user.email')<span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" placeholder="@lang('user.email')" class="form-control"
                        value="{{ $general->email }}">
                </div>


                <div class="col form-group">
                    <label>@lang('user.password')<span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" placeholder="@lang('user.password')"
                        class="form-control">
                </div>
                <div class="col form-group">
                    <div class="mb-3">
                        <label for="role" class="form-label"> @lang('general.users.permission') </label>
                        <select class="form-control" name="role" required>
                            <option value="">@lang('general.users.select_role')</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{in_array($role->name, $userRole) ? 'selected' : '' }}>
                                    {{ $role->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
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
