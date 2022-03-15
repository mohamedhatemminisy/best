@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.contact') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.contact') @endsection
 

{{-- Table Content --}}
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">@lang('general.fields.name')</th>
            <th scope="col">@lang('general.fields.email')</th>
            <th scope="col">@lang('general.fields.phone')</th>
       
            <th scope="col">@lang('general.fields.created_at')</th>
            <th scope="col">@lang('general.fields.control')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($contact as $key => $value) 
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                 <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>


              
                <td>{{ $value->created_at }}</td>

                <td>
                    <a href="{{route('contact.replay',$value->id)}}" class="btn btn-sm btn-clean
                        btn-icon mr-2" title="@lang('general.locales.replay')">
                        <i class="fas fa-reply"></i>
                    </a>
                    <a href="{{route('contact.show',$value->id)}}" class="btn btn-sm btn-clean
                        btn-icon mr-2" title="@lang('general.show')">
                            <i class="fa fa-eye"></i>
                        </a>   
                        <form id="delete-form-{{ $value->id }}" style="display: inline-table;" action="{{ route('contact.destroy',$value->id) }}"
                            method="post">
                            @csrf
                            @method('delete')
                            <button type="button" class="btn btn-sm btn-clean btn-icon"
                                    title="@lang('general.locales.delete')" onclick="confirmDelete
                            ('delete-form-{{ $value->id }}')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                </td>
                

            </tr>
        @endforeach



        </tbody>
    </table>
    <div>
    </div>
@endsection
