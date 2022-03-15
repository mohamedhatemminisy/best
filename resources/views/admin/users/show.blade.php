@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.mediator'))
@section('index_route', route('mediator.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.mediator') @endsection

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
                    <label>@lang('mediator.name')</label>
                    <p>{{ $general->name }}</p>
                </div>
                <div class="col form-group">
                    <label>@lang('mediator.email')</label>
                    <p>{{ $general->email }}</p>
                </div>
                @if($general->mediator)
                <div class="col form-group">
                    <label>@lang('mediator.code')</label>
                    <p>{{ $general->mediator->code }}</p>
                </div>

                <div class="col form-group">
                    <label>@lang('mediator.url')</label><br>
                    <a target="_blank" href="{{ $general->mediator->url }}">
                        @lang('mediator.url')
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
@endsection
