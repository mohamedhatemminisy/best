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
                    <label>@lang('mediator.name')<span class="text-danger">*</span></label>

                    <p>{{ $general->name }}</p>
                </div>


                <div class="col form-group">
                    <label>@lang('mediator.code')<span class="text-danger">*</span></label><br />
                    <p>{{ $general->code }}</p>
                </div>
                <div class="col form-group">
                    <label>@lang('mediator.url')<span class="text-danger">*</span></label><br/>
                    <a href="{{ $general->url }}">{{ $general->url }}</a>
                </div>
                @if ($general->phone_one)
                    <div class="col form-group">
                        <label>@lang('mediator.phone_one')</label><br/>
                        <a href="tel:{{ $general->phone_one }}">{{ $general->phone_one   }}</a>
                    </div>
                @endif
                @if ($general->phone_two)
                    <div class="col form-group">
                        <label>@lang('mediator.phone_two')</label><br/>
                        <a href="tel:{{ $general->phone_two }}">{{ $general->phone_two }}</a>
                    </div>
                @endif
            </div>




        </div>



    </div>
    </div>
@endsection
