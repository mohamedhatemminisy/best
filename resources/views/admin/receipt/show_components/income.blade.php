@if ($general->income->count() > 0)
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        @foreach ($general->income as $income)
            <h3>
                @lang('receipts.income_info')
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label>@lang('receipts.income_type_id')</label>
                    <br>
                    @if($income->income_type != null)
                    <p> {{ $income->income_type->name }}</p>
                    @endif
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.annual_income_value')</label>
                    <br>
                    <p> {{ $income->annual_income_value }}</p>
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.income_statement_detail')</label>
                    <br>
                    <p> {{ $income->income_statement_detail }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endif
