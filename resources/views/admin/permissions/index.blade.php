@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.permissions') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.permissions') @endsection
@section('create_route') {{route('permissions.create')}} @endsection


{{-- Table Content --}}
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">@lang('general.fields.name')</th>
 
           
              <th scope="col">@lang('general.fields.control')</th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($permissions as  $key => $permission)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $permission->name }}</td>
             <td>
                @include('admin.components.table-control', ['permission' => 'organization', 'name'=>'permissions', 'value'=>$permission])
            </td>

        </tr>
    @endforeach



        </tbody>
    </table>
    <div>
    </div>
@endsection
