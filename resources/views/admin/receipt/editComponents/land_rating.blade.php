<div class="col-12 form-group">
    <br>
    <h3>
        @lang('receipts.land_rate_info')
    </h3>
    <hr>
</div>
@if (count($land_rate) > 0)
    @foreach ($land_rate as $rate)
        <div class="clone_land_rate">
            <div class="row">
                <div class="col-3 form-group">
                    <label>@lang('receipts.bank') </label>
                    <select class="form-control land_bank_id" choice_id="emp_rate_land_choice_id_0"
                        name="land_bank_ids[]" id='land_bank_id'>
                        <option disabled>@lang('receipts.bank')</option>
                        @foreach ($banks as $bank)
                            <option value="{{ $bank->id }}" @if ($rate->land_bank_id == $bank->id) selected @endif>{{ $bank->name }}</option>
                        @endforeach

                    </select>
                    @error('land_bank_id')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.first_rate') </label>
                    <input type="text" name="land_first_rates[]" id="first_rate"
                        placeholder="@lang('receipts.first_rate')" class="form-control"
                        value="{{ old('land_first_rates.0', $rate->first_rate) }}">
                    @error('first_rate')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-3 form-group">
                    <label>@lang('receipts.second_rate') </label>
                    <input type="text" name="land_second_rates[]" id="second_rate"
                        placeholder="@lang('receipts.second_rate')" class="form-control"
                        value="{{ old('land_second_rates.0', $rate->second_rate) }}">
                    @error('second_rate')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-3 form-group">
                    <label>@lang('receipts.third_rate') </label>
                    <input type="text" name="land_third_rates[]" id="third_rate"
                        placeholder="@lang('receipts.third_rate')" class="form-control"
                        value="{{ old('land_third_rates.0', $rate->third_rate) }}">
                    @error('third_rate')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="col-3 form-group">
                    <label>@lang('receipts.emp_rate') </label>
                    <select class="form-control real_emp_rate_id" name="land_emp_rates[]"
                        id='emp_rate_land_choice_id_0'>
                        <option disabled selected>@lang('receipts.emp_rate')</option>
                        @foreach ($rate_employees as $emp)
                            <option value="{{ $emp->id }}" @if ($rate->emp_rate_id == $emp->id) selected @endif>{{ $emp->name }}</option>
                        @endforeach
                    </select>
                    @error('real_emp_rate_id')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-3 form-group">
                    <label>@lang('receipts.approved_rate') </label>
                    <input type="text" name="land_approved_rates[]" id="approved_rate"
                        placeholder="@lang('receipts.approved_rate')" class="form-control"
                        value="{{ old('land_approved_rates.0', $rate->approved_rate) }}">
                    @error('approved_rate')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-6 form-group">
                    <label>@lang('receipts.rate_notes') </label>
                    <input type="text" name="land_rate_notess[]" id="rate_notes"
                        placeholder="@lang('receipts.rate_notes')" class="form-control"
                        value="{{ old('land_rate_notess.0', $rate->rate_notes) }}">
                    @error('rate_notes')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <input type="hidden" name="land_id[]" value="" class="land_id">

                <div class="col-12 form-group">

                    <a class="btn btn-light-success font-weight-bold btn-sm land_rate_clone text-center"
                        style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_real_rate') </a>
                    <a class="btn btn-light-danger font-weight-bold remove_land_rate_input mr-3" style="height: 35px"><i
                            class="fa fa-trash fa-sm p-0"></i></a>
                </div>
            </div>
            <div class="clone_land_rate_last">

            </div>
        </div>

    @endforeach
@else
    <div class="row">
        <div class="col-3 form-group">
            <label>@lang('receipts.bank') </label>
            <select class="form-control land_bank_id" choice_id="emp_rate_land_choice_id_0" name="land_bank_ids[]"
                id='land_bank_id'>
                <option disabled selected>@lang('receipts.bank')</option>
                @foreach ($banks as $bank)
                    <option value="{{ $bank->id }}" {{ old('land_bank_ids.0') == $bank->id ? 'selected' : '' }}>
                        {{ $bank->name }}</option>
                @endforeach
            </select>
            @error('land_bank_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.first_rate') </label>
            <input type="text" name="land_first_rates[]" id="first_rate" placeholder="@lang('receipts.first_rate')"
                class="form-control" value="{{ old('land_first_rates.0') }}">
            @error('first_rate')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="col-3 form-group">
            <label>@lang('receipts.second_rate') </label>
            <input type="text" name="land_second_rates[]" id="second_rate" placeholder="@lang('receipts.second_rate')"
                class="form-control" value="{{ old('land_second_rates.0') }}">
            @error('second_rate')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.third_rate') </label>
            <input type="text" name="land_third_rates[]" id="third_rate" placeholder="@lang('receipts.third_rate')"
                class="form-control" value="{{ old('land_third_rates.0') }}">
            @error('third_rate')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.emp_rate') </label>
            <select class="form-control real_emp_rate_id" name="land_emp_rates[]" id='emp_rate_land_choice_id_0'>
                <option disabled selected>@lang('receipts.emp_rate')</option>
            </select>
            @error('real_emp_rate_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.approved_rate') </label>
            <input type="text" name="land_approved_rates[]" id="approved_rate"
                placeholder="@lang('receipts.approved_rate')" class="form-control"
                value="{{ old('land_approved_rates.0') }}">
            @error('approved_rate')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6 form-group">
            <label>@lang('receipts.rate_notes') </label>
            <input type="text" name="land_rate_notess[]" id="rate_notes" placeholder="@lang('receipts.rate_notes')"
                class="form-control" value="{{ old('land_rate_notess.0') }}">
            @error('rate_notes')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

@endif
