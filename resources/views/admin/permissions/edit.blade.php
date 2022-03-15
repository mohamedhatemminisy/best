@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.permissions'))
@section('index_route', route('permissions.index'))
@section('store_route', route('permissions.update', $permission))
@section('page_type', trans('general.modules.edit'))
@section('form_type', 'POST')
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

  
                <div class="mb-3">
                    <label for="name" class="form-label">@lang('general.fields.name')</label>
                    <input value="{{ $permission->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>
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
