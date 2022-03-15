<div class="col-12 form-group">
    <h3>
        @lang('receipts.commitment_info')
    </h3>
    <hr>
</div>
@if (count($data->commitment) > 0)

    @foreach ($data->commitment as $commitment)
        <div class="clone_commitment">
            <div class="row">
                <div class="col-3 form-group">
                    <label>@lang('receipts.installment') </label>
                    <input type="text" name="installments[]" id="installment"
                        placeholder="@lang('receipts.installment')" class="form-control"
                        value="{{ old('installments.0', $commitment->installment) }}">
                    @error('installment')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.product_type_id') </label>
                    <select class="form-control" name="product_type_ids[]" id='product_type_id'>
                        <option disabled>@lang('receipts.product_type_id')</option>
                        @foreach ($product_description as $type)
                            <option value="{{ $type->id }}" @if ($commitment->product_type_id == $type->id) selected @endif>{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('product_type_id')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.sponser_id') </label>
                    <select class="form-control" name="sponser_ids[]" id='sponser_id'>
                        <option disabled>@lang('receipts.sponser_id')</option>
                        @foreach ($sponsers as $sponser)
                            <option value="{{ $sponser->id }}" @if ($commitment->sponser_id == $sponser->id) selected @endif>{{ $sponser->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('sponser_id')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.payment_status_id') </label>
                    <select class="form-control" name="payment_status_ids[]" id='payment_status_id'>
                        <option disabled>@lang('receipts.payment_status_id')</option>
                        @foreach ($Payment_status as $Payment)
                            <option value="{{ $Payment->id }}" @if ($commitment->payment_status_id == $Payment->id) selected @endif>{{ $Payment->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('payment_status_id')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.early_repayment') </label>
                    <input type="text" name="early_repayments[]" id="early_repayment"
                        placeholder="@lang('receipts.early_repayment')" class="form-control"
                        value="{{ old('early_repayments.0', $commitment->early_repayment) }}">
                    @error('early_repayment')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.total') </label>
                    <input type="text" name="commitment_totals[]" id="total" placeholder="@lang('receipts.total')"
                        class="form-control" value="{{ old('commitment_totals.0', $commitment->total) }}">
                    @error('total')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.commitment_start_date') </label>
                    <input type="text" name="commitment_start_dates[]" id="commitment_start_date"
                        placeholder="@lang('receipts.commitment_start_date')" class="form-control disable-date"
                        value="{{ old('commitment_start_dates.0', $commitment->commitment_start_date) }}">
                    @error('commitment_start_date')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-3 form-group">
                    <label>@lang('receipts.commitment_end_date') </label>
                    <input type="text" name="commitment_end_dates[]" id="commitment_end_date"
                        placeholder="@lang('receipts.commitment_end_date')" class="form-control disable-date"
                        value="{{ old('commitment_end_dates.0', $commitment->commitment_end_date) }}">
                    @error('commitment_end_date')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.remaining_installments_count') </label>
                    <input type="text" name="remaining_installments_counts[]" id="remaining_installments_count"
                        placeholder="@lang('receipts.remaining_installments_count')" class="form-control"
                        value="{{ old('remaining_installments_counts.0', $commitment->remaining_installments_count) }}">
                    @error('remaining_installments_count')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-3 form-group">
                    <label>@lang('receipts.last_payment_date') </label>
                    <input type="text" name="last_payment_dates[]" id="last_payment_date"
                        placeholder="@lang('receipts.last_payment_date')" class="form-control disable-date"
                        value="{{ old('last_payment_dates.0', $commitment->last_payment_date) }}">
                    @error('last_payment_date')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-6 form-group">
                    <label>@lang('receipts.commitment_notes') </label>
                    <input type="text" name="commitment_notess[]" id="commitment_notes"
                        placeholder="@lang('receipts.commitment_notes')" class="form-control"
                        value="{{ old('commitment_notess.0', $commitment->notes) }}">
                    @error('commitment_notes')
                        <span class="help-block">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="hidden" name="commitment_id[]" value="{{ $commitment->id }}">

                <div class="col-12 form-group">

                    <a class="btn btn-light-success font-weight-bold btn-sm commitment_clone text-center"
                        style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_commitment') </a>
                    <a class="btn btn-light-danger font-weight-bold remove_commitment_input mr-3"
                        style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
                </div>
            </div>
            <div class="clone_commitment_last">

            </div>
        </div>
    @endforeach
@else

    <div class="clone_commitment">
        <div class="row">
            <div class="col-3 form-group">
                <label>@lang('receipts.installment') </label>
                <input type="text" name="installments[]" id="installment" placeholder="@lang('receipts.installment')"
                    class="form-control" value="{{ old('installments.0') }}">
                @error('installment')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.product_type_id') </label>
                <select class="form-control" name="product_type_ids[]" id='product_type_id'>
                    <option disabled selected>@lang('receipts.product_type_id')</option>
                    @foreach ($product_description as $product)
                        <option value="{{ $product->id }}"
                            {{ old('product_type_ids.0') == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product_type_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.sponser_id') </label>
                <select class="form-control" name="sponser_ids[]" id='sponser_id'>
                    <option disabled selected>@lang('receipts.sponser_id')</option>
                    @foreach ($sponsers as $sponser)
                        <option value="{{ $sponser->id }}"
                            {{ old('sponser_id.0') == $sponser->id ? 'selected' : '' }}>
                            {{ $sponser->name }}</option>
                    @endforeach
                </select>
                @error('sponser_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.payment_status_id') </label>
                <select class="form-control" name="payment_status_ids[]" id='payment_status_id'>
                    <option disabled selected>@lang('receipts.payment_status_id')</option>
                    @foreach ($Payment_status as $Payment)
                        <option value="{{ $Payment->id }}"
                            {{ old('payment_status_ids.0') == $Payment->id ? 'selected' : '' }}>
                            {{ $Payment->name }}</option>
                    @endforeach
                </select>
                @error('payment_status_id')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.early_repayment') </label>
                <input type="text" name="early_repayments[]" id="early_repayment"
                    placeholder="@lang('receipts.early_repayment')" class="form-control"
                    value="{{ old('early_repayments.0') }}">
                @error('early_repayment')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.total') </label>
                <input type="text" name="commitment_totals[]" id="total" placeholder="@lang('receipts.total')"
                    class="form-control" value="{{ old('commitment_totals.0') }}">
                @error('total')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.commitment_start_date') </label>
                <input type="text" name="commitment_start_dates[]" id="commitment_start_date"
                    placeholder="@lang('receipts.commitment_start_date')" class="form-control disable-date"
                    value="{{ old('commitment_start_dates.0') }}">
                @error('commitment_start_date')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="col-3 form-group">
                <label>@lang('receipts.commitment_end_date') </label>
                <input type="text" name="commitment_end_dates[]" id="commitment_end_date"
                    placeholder="@lang('receipts.commitment_end_date')" class="form-control disable-date"
                    value="{{ old('commitment_end_dates.0') }}">
                @error('commitment_end_date')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.remaining_installments_count') </label>
                <input type="text" name="remaining_installments_counts[]" id="remaining_installments_count"
                    placeholder="@lang('receipts.remaining_installments_count')" class="form-control"
                    value="{{ old('remaining_installments_counts.0') }}">
                @error('remaining_installments_count')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-3 form-group">
                <label>@lang('receipts.last_payment_date') </label>
                <input type="text" name="last_payment_dates[]" id="last_payment_date"
                    placeholder="@lang('receipts.last_payment_date')" class="form-control disable-date"
                    value="{{ old('last_payment_dates.0') }}">
                @error('last_payment_date')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-6 form-group">
                <label>@lang('receipts.commitment_notes') </label>
                <input type="text" name="commitment_notess[]" id="commitment_notes"
                    placeholder="@lang('receipts.commitment_notes')" class="form-control"
                    value="{{ old('commitment_notess.0') }}">
                @error('commitment_notes')
                    <span class="help-block">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <input type="hidden" name="commitment_id[]" value="{{ $data->id }}">

            <div class="col-12 form-group">

                <a class="btn btn-light-success font-weight-bold btn-sm commitment_clone text-center"
                    style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_commitment') </a>
                <a class="btn btn-light-danger font-weight-bold remove_commitment_input mr-3" style="height: 35px"><i
                        class="fa fa-trash fa-sm p-0"></i></a>
            </div>
        </div>
        <div class="clone_commitment_last">

        </div>
    </div>

@endif
@push('js')
    <script type="text/javascript">
        $(document).on('click', '.commitment_clone', function() {
            var max_input_3 = 9;
            var content = `
            <iv class="new-incomee">
                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('receipts.installment') </label>
                        <input type="text" name="installments[]" id="installment"
                            placeholder="@lang('receipts.installment')" class="form-control"
                            value="{{ old('installment') }}">
                        @error('installment')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.product_type_id') </label>
                        <select class="form-control" name="product_type_ids[]" id='product_type_id'>
                            <option disabled selected>@lang('receipts.product_type_id')</option>

                        </select>
                        @error('product_type_id')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.sponser_id') </label>
                        <select class="form-control" name="sponser_ids[]" id='sponser_id'>
                            <option disabled selected>@lang('receipts.sponser_id')</option>
                            @foreach ($sponsers as $sponser)
                                <option value="{{ $sponser->id }}" {{ old('sponser') == $sponser->id ? 'selected' : '' }}>
                                    {{ $sponser->name }}</option>
                            @endforeach
                        </select>
                        @error('sponser_id')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.payment_status_id') </label>
                        <select class="form-control" name="payment_status_ids[]" id='payment_status_id'>
                            <option disabled selected>@lang('receipts.payment_status_id')</option>
                            @foreach ($Payment_status as $Payment)
                                <option value="{{ $Payment->id }}" {{ old('Payment') == $Payment->id ? 'selected' : '' }}>
                                    {{ $Payment->name }}</option>
                            @endforeach
                        </select>
                        @error('payment_status_id')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.early_repayment') </label>
                        <input type="text" name="early_repayments[]" id="early_repayment"
                            placeholder="@lang('receipts.early_repayment')" class="form-control"
                            value="{{ old('early_repayment') }}">
                        @error('early_repayment')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.total') </label>
                        <input type="text" name="commitment_totals[]" id="total"
                            placeholder="@lang('receipts.total')" class="form-control"
                            value="{{ old('total') }}">
                        @error('total')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.commitment_start_date') </label>
                        <input type="text" name="commitment_start_dates[]" id="commitment_start_date"
                            placeholder="@lang('receipts.commitment_start_date')" class="form-control disable-date"
                            value="{{ old('commitment_start_date') }}">
                        @error('commitment_start_date')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.commitment_end_date') </label>
                        <input type="text" name="commitment_end_dates[]" id="commitment_end_date"
                            placeholder="@lang('receipts.commitment_end_date')" class="form-control disable-date"
                            value="{{ old('commitment_end_date') }}">
                        @error('commitment_end_date')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.remaining_installments_count') </label>
                        <input type="text" name="remaining_installments_counts[]" id="remaining_installments_count"
                            placeholder="@lang('receipts.remaining_installments_count')" class="form-control"
                            value="{{ old('remaining_installments_count') }}">
                        @error('remaining_installments_count')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.last_payment_date') </label>
                        <input type="text" name="last_payment_dates[]" id="last_payment_date"
                            placeholder="@lang('receipts.last_payment_date')" class="form-control disable-date"
                            value="{{ old('last_payment_date') }}">
                        @error('last_payment_date')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="hidden" name="commitment_id[]" value="">

                    <div class="col-6 form-group">
                        <label>@lang('receipts.commitment_notes') </label>
                        <input type="text" name="commitment_notess[]" id="commitment_notes" placeholder="@lang('receipts.commitment_notes')" class="form-control"
                            value="{{ old('commitment_notes') }}">
                        @error('commitment_notes')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
             <div class="col-3 form-group">
                <a class="btn btn-light-success font-weight-bold btn-sm commitment_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_commitment') </a>
                <a class="btn btn-light-danger font-weight-bold remove_commitment_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
            if (x < max_input_3) {
                $('.clone_commitment .clone_commitment_last').append(content);
                x++;
            }
        });
        $(document).on('click', '.remove_commitment_input', function() {
            $(this).parent().parent().remove();
            x--;
        })
    </script>
@endpush
