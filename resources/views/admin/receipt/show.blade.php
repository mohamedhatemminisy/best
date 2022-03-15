@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.receipts'))
@section('index_route', route('receipts.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.receipts') @endsection

@push('css')
    <style>
        p {
            border: none !important;
        }
        .font p{
            font-size: 1.5rem;
        }
        .font label{
            font-weight: bold;
            font-size: 1.2rem;
        }
        .font h2{
            font-size: 2rem;
            font-weight: bold;
        }
        .font h3{
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
@endpush
{{-- Fields --}}
@section('fields_content')
    <div class="card card-custom font">
        @include('admin.receipt.show_components.personal')
        @include('admin.receipt.show_components.financial')
        @include('admin.receipt.show_components.income')
        @include('admin.receipt.show_components.commitment')
        @include('admin.receipt.show_components.support_order')
        @include('admin.receipt.show_components.real_state')
        @include('admin.receipt.show_components.land')
        <div class="col-12 form-group">
            <h2>
                @lang('receipts.status')
            </h2>
            <hr>
        </div>
        <div class="col-6 form-group">
            <label>@lang('receipts.status')</label>
            <br>
            @if( $general->compelete)
            <p>{{ $general->compelete->name}}</p>
            @endif
        </div>
        @if($general->file)
        <div class="col-6 form-group">
            <label>@lang('receipts.file_download')</label>
            <br>
                    <p>  @foreach (json_decode($general->file) as $file)<a target="_blank" href="{{asset($file)}}"><i class="fas fa-download"></i></a> @endforeach</p>
        </div>
        @endif
    </div>

    <div class="card card-custom">
        <div class="card-footer text-center">
            <a class="btn btn-primary" href="javascript:history.go(-1)">
                <i class="fas fa-undo-alt"></i>
                @lang('receipts.back')
            </a>
            </button>
        </div>
    </div>
@endsection
