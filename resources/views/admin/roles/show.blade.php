
@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('general.modules.roles'))
@section('index_route', route('roles.index'))
@section('page_type', trans('general.modules.show'))
@section('title') @lang('general.modules.roles') @endsection

@push('css')
<style>
 p
 {
     border:none !important;
 }
</style>
@endpush
{{-- Fields --}}
@section('fields_content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">      {{ ucfirst($role->name) }} @lang('general.fields.role')</h3>
           
        </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                
                <table class="table table-bordered table-checkable" id="kt_datatable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">@lang('general.fields.name')</th>
                       
                        <th scope="col">@lang('general.fields.guard')</th>
                     </tr>
                    </thead>
                    <tbody>
                     @foreach($rolePermissions as $key => $permission) 
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                             <td>{{ $permission->name }}</td>
             
            
                             <td>{{ $permission->guard_name }}</td>
            
                            
            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>
    </div>
@endsection


