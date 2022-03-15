@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.aside.roles'))
@section('index_route', route('roles.index'))
@section('store_route', route('roles.store'))
@section('page_type', trans('general.locales.add_new'))
@section('form_type', 'POST')
@section('title') @lang('general.aside.roles') @endsection
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
                    <label for="name" class="form-label">@lang('general.fields.name')</label>
                    <input value="{{ old('name') }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="@lang('general.fields.name')" >
                </div>

                <label for="permissions" class="form-label">@lang('general.fields.assign_permissions')</label>

                <table class="table table-bordered table-checkable" id="kt_datatable">
                    <thead>
                        <th scope="col" ><input type="checkbox" id="all_permission" name="all_permission"></th>
                        <th scope="col"> @lang('general.fields.roles_name') </th>
                        <th scope="col" >@lang('general.fields.roles_guard')</th> 
                    </thead>
                    <tbody>
                    @foreach($permissions as $permission)
                        <tr>
                            <td>
                                <input type="checkbox" 
                                name="permission[{{ $permission->name }}]"
                                value="{{ $permission->name }}"
                                class='permission'>
                            </td>
                            <td>{{ $permission->name }}</td>
                            <td>{{ $permission->guard_name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table> 
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
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
@endsection