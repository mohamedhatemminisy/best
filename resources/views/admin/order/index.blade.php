@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.orders') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.orders') @endsection
 

{{-- Table Content --}}
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">@lang('contact.name')</th>
            <th scope="col">@lang('contact.phone')</th>
            <th scope="col">@lang('contact.city')</th>
            <th scope="col">@lang('contact.company')</th>
            <th scope="col">@lang('contact.bank')</th>
            <th scope="col">@lang('contact.salary')</th>
            <th scope="col">@lang('contact.code')</th>

       
            <th scope="col">@lang('contact.created_at')</th>
            <th scope="col">@lang('contact.control')</th>
        </tr>
        </thead>
        <tbody>
         @foreach($contact as $key => $value) 
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                 <td>{{ $value->name }}</td>
                 <td>{{ $value->phone }}</td>
                <td>{{ $value->city }}</td>
                <td>{{ $value->company }}</td>
                <td>{{ $value->bank }}</td>
                <td>{{ $value->salary }}</td>
                <td>{{ $value->code }}</td>

               


              
                <td>{{ $value->created_at }}</td>

                <td>
                     
                    <a href="{{route('order.show',$value->id)}}" class="btn btn-sm btn-clean
                        btn-icon mr-2" title="@lang('general.show')">
                            <i class="fa fa-eye"></i>
                        </a>   
                        
                </td>
                

            </tr>
        @endforeach



        </tbody>
    </table>
    <div>
    </div>
@endsection
