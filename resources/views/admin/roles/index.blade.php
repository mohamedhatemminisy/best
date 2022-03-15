

@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.roles') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.roles') @endsection
@section('create_route') {{route('roles.create')}} @endsection


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
         @foreach($roles as $key => $value) 
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                 <td>{{ $value->name }}</td>
 

 
                <td>
                    <a href="{{route('roles.show',$value->id)}}" class="btn btn-sm btn-clean
                        btn-icon mr-2" title="@lang('general.locales.show')">
                            <i class="fa fa-eye"></i>
                        </a>
                        
                        <a href="{{route('roles.edit',$value->id)}}" class="btn btn-sm btn-clean
                        btn-icon mr-2 custimizeEditBtn" title="@lang('general.locales.edit')">
                            <i class="fa fa-edit"></i>
                        </a>
                       @if(!in_array(auth()->user()->roles[0]->name ,$rolesUser))
                         <form id="delete-form-{{ $value->id }}" style="display: inline-table;" action="{{ route('roles.destroy',$value->id) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-sm btn-clean btn-icon"
                                    title="@lang('general.locales.delete')" onclick="confirmDelete
                            ('delete-form-{{ $value->id }}')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                       @endif
                </td>

            </tr>
        @endforeach



        </tbody>
    </table>
    <div>
    </div>
@endsection
