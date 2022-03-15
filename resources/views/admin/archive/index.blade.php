@extends('admin.components.index')
{{-- Preparing page properties --}}

@section('module_name') @lang('general.modules.receipts') @endsection
@section('permission', 'organization')
@section('title') @lang('general.modules.receipts') @endsection
@section('create_route') {{ route('receipts.create') }} @endsection
{{-- Table Content --}}

<style>
    td {
        font-size: 1.5rem;
    }
    .btn.btn-primary {
        display: none;
    }
    .activeBtn {
        color: #3699ff !important;
        background-color: #f3f6f9 !important;
        border-color: transparent !important;
    }

    .activeBtn i {
        color: #3699ff !important;
    }

    @media screen and (max-width:991px) {
        .invoice-table .action.sorting_disabled {
            display: block !important;
            margin: 18px 0px 0px;
        }
    }

</style>
@section('page_content')
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('general.fields.name')</th>
                <th scope="col">الكود</th>
                <th scope="col">@lang('receipts.status')</th>
                <th scope="col">@lang('invoice.status')</th>
                <th scope="col">@lang('general.fields.created_at')</th>
                <th scope="col">@lang('general.fields.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->code }}</td>
                    <td>@if ($value->compelete){{ $value->compelete->name }} @endif</td>
                    <td>@if ($value->status) @lang('invoice.'.$value->status) @endif</td>
                    <td>{{ $value->created_at }}</td>
                    <td>
                        <a href="{{route('receipts.show',$value->id)}}" class="btn btn-sm btn-clean
                            btn-icon mr-2" title="@lang('general.locales.show')">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form id="delete-form-{{ $value->id }}" style="display: inline-table;" action="{{ route('archive.destroy',$value->id) }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button type="button" class="btn btn-sm btn-clean btn-icon"
                                        title="@lang('general.locales.delete')" onclick="confirmDelete
                                ('delete-form-{{ $value->id }}')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        @can('receipts.un_archive')
                            <a href="{{ route('receipts.un_archive', $value->id) }}"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn @if ($value->status == 'archive') activeBtn @endif"
                                title=" @lang('invoice.un_archive')">
                                <i class="far fa-file-archive"></i>
                            </a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    </div>
@endsection
