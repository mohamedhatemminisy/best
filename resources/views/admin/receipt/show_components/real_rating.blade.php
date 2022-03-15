@foreach ($estate->rating as $rate)
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        <h3>
            @lang('receipts.real_rate_info')
        </h3><br>
        <div class="row">

            <div class="col-3 form-group">
                <label>@lang('receipts.bank')</label>
                <br>
                @if ($rate->rate_bank != null)
                    <p> {{ $rate->rate_bank->name }}</p>
                @endif
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.first_rate')</label>
                <br>
                <p> {{ $rate->first_rate }}</p>
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.second_rate')</label>
                <br>
                <p> {{ $rate->second_rate }}</p>
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.third_rate')</label>
                <br>
                <p> {{ $rate->third_rate }}</p>
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.emp_rate')</label>
                <br>
                @if ($rate->rate_bank_emp != null)
                    <p> {{ $rate->rate_bank_emp->name }}</p>
                @endif
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.approved_rate')</label>
                <br>
                <p> {{ $rate->approved_rate }}</p>
            </div>

            <div class="col-6 form-group">
                <label>@lang('receipts.rate_notes')</label>
                <br>
                <p> {{ $rate->rate_notes }}</p>
            </div>

        </div>
    </div>
@endforeach
