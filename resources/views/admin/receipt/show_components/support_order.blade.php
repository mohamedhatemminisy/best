<div class="col-12 form-group">
    <br>
    <h3> @lang('receipts.support_info')</h3>
    <hr>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-3 form-group">
            <label>@lang('receipts.support_status')</label>
            <br>
            @if ($general->support_status != null)
                <p> {{trans('receipts.'.$general->support_status)}}</p>
            @endif
        </div>
    </div>
</div>

<div class="col-12 form-group">
    <br>
    <h3> @lang('receipts.order_type')</h3>
    <hr>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-3 form-group">
            <label>@lang('receipts.order_type')</label>
            <br>
            @if ($general->order_type != null)
                <p> {{trans('receipts.'.$general->order_type)}}</p>
            @endif
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.product_type_id')</label>
            <br>
            @if ($general->order_result != null)
                <p>@lang('receipts.'.$general->order_result)</p>
            @endif
        </div>
        @if ($general->product_details != null)
        <div class="col-3 form-group">
            <label>@lang('receipts.product_descriptions')</label>
            <br>
                <p> @lang('receipts.'.$general->product_details)</p>
        </div>
        @endif

    </div>
</div>
