@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.Payment_status') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.Payment_status') @endsection
@section('create_route') {{ route('Payment_status.create') }} @endsection
{{-- Table Content --}}
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('general.fields.name')</th>
                <th scope="col">@lang('general.fields.created_at')</th>
                <th scope="col">@lang('general.fields.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>
                        @include('admin.components.table-control', ['permission' => 'organization', 'name'=>'Payment_status',
                        'value'=>$value])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    </div>
@endsection
