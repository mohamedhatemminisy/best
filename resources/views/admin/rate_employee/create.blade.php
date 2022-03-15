@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('rate_employee.rate_employee'))
@section('index_route', route('rate_employee.index'))
@section('store_route', route('rate_employee.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('rate_employee.rate_employee') @endsection

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
                <label>@lang('rate_employee.name')<span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="@lang('rate_employee.name')" class="form-control "
                    value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>@lang('receipts.clinet_bank') </label>
                <select class="form-control" name="bank_id" id='bank'>
                    @foreach ($banks as $bank)
                        <option value="{{ $bank->id }}" {{ old('bank') == $bank->id ? 'selected' : '' }}>
                            {{ $bank->name }}</option>
                    @endforeach
                </select>
                @error('bank_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <input type="hidden" name="type" value="rate_employee">
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
