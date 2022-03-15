@if ($general->commitment->count() > 0)
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        @foreach ($general->commitment as $commitment)
            <h3>
                @lang('receipts.commitment_info')
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label>@lang('receipts.installment')</label>
                    <br>
                    <p> {{ $commitment->installment }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.product_type_id')</label>
                    <br>
                    @if ($commitment->product_type != null)
                        <p> {{ $commitment->product_type->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.sponser_id')</label>
                    <br>
                    @if ($commitment->sponser != null)
                        <p> {{ $commitment->sponser->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.payment_status_id')</label>
                    <br>
                    @if ($commitment->payment_status != null)
                        <p> {{ $commitment->payment_status->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.early_repayment')</label>
                    <br>
                    <p> {{ $commitment->early_repayment }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.total')</label>
                    <br>
                    <p> {{ $commitment->total }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.commitment_start_date')</label>
                    <br>
                    <p> {{ $commitment->commitment_start_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.commitment_end_date')</label>
                    <br>
                    <p> {{ $commitment->commitment_end_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.remaining_installments_count')</label>
                    <br>
                    <p> {{ $commitment->remaining_installments_count }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.last_payment_date')</label>
                    <br>
                    <p> {{ $commitment->last_payment_date }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.commitment_notes')</label>
                    <br>
                    <p> {{ $commitment->notes }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endif
