<div class="col-12 form-group">
    <h2>
        @lang('receipts.financial_info')
    </h2>
    <h3>
        @lang('receipts.salary_info')
    </h3>
    <hr>
</div>

<div class="row clon_salary">
    <div class="col-3 form-group">
        <label>@lang('receipts.basic_salary') </label>
        <input type="text" name="salary[]" id="basic_salary" placeholder="@lang('receipts.basic_salary')"
            class="form-control" value="{{ old('salary.0') }}">
        @error('salary')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.Allowances_without_housing_allowance') </label>
        <input type="text" name="Allowances_without[]" id="Allowances_without_housing_allowance"
            placeholder="@lang('receipts.Allowances_without_housing_allowance')" class="form-control"
            value="{{ old('Allowances_without.0') }}">
        @error('Allowances_without_housing_allowance')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.Monthly_housing_allowance') </label>
        <input type="text" name="Monthly_allowance[]" id="Monthly_housing_allowance"
            placeholder="@lang('receipts.Monthly_housing_allowance')" class="form-control"
            value="{{ old('Monthly_allowance.0') }}">
        @error('Monthly_housing_allowance')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.total') </label>
        <input type="text" name="totals[]" id="total" placeholder="@lang('receipts.total')" class="form-control"
            value="{{ old('totals.0') }}">
        @error('total')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="col-3 form-group">
        <label>@lang('receipts.retirement_discount') </label>
        <input type="text" name="retirement[]" id="retirement_discount"
            placeholder="@lang('receipts.retirement_discount')" class="form-control"
            value="{{ old('retirement.0') }}">
        @error('retirement_discount')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="col-3 form-group">
        <label>@lang('receipts.other_discounts') </label>
        <input type="text" name="other_discount[]" id="other_discounts" placeholder="@lang('receipts.other_discounts')"
            class="form-control" value="{{ old('other_discount.0') }}">
        @error('other_discounts')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="col-3 form-group">
        <label>@lang('receipts.net') </label>
        <input type="text" name="nets[]" id="net" placeholder="@lang('receipts.net')" class="form-control"
            value="{{ old('nets.0') }}">
        @error('net')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.approved_salary') </label>
        <input type="text" name="approved_salarys[]" id="approved_salary"
            placeholder="@lang('receipts.approved_salary')" class="form-control"
            value="{{ old('approved_salarys.0') }}">
        @error('approved_salary')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.business_sector_id') </label>
        <select class="form-control business_sector_id" choice_id="choice_id_0" name="business_sector_ids[]"
            id='business_sector_id'>
            <option disabled selected>@lang('receipts.business_sector_id')</option>
            @foreach ($business_sectors as $sector)
                <option value="{{ $sector->id }}"
                    {{ old('business_sector_ids') == $sector->id ? 'selected' : '' }}>
                    {{ $sector->name }}</option>
            @endforeach
        </select>
        @error('business_sector_id')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.employer_id') </label>
        <select class="form-control employer_id" name="employer_ids[]" id="choice_id_0">
            <option disabled selected>@lang('receipts.employer_id')</option>
        </select>
        @error('employer_id')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-3 form-group">
        <label>@lang('receipts.job_title') </label>
        <input type="text" name="job_titles[]" id="job_title" placeholder="@lang('receipts.job_title')"
            class="form-control" value="{{ old('job_titles.0') }}">
        @error('job_title')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.hiring_date') </label>
        <input type="text" name="hiring_dates[]" id="hiring_date" placeholder="@lang('receipts.hiring_date')"
            class="form-control disable-date" value="{{ old('hiring_dates.0') }}">
        @error('hiring_date')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.Remaining_period_of_retirement') </label>
        <input type="text" name="Remaining_period_of_retirements[]" id="Remaining_period_of_retirement"
            placeholder="@lang('receipts.Remaining_period_of_retirement')" class="form-control"
            value="{{ old('Remaining_period_of_retirements.0') }}">
        @error('Remaining_period_of_retirement')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-3 form-group">
        <label>@lang('receipts.bank_salary_transferred') </label>
        <select class="form-control" name="bank_salary_transferreds[]" id='bank_salary_transferred'>
            <option disabled selected>@lang('receipts.bank_salary_transferred')</option>
            @foreach ($banks as $bank)
                <option value="{{ $bank->id }}" {{ old('bank') == $bank->id ? 'selected' : '' }}>
                    {{ $bank->name }}</option>
            @endforeach
        </select>
        @error('bank_salary_transferred')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


    <div class="col-6 form-group">
        <label>@lang('receipts.salary_note') </label>
        <textarea name="salary_notes[]" class="form-control" type="text" rows="2" cols="2"
            placeholder="@lang('receipts.salary_note')"> {{ old('salary_notes.0') }} </textarea>
        @error('salary_note')
            <span class="help-block">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12 form-group">

        <a class="btn btn-light-success font-weight-bold btn-sm related_link text-center" style="height: 35px"><i
                class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_salary') </a>
        <a class="btn btn-light-danger font-weight-bold remove_salary_input mr-3" style="height: 35px"><i
                class="fa fa-trash fa-sm p-0"></i></a>

    </div>
</div>

