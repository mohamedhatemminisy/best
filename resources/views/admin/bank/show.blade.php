@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.bank'))
@section('index_route', route('bank.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.bank') @endsection

@push('css')
    <style>
        p {
            border: none !important;
        }

    </style>
@endpush
{{-- Fields --}}
@section('fields_content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.show')</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="col form-group">
                    <label>@lang('bank.name')<span class="text-danger">*</span></label>

                    <p>{{ $data->name }}</p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
