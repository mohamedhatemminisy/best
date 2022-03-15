@extends('admin.components.form')
 @section('module_name', trans('general.aside.permissions'))
@section('index_route', route('permissions.index'))
@section('store_route', route('permissions.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('general.aside.permissions') @endsection
@section('fields_content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title d-block">
                <h3 class="card-label">@lang('general.fields.add_new_permission')</h3><br/>
                <div class="lead">
                   <p> @lang('general.fields.add_new_role_and_assign_permissions')</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <div class="mb-3">
                <label for="name" class="form-label"> @lang('general.fields.name') </label>
                <input value="{{ old('name') }}" 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    placeholder="@lang('general.fields.name')">

                
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

 
  