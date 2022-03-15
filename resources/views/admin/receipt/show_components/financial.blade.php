@if ($general->salary->count() || $general->income->count() ||$general->commitment->count())
    <div class="col-12 form-group">
        <h2>
            @lang('receipts.financial_info')
        </h2>
    </div>
    @if ($general->salary->count())
        <hr>
        <div class="card-body">
            @foreach ($general->salary as $salary)
                <h3>
                    @lang('receipts.salary_info')
                </h3><br><br>
                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('receipts.basic_salary')</label>
                        <br>
                        <p> {{ $salary->basic_salary }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.Allowances_without_housing_allowance')</label>
                        <br>
                        <p> {{ $salary->Allowances_without_housing_allowance }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.Monthly_housing_allowance')</label>
                        <br>
                        <p> {{ $salary->Monthly_housing_allowance }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.total')</label>
                        <br>
                        <p> {{ $salary->total }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.retirement_discount')</label>
                        <br>
                        <p> {{ $salary->retirement_discount }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.other_discounts')</label>
                        <br>
                        <p> {{ $salary->other_discounts }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.net')</label>
                        <br>
                        <p> {{ $salary->net }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.approved_salary')</label>
                        <br>
                        <p> {{ $salary->approved_salary }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.business_sector_id')</label>
                        <br>

                        @if ($salary->business_sector != null)
                            <p> {{ $salary->business_sector->name }}</p>
                        @endif
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.employer_id')</label>
                        <br>
                        @if ($salary->employer != null)
                            <p> {{ $salary->employer->name }}</p>
                        @endif
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.job_title')</label>
                        <br>
                        <p> {{ $salary->job_title }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.hiring_date')</label>
                        <br>
                        <p> {{ $salary->hiring_date }}</p>
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.Remaining_period_of_retirement')</label>
                        <br>
                        <p> {{ $salary->Remaining_period_of_retirement }}</p>
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('receipts.bank_salary_transferred')</label>
                        <br>
                        @if($salary->bank_salary_transferred)
                        <p> {{ $salary->bank->name }}</p>
                        @endif
                    </div>
                    <div class="col-3 form-group">
                        <label>@lang('receipts.salary_note')</label>
                        <br>
                        <p> {{ $salary->salary_note }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endif
