<div class="col-12 form-group">
    <br>
    <h3>
        @lang('receipts.real_state_info')
    </h3>
    <hr>
</div>
<div class="clone_real_estate">
    <div class="row">
        <div class="col-3 form-group">
            <label>@lang('receipts.real_estate_types') </label>
            <select class="form-control real_estate_typess" name="real_estate_typess[]" id='real_estate_types'>
                <option disabled selected>@lang('receipts.real_estate_types')</option>
                @foreach ($real_estate_types as $real_estate_type)
                    <option value="{{ $real_estate_type->id }}"
                        {{ old('real_estate_typess.0') == $real_estate_type->id ? 'selected' : '' }}>
                        {{ $real_estate_type->name }}</option>
                @endforeach
            </select>
            @error('real_estate_types')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.real_estate_status') </label>
            <select class="form-control" name="real_estate_statuss[]" id='real_estate_status'>
                <option disabled selected>@lang('receipts.real_estate_status')</option>
                @foreach ($real_estate_status as $real_estate_stat)
                    <option value="{{ $real_estate_stat->id }}"
                        {{ old('real_estate_statuss.0') == $real_estate_stat->id ? 'selected' : '' }}>
                        {{ $real_estate_stat->name }}</option>
                @endforeach
            </select>
            @error('real_estate_status')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.planned_num') </label>
            <input type="text" name="real_planned_nums[]" id="planned_num" placeholder="@lang('receipts.planned_num')"
                class="form-control" value="{{ old('real_planned_nums.0') }}">
            @error('planned_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.piece_num') </label>
            <input type="text" name="real_piece_nums[]" id="piece_num" placeholder="@lang('receipts.piece_num')"
                class="form-control" value="{{ old('real_piece_nums.0') }}">
            @error('piece_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.city') </label>
            <select class="form-control" name="real_city_id" id='city'>
                <option disabled selected>@lang('receipts.city')</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ old('real_city_id.0') == $city->id ? 'selected' : '' }}>
                        {{ $city->name }}</option>
                @endforeach
            </select>
            @error('city_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.district') </label>
            <input type="text" name="real_districts[]" id="district" placeholder="@lang('receipts.district')"
                class="form-control" value="{{ old('real_districts.0') }}">
            @error('district')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.owner_num') </label>
            <input type="text" name="real_owner_nums[]" id="owner_num" placeholder="@lang('receipts.owner_num')"
                class="form-control" value="{{ old('real_owner_nums.0') }}">
            @error('owner_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.rate_num') </label>
            <input type="text" name="real_rate_nums[]" id="rate_num" placeholder="@lang('receipts.rate_num')"
                class="form-control" value="{{ old('real_rate_nums.0') }}">
            @error('rate_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.license_type') </label>
            <select class="form-control" name="real_license_type_id[]" id='real_license_type_id'>
                <option disabled selected>@lang('receipts.license_type')</option>
                @foreach ($license_types as $license_type)
                    <option value="{{ $license_type->id }}"
                        {{ old('real_license_type_id.0') == $license_type->id ? 'selected' : '' }}>
                        {{ $license_type->name }}</option>
                @endforeach
            </select>
            @error('real_license_type_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.license_issue_date') </label>
            <input type="text" name="real_license_issue_dates[]" id="license_issue_date"
                placeholder="@lang('receipts.license_issue_date')" class="form-control disable-date"
                value="{{ old('real_license_issue_dates.0') }}">
            @error('license_issue_date')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.license_expiration_date') </label>
            <input type="text" name="real_license_expiration_dates[]" id="license_expiration_date"
                placeholder="@lang('receipts.license_expiration_date')" class="form-control disable-date"
                value="{{ old('real_license_expiration_dates.0') }}">
            @error('license_expiration_date')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.property_price') </label>
            <input type="text" name="real_property_prices[]" id="property_price"
                placeholder="@lang('receipts.property_price')" class="form-control"
                value="{{ old('real_property_prices.0') }}">
            @error('property_price')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-12 form-group">
            <label>@lang('receipts.property_notes') </label>
            <input type="text" name="real_property_notess[]" id="property_notes"
                placeholder="@lang('receipts.property_notes')" class="form-control"
                value="{{ old('real_property_notess.0') }}">
            @error('property_notes')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @include('admin.receipt.components.real_rating')


        <div class="col-12 form-group">
            <a class="btn btn-light-success font-weight-bold btn-sm estate_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_real_estate') </a><br>
        </div>
    </div>
    <div class="clone_real_estate_last">

    </div>
</div>

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.estate_clone', function() {
                var max_input_3 = 9;
                console.log(x);

                var content = `
            <iv class="new-incomee">
                <div class="row">
                    <div class="col-3 form-group">
                            <label>@lang('receipts.real_estate_types') </label>
                            <select class="form-control real_estate_typess" name="real_estate_typess[]" id='real_estate_types'>
                                <option disabled selected>@lang('receipts.real_estate_types')</option>
                                @foreach ($real_estate_types as $real_estate_type)
                                    <option value="{{ $real_estate_type->id }}"
                                        {{ old('real_estate_type') == $real_estate_type->id ? 'selected' : '' }}>
                                        {{ $real_estate_type->name }}</option>
                                @endforeach
                            </select>
                            @error('real_estate_types')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.real_estate_status') </label>
                            <select class="form-control" name="real_estate_statuss[]" id='real_estate_status'>
                                <option disabled selected>@lang('receipts.real_estate_status')</option>
                                @foreach ($real_estate_status as $real_estate_stat)
                                    <option value="{{ $real_estate_stat->id }}"
                                        {{ old('real_estate_stat') == $real_estate_stat->id ? 'selected' : '' }}>
                                        {{ $real_estate_stat->name }}</option>
                                @endforeach
                            </select>
                            @error('real_estate_status')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.planned_num') </label>
                            <input type="text" name="real_planned_nums[]" id="planned_num" placeholder="@lang('receipts.planned_num')"
                                class="form-control" value="{{ old('planned_num') }}">
                            @error('planned_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.piece_num') </label>
                            <input type="text" name="real_piece_nums[]" id="piece_num" placeholder="@lang('receipts.piece_num')"
                                class="form-control" value="{{ old('piece_num') }}">
                            @error('piece_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.city') </label>
                            <select class="form-control" name="real_city_id" id='city'>
                                <option disabled selected>@lang('receipts.city')</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ old('city') == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.district') </label>
                            <input type="text" name="real_districts[]" id="district" placeholder="@lang('receipts.district')"
                                class="form-control" value="{{ old('district') }}">
                            @error('district')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.owner_num') </label>
                            <input type="text" name="real_owner_nums[]" id="owner_num" placeholder="@lang('receipts.owner_num')"
                                class="form-control" value="{{ old('owner_num') }}">
                            @error('owner_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.rate_num') </label>
                            <input type="text" name="real_rate_nums[]" id="rate_num" placeholder="@lang('receipts.rate_num')"
                                class="form-control" value="{{ old('rate_num') }}">
                            @error('rate_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.license_type') </label>
                            <select class="form-control" name="real_license_type_id[]" id='real_license_type_id'>
                                <option disabled selected>@lang('receipts.license_type')</option>
                                @foreach ($license_types as $license_type)
                                    <option value="{{ $license_type->id }}" {{ old('license_type') == $license_type->id ? 'selected' : '' }}>
                                        {{ $license_type->name }}</option>
                                @endforeach
                            </select>
                            @error('real_license_type_id')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.license_issue_date') </label>
                            <input type="text" name="real_license_issue_dates[]" id="license_issue_date"
                                placeholder="@lang('receipts.license_issue_date')" class="form-control disable-date"
                                value="{{ old('license_issue_date') }}">
                            @error('license_issue_date')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.license_expiration_date') </label>
                            <input type="text" name="real_license_expiration_dates[]" id="license_expiration_date"
                                placeholder="@lang('receipts.license_expiration_date')" class="form-control disable-date"
                                value="{{ old('license_expiration_date') }}">
                            @error('license_expiration_date')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.property_price') </label>
                            <input type="text" name="real_property_prices[]" id="property_price"
                                placeholder="@lang('receipts.property_price')" class="form-control"
                                value="{{ old('property_price') }}">
                            @error('property_price')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 form-group">
                            <label>@lang('receipts.property_notes') </label>
                            <input type="text" name="real_property_notess[]" id="property_notes"
                                placeholder="@lang('receipts.property_notes')" class="form-control"
                                value="{{ old('property_notes') }}">
                            @error('property_notes')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @include('admin.receipt.components.real_rating')

                    <div class="col-3 form-group">
                        <a class="btn btn-light-success font-weight-bold btn-sm estate_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_real_estate') </a>
                <a class="btn btn-light-danger font-weight-bold remove_real_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
                if (x < max_input_3) {
                    $('.clone_real_estate .clone_real_estate_last').append(content);
                    x++;
                }
            });
            $(document).on('click', '.remove_real_input', function() {
                $(this).parent().parent().remove();
                x--;
            });
        });
    </script>
@endpush


@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            var x = 0;
            const MAX_INPUT = 9;
            $(document).on('click', '.real_rate_clone', function() {
                var parent = $(this).parents(".clone_real_rate");
                var selectVal = $("#real_estate_types").val();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "{{ route('real_estate_types') }}",
                    data: {
                        real_estate_type: selectVal,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        let real_estate_id = response;
                        if (x < MAX_INPUT) {
                            parent.append(renderRate(real_estate_id, x));
                            x++;
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

            });

            $(document).on('click', '.remove_real_rate_input', function() {
                $(this).parent().parent().remove();
                x--;
            })

            $(document).on('change', ".real_bank_id", function() {

                let bank_val = $(this).val();
                let emp_rate_id = "#" + $(this).attr("choice_id");
                $(emp_rate_id).empty();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "{{ route('bank_emp_data') }}",
                    data: {
                        bank_val: bank_val,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        let len = response.length;
                        if (len > 0) {
                            for (i = 0; i < len; i++) {
                                let name = response[i].name;
                                let id = response[i].id;
                                let bank_emp_details = '<option value="' + id + '">' +
                                    name + ' </option>'
                                $(emp_rate_id).append(bank_emp_details);
                            }
                        } else {
                            let bank_emp_details = '<option value="0"> لا توجد بيانات </option>'
                            $(emp_rate_id).append(bank_emp_details);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $(document).on('change', ".real_estate_typess", function() {

                let real_estate_type = $(this).val();
                console.log(real_estate_type);
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "{{ route('real_estate_types') }}",
                    data: {
                        real_estate_type: real_estate_type,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        console.log(response);
                        let real_estate_id = response;

                        $('.real_estate_id').each(function(i, obj) {
                            console.log(obj);
                            var value = $(obj).val(real_estate_id);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            function renderRate(id, x) {
                let content = `
            <div class="new-income">
                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('receipts.bank') </label>
                        <select class="form-control real_bank_id" choice_id="emp_rate_choice_id_${x+1}" name="real_bank_ids[]" id='business_sector_id_${x+1}'>
                            <option disabled selected>@lang('receipts.bank')</option>
                            @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}" {{ old('bank') == $bank->id ? 'selected' : '' }}>
                                    {{ $bank->name }}</option>
                            @endforeach
                        </select>
                        @error('real_bank_id')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.first_rate') </label>
                        <input type="text" name="real_first_rates[]" id="first_rate"
                            placeholder="@lang('receipts.first_rate')" class="form-control"
                            value="{{ old('first_rate') }}">
                        @error('first_rate')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.second_rate') </label>
                        <input type="text" name="real_second_rates[]" id="second_rate"
                            placeholder="@lang('receipts.second_rate')" class="form-control"
                            value="{{ old('second_rate') }}">
                        @error('second_rate')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.third_rate') </label>
                        <input type="text" name="real_third_rates[]" id="third_rate"
                            placeholder="@lang('receipts.third_rate')" class="form-control"
                            value="{{ old('third_rate') }}">
                        @error('third_rate')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                        <label>@lang('receipts.emp_rate') </label>
                        <select class="form-control" name="real_emp_rates[]" id="emp_rate_choice_id_${x+1}">
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
                        <input type="text" name="real_approved_rates[]" id="approved_rate"
                            placeholder="@lang('receipts.approved_rate')" class="form-control"
                            value="{{ old('approved_rate') }}">
                        @error('approved_rate')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   <input type="hidden" name="real_estate_id[]" value="${id}" class="real_estate_id">

                    <div class="col-6 form-group">
                        <label>@lang('receipts.rate_notes') </label>
                        <input type="text" name="real_rate_notess[]" id="rate_notes"
                            placeholder="@lang('receipts.rate_notes')" class="form-control"
                            value="{{ old('rate_notes') }}">
                        @error('rate_notes')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-3 form-group">
                <a class="btn btn-light-success font-weight-bold btn-sm real_rate_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_real_rate') </a>
                <a class="btn btn-light-danger font-weight-bold remove_real_rate_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
                return content;
            }
        });
    </script>
@endpush