@push('js')

    <script type="text/javascript">
        $(document).ready(function() {
            var x = 0;
            const MAX_INPUT = 9;
            $(document).on('click', '.related_link', function() {

                let content = `
            <div class="new-class">

                <div class="row ">
                        <div class="col-3 form-group">
                            <label>@lang('receipts.basic_salary') </label>
                            <input type="text" name="salary[]" id="basic_salary" placeholder="@lang('receipts.basic_salary')"
                                class="form-control" value="{{ old('salary.0') }}">
                            @error('salary')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.Allowances_without_housing_allowance') </label>
                            <input type="text" name="Allowances_without[]" id="Allowances_without_housing_allowance"
                                placeholder="@lang('receipts.Allowances_without_housing_allowance')" class="form-control"
                                value="{{ old('Allowances_without.0') }}">
                            @error('Allowances_without_housing_allowance')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-3 form-group">
                            <label>@lang('receipts.Monthly_housing_allowance') </label>
                            <input type="text" name="Monthly_allowance[]" id="Monthly_housing_allowance"
                                placeholder="@lang('receipts.Monthly_housing_allowance')" class="form-control"
                                value="{{ old('Monthly_allowance.0') }}">
                            @error('Monthly_housing_allowance')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.total') </label>
                            <input type="text" name="totals[]" id="total" placeholder="@lang('receipts.total')" class="form-control"
                                value="{{ old('totals.0') }}">
                            @error('total')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-3 form-group">
                            <label>@lang('receipts.retirement_discount') </label>
                            <input type="text" name="retirement[]" id="retirement_discount"
                                placeholder="@lang('receipts.retirement_discount')" class="form-control"
                                value="{{ old('retirement.0') }}">
                            @error('retirement_discount')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-3 form-group">
                            <label>@lang('receipts.other_discounts') </label>
                            <input type="text" name="other_discount[]" id="other_discounts" placeholder="@lang('receipts.other_discounts')"
                                class="form-control" value="{{ old('other_discount.0') }}">
                            @error('other_discounts')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-3 form-group">
                            <label>@lang('receipts.net') </label>
                            <input type="text" name="nets[]" id="net" placeholder="@lang('receipts.net')" class="form-control"
                                value="{{ old('nets.0') }}">
                            @error('net')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.approved_salary') </label>
                            <input type="text" name="approved_salarys[]" id="approved_salary"
                                placeholder="@lang('receipts.approved_salary')" class="form-control"
                                value="{{ old('approved_salarys.0') }}">
                            @error('approved_salary')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.business_sector_id') </label>
                            <select class="form-control business_sector_id" choice_id="choice_id_0" name="business_sector_ids[]"
                                id='business_sector_id'>
                                <option disabled selected>@lang('receipts.business_sector_id')</option>
                                @foreach ($business_sectors as $sector)
                                    <option value="{{ $sector->id }}" {{ old('business_sector_ids') == $sector->id ? 'selected' : '' }}>
                                        {{ $sector->name }}</option>
                                @endforeach
                            </select>
                            @error('business_sector_id')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.employer_id') </label>
                            <select class="form-control employer_id" name="employer_ids[]" id="choice_id_0">
                                <option disabled selected>@lang('receipts.employer_id')</option>
                            </select>
                            @error('employer_id')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-3 form-group">
                            <label>@lang('receipts.job_title') </label>
                            <input type="text" name="job_titles[]" id="job_title" placeholder="@lang('receipts.job_title')"
                                class="form-control" value="{{ old('job_titles.0') }}">
                            @error('job_title')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.hiring_date') </label>
                            <input type="text" name="hiring_dates[]" id="hiring_date" placeholder="@lang('receipts.hiring_date')"
                                class="form-control" value="{{ old('hiring_dates.0') }}">
                            @error('hiring_date')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.Remaining_period_of_retirement') </label>
                            <input type="text" name="Remaining_period_of_retirements[]" id="Remaining_period_of_retirement"
                                placeholder="@lang('receipts.Remaining_period_of_retirement')" class="form-control"
                                value="{{ old('Remaining_period_of_retirements.0') }}">
                            @error('Remaining_period_of_retirement')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.bank_salary_transferred') </label>
                            <select class="form-control" name="bank_salary_transferreds[]" id='bank_salary_transferred'>
                                <option disabled selected>@lang('receipts.bank_salary_transferred')</option>
                                @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}" {{ old('bank') == $bank->id ? 'selected' : '' }}>
                                        {{ $bank->name }}</option>
                                @endforeach
                            </select>
                            @error('bank_salary_transferred')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-6 form-group">
                            <label>@lang('receipts.salary_note') </label>
                            <textarea name="salary_notes[]" class="form-control" type="text" rows="2" cols="2"
                                placeholder="@lang('receipts.salary_note')"> {{ old('salary_notes.0') }} </textarea>
                            @error('salary_note')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 form-group">

                            <a class="btn btn-light-success font-weight-bold btn-sm related_link text-center" style="height: 35px"><i
                                    class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_salary') </a>
                            <a class="btn btn-light-danger font-weight-bold remove_salary_input mr-3" style="height: 35px"><i
                                    class="fa fa-trash fa-sm p-0"></i></a>

                        </div>
                    </div>


            </div>`;
                if (x < MAX_INPUT) {
                    $('.clon_salary').append(content);
                    x++;
                }
            });
            $(document).on('click', '.remove_salary_input', function() {
                $(this).parent().parent().remove();
                x--;
            })
            $(document).on('change', ".business_sector_id", function() {
                let business_parent_val = $(this).val();
                let business_child_id = "#" + $(this).attr("choice_id");


                console.log(business_child_id);
                $(business_child_id).empty();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "{{ route('employer_data') }}",
                    data: {
                        business_sector_id: business_parent_val,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {

                        let len = response.length;
                        if (len > 0) {
                            for (i = 0; i < len; i++) {
                                let name = response[i].name;
                                let id = response[i].id;
                                let state_details = '<option value="' + id + '">' +
                                    name + ' </option>'
                                $(business_child_id).append(state_details);
                            }
                        } else {
                            let state_details = '<option value="0"> لا توجد بيانات </option>'
                            $(business_child_id).append(state_details);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush
