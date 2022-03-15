@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.users') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.users') @endsection
@section('create_route') {{route('users.create')}} @endsection


{{-- Table Content --}}
@section('page_content')
<table class="table table-bordered table-checkable" id="kt_datatable">
    <thead>
        <tr>
            <th>#</th>
             <th>@lang('user.name')</th>
            <th>@lang('user.email')</th>
            <th>@lang('slider.created_at')</th>
            <th>@lang('slider.control')</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $key => $value)
            <tr>
                <td class="dtr-control">{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                 <td>
                    {{ $value->email }}
                </td>
                <td class="sorting_1" nowrap="nowrap">
                    <span class="label-inline">{{ $value->created_at }}</span>
                </td>
                <td nowrap="nowrap">
                    @include('admin.components.table-control', ['permission' => 'organization', 'name'=>'users', 'value'=>$value])
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div>
    </div>
@endsection
