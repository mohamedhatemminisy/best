@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('employer.employer'))
@section('index_route', route('employer.index'))
@section('store_route', route('employer.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('employer.employer') @endsection

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
                <label>@lang('employer.name')<span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('employer.name')" class="form-control "
                    value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>@lang('receipts.business_sector_id') </label>
                <select class="form-control" name="business_sector_id" id='business_sector_id'>
                    @foreach ($business_sectors as $sector)
                        <option value="{{ $sector->id }}" {{ old('sector') == $sector->id ? 'selected' : '' }}>
                            {{ $sector->name }}</option>
                    @endforeach
                </select>
                @error('business_sector_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input type="hidden" name="type" value="employer">
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
