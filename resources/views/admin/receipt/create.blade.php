@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.receipts'))
@section('index_route', route('receipts.index'))
@section('store_route', route('receipts.store'))
@section('page_type', trans('general.modules.add_new'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.receipts') @endsection
{{-- Fields --}}
<style>
    .help-block {
        color: red;
    }
    p {
        border: none !important;
    }

    .font p {
        font-size: 1.5rem;
    }

    .font label {
            font-weight: bold;
            font-size: 1.2rem!important;
    }

    .font h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .font h3 {
        font-size: 2rem;
        font-weight: bold;
    }
</style>

@section('fields_content')
    <div class="card card-custom font">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @include('admin.receipt.components.personal')
                @include('admin.receipt.components.financial')
                @include('admin.receipt.components.income')
                @include('admin.receipt.components.commitment')
                @include('admin.receipt.components.support_order')
                @include('admin.receipt.components.real_state')
                @include('admin.receipt.components.land')
                <div class="row">
                    <div class="col-12 form-group">
                        <h2>
                            @lang('receipts.status')
                        </h2>
                        <hr>
                    </div>
                    <div class="col-6 form-group">
                        <label>@lang('receipts.acctach') </label><br>
                        <input type="file" name="files[]" multiple><br>
                        @error('files')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-6 form-group">
                        <label>@lang('receipts.status') </label>
                        <select class="form-control" name="compeleted" id='compeleted'>
                            <option disabled selected>@lang('receipts.status')</option>
                            @foreach ($order_status as $order)
                                <option value="{{ $order->id }}"
                                    {{ old('compeleted') == $order->id ? 'selected' : '' }}>
                                    {{ $order->name }}</option>
                            @endforeach
                        </select>
                        @error('city_id')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
