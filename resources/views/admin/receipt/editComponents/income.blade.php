<div class="col-12 form-group">
    <h3>
        @lang('receipts.income_info')
    </h3>
    <hr>
</div>
@if (count($data->income) > 0)

    @foreach ($data->income as $salary)

        <div class="clone_income">
            <div class="row">
                <div class="col-3 form-group">
                    <label>@lang('receipts.income_type_id') </label>
                    <select class="form-control" name="income_type_ids[]" id='income_type_id'>
                        <option disabled value="0">@lang('receipts.income_type_id')</option>
                        @foreach ($income_type as $income)
                            <option value="{{ $income->id }}" @if ($salary->income_type_id == $income->id) selected @endif>{{ $income->name }}</option>
                        @endforeach
                    </select>
                    @error('income_type_id')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.annual_income_value') </label>
                    <input type="text" name="annual_income_values[]" id="annual_income_value"
                        placeholder="@lang('receipts.annual_income_value')" class="form-control"
                        value="{{ old('annual_income_values.0', $salary->annual_income_value) }}">
                    @error('annual_income_value')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="hidden" name="income_id[]" value="{{ $salary->id }}">

                <div class="col-6 form-group">
                    <label>@lang('receipts.income_statement_detail') </label>
                    <input type="text" name="income_statement_details[]" id="income_statement_detail"
                        placeholder="@lang('receipts.income_statement_detail')" class="form-control"
                        value="{{ old('income_statement_details.0', $salary->income_statement_detail) }}">
                    @error('income_statement_detail')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 form-group">
                    <a class="btn btn-light-success font-weight-bold btn-sm income_clone text-center"
                        style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_income') </a>
                    <a class="btn btn-light-danger font-weight-bold remove_income_input mr-3" style="height: 35px"><i
                            class="fa fa-trash fa-sm p-0"></i></a>

                </div>
            </div>
            <div class="clone_income_last">

            </div>
        </div>
    @endforeach

@else

<div class="clone_income">
    <div class="row">
        <div class="col-3 form-group">
            <label>@lang('receipts.income_type_id') </label>
            <select class="form-control" name="income_type_ids[]" id='income_type_id'>
                <option disabled selected value="0">@lang('receipts.income_type_id')</option>
                @foreach ($income_type as $income)
                    <option value="{{ $income->id }}"
                        {{ old('income_type_ids.0') == $income->id ? 'selected' : '' }}>
                        {{ $income->name }}</option>
                @endforeach
            </select>
            @error('income_type_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.annual_income_value') </label>
            <input type="text" name="annual_income_values[]" id="annual_income_value"
                placeholder="@lang('receipts.annual_income_value')" class="form-control"
                value="{{ old('annual_income_values.0') }}">
            @error('annual_income_value')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="income_id[]" value="{{ $data->id }}">

        <div class="col-6 form-group">
            <label>@lang('receipts.income_statement_detail') </label>
            <input type="text" name="income_statement_details[]" id="income_statement_detail"
                placeholder="@lang('receipts.income_statement_detail')" class="form-control"
                value="{{ old('income_statement_details.0') }}">
            @error('income_statement_detail')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 form-group">
            <a class="btn btn-light-success font-weight-bold btn-sm income_clone text-center"
                style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_income') </a>
            <a class="btn btn-light-danger font-weight-bold remove_income_input mr-3" style="height: 35px"><i
                    class="fa fa-trash fa-sm p-0"></i></a>

        </div>
    </div>
    <div class="clone_income_last">

    </div>
</div>
@endif
@push('js')
    <script type="text/javascript">
        $(document).on('click', '.income_clone', function() {
            var max_input_3 = 9;
            var content = `
            <iv class="new-incomee">
                <div class="row">

                    <div class="col-3 form-group">
                        <label>@lang('receipts.income_type_id') </label>
                        <select class="form-control" name="income_type_ids[]" id='income_type_id'>
                            <option disabled selected value="0">@lang('receipts.income_type_id')</option>
                            @foreach ($income_type as $income)
                                <option value="{{ $income->id }}" {{ old('income') == $income->id ? 'selected' : '' }}>
                                    {{ $income->name }}</option>
                            @endforeach
                        </select>
                        @error('income_type_id')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.annual_income_value') </label>
                        <input type="text" name="annual_income_values[]" id="annual_income_value"
                            placeholder="@lang('receipts.annual_income_value')" class="form-control"
                            value="{{ old('annual_income_value') }}">
                        @error('annual_income_value')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-6 form-group">
                        <label>@lang('receipts.income_statement_detail') </label>
                        <input type="text" name="income_statement_details[]" id="income_statement_detail"
                            placeholder="@lang('receipts.income_statement_detail')" class="form-control"
                            value="{{ old('income_statement_detail') }}">
                        @error('income_statement_detail')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="hidden" name="income_id[]" value="">

                    <div class="col-3 form-group">

                <a class="btn btn-light-success font-weight-bold btn-sm income_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_income') </a>
                <a class="btn btn-light-danger font-weight-bold remove_income_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
            if (x < max_input_3) {
                $('.clone_income .clone_income_last').append(content);
                x++;
            }
        });

        $(document).on('click', '.remove_income_input', function() {
            $(this).parent().parent().remove();
            x--;
        })
    </script>
@endpush
