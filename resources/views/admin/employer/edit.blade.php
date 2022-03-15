@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.employer'))
@section('index_route', route('employer.index'))
@section('store_route', route('employer.update', $data))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
@section('title') @lang('general.modules.employer') @endsection

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
                    <label>@lang('employer.name')<span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" placeholder="@lang('employer.name')" class="form-control"
                        value="{{ $data->name }}">
                </div>
                <div class="col form-group">
                    <label>@lang('receipts.business_sector_id') <span class="text-danger">*</span></label>
                    <select class="form-control" name="business_sector_id" id="business_sector_id">
                        @foreach ($business_sectors as $sector)
                            <option value="{{ $sector->id }}" @if ($data->parent_id == $sector->id) selected @endif>{{ $sector->name }}</option>
                        @endforeach
                    </select>
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
