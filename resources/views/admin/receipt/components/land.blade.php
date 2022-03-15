<div class="col-12 form-group">
    <br> <h3> @lang('receipts.land_info') </h3>
    <hr>
</div>

<div class="clone_land">
    <div class="row">

        <div class="col-3 form-group">
            <label>@lang('receipts.land_type_id') </label>
            <select class="form-control land_estate_typess" name="land_estate_typess[]" id='land_type_id'>
                <option disabled selected>@lang('receipts.land_type_id')</option>
                @foreach ($land_type_ids as $land_type)
                    <option value="{{ $land_type->id }}" {{ old('land_estate_typess.0') == $land_type->id ? 'selected' : '' }}>
                        {{ $land_type->name }}</option>
                @endforeach
            </select>
            @error('land_type_id')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.land_status_ids') </label>
            <select class="form-control" name="land_estate_statuss[]" id='land_status_ids'>
                <option disabled selected>@lang('receipts.land_status_ids')</option>
                @foreach ($land_status_ids as $and_status)
                    <option value="{{ $and_status->id }}"
                        {{ old('land_estate_statuss.0') == $and_status->id ? 'selected' : '' }}>
                        {{ $and_status->name }}</option>
                @endforeach
            </select>
            @error('land_status_ids')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.planned_num') </label>
            <input type="text" name="land_planned_nums[]" id="planned_num" placeholder="@lang('receipts.planned_num')"
                class="form-control" value="{{ old('land_planned_nums.0') }}">
            @error('planned_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.piece_num') </label>
            <input type="text" name="land_piece_nums[]" id="piece_num" placeholder="@lang('receipts.piece_num')"
                class="form-control" value="{{ old('land_piece_nums.0') }}">
            @error('piece_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.city') </label>
            <select class="form-control" name="land_city_id" id='city'>
                <option disabled selected>@lang('receipts.city')</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}" {{ old('land_city_id.0') == $city->id ? 'selected' : '' }}>
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
            <input type="text" name="land_districts[]" id="district" placeholder="@lang('receipts.district')"
                class="form-control" value="{{ old('land_districts.0') }}">
            @error('district')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.owner_num') </label>
            <input type="text" name="land_owner_nums[]" id="owner_num" placeholder="@lang('receipts.owner_num')"
                class="form-control" value="{{ old('land_owner_nums.0') }}">
            @error('owner_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.rate_num') </label>
            <input type="text" name="land_rate_nums[]" id="rate_num" placeholder="@lang('receipts.rate_num')"
                class="form-control" value="{{ old('land_rate_nums.0') }}">
            @error('rate_num')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.license_type') </label>
            <select class="form-control" name="land_license_type_id[]" id='real_license_type_id'>
                <option disabled selected>@lang('receipts.license_type')</option>
                @foreach ($license_types as $license_type)
                    <option value="{{ $license_type->id }}"
                        {{ old('land_license_type_id.0') == $license_type->id ? 'selected' : '' }}>
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
            <input type="text" name="land_license_issue_dates[]" id="license_issue_date"
                placeholder="@lang('receipts.license_issue_date')" class="form-control disable-date"
                value="{{ old('land_license_issue_dates.0') }}">
            @error('license_issue_date')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.license_expiration_date') </label>
            <input type="text" name="land_license_expiration_dates[]" id="license_expiration_date"
                placeholder="@lang('receipts.license_expiration_date')" class="form-control disable-date"
                value="{{ old('land_license_expiration_dates.0') }}">
            @error('license_expiration_date')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group">
            <label>@lang('receipts.property_price') </label>
            <input type="text" name="land_property_prices[]" id="property_price"
                placeholder="@lang('receipts.property_price')" class="form-control"
                value="{{ old('land_property_prices.0') }}">
            @error('property_price')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-12 form-group">
            <label>@lang('receipts.land_notes') </label>
            <input type="text" name="land_property_notess[]" id="property_notes"
                placeholder="@lang('receipts.land_notes')" class="form-control"
                value="{{ old('land_property_notess.0') }}">
            @error('property_notes')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @include('admin.receipt.components.land_rating')

        <div class="col-12 form-group">
            <a class="btn btn-light-success font-weight-bold btn-sm land_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_land') </a><br>
        </div>
    </div>
    <div class="clone_land_last">

    </div>
</div>

@push('js')
    <script type="text/javascript">
        $(document).on('click', '.land_clone', function() {
            var max_input_3 = 9;
            var x = 0;
            var content = `
            <iv class="new-incomee">
                <div class="row">
                    <div class="col-3 form-group">
                            <label>@lang('receipts.land_type_id') </label>
                            <select class="form-control land_estate_typess" name="land_estate_typess[]" id='land_type_id'>
                                <option disabled selected>@lang('receipts.land_type_id')</option>
                                @foreach ($land_type_ids as $land_type)
                                    <option value="{{ $land_type->id }}" {{ old('land_type') == $land_type->id ? 'selected' : '' }}>
                                        {{ $land_type->name }}</option>
                                @endforeach
                            </select>
                            @error('land_type_id')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.land_status_ids') </label>
                            <select class="form-control" name="land_estate_statuss[]" id='land_status_ids'>
                                <option disabled selected>@lang('receipts.land_status_ids')</option>
                                @foreach ($land_status_ids as $and_status)
                                    <option value="{{ $and_status->id }}" {{ old('and_status') == $and_status->id ? 'selected' : '' }}>
                                        {{ $and_status->name }}</option>
                                @endforeach
                            </select>
                            @error('land_status_ids')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.planned_num') </label>
                            <input type="text" name="land_planned_nums[]" id="planned_num" placeholder="@lang('receipts.planned_num')"
                                class="form-control" value="{{ old('planned_num') }}">
                            @error('planned_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.piece_num') </label>
                            <input type="text" name="land_piece_nums[]" id="piece_num" placeholder="@lang('receipts.piece_num')"
                                class="form-control" value="{{ old('piece_num') }}">
                            @error('piece_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.city') </label>
                            <select class="form-control" name="land_city_id" id='city'>
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
                            <input type="text" name="land_districts[]" id="district" placeholder="@lang('receipts.district')"
                                class="form-control" value="{{ old('district') }}">
                            @error('district')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.owner_num') </label>
                            <input type="text" name="land_owner_nums[]" id="owner_num" placeholder="@lang('receipts.owner_num')"
                                class="form-control" value="{{ old('owner_num') }}">
                            @error('owner_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.rate_num') </label>
                            <input type="text" name="land_rate_nums[]" id="rate_num" placeholder="@lang('receipts.rate_num')"
                                class="form-control" value="{{ old('rate_num') }}">
                            @error('rate_num')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-3 form-group">
                            <label>@lang('receipts.license_type') </label>
                            <select class="form-control" name="land_license_type_id[]" id='real_license_type_id'>
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
                            <input type="text" name="land_license_issue_dates[]" id="license_issue_date"
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
                            <input type="text" name="land_license_expiration_dates[]" id="license_expiration_date"
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
                            <input type="text" name="land_property_prices[]" id="property_price"
                                placeholder="@lang('receipts.property_price')" class="form-control"
                                value="{{ old('property_price') }}">
                            @error('property_price')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 form-group">
                            <label>@lang('receipts.land_notes') </label>
                            <input type="text" name="land_property_notess[]" id="property_notes"
                                placeholder="@lang('receipts.land_notes')" class="form-control"
                                value="{{ old('property_notes') }}">
                            @error('property_notes')
                                <span class="help-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @include('admin.receipt.components.land_rating')

                    <div class="col-3 form-group">
                        <a class="btn btn-light-success font-weight-bold btn-sm land_clone text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_land') </a>
                <a class="btn btn-light-danger font-weight-bold remove_land_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
            if (x < max_input_3) {
                $('.clone_land .clone_land_last').append(content);
                x++;
            }
        });

        $(document).on('click', '.remove_land_input', function() {
            $(this).parent().parent().remove();
            x--;
        })
    </script>
@endpush

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            var x = 0;
            const MAX_INPUT = 9;


            $(document).on('click', '.land_rate_clone', function() {
                var parent = $(this).parents(".clone_land_rate");

                var selectVal = $("#land_type_id").val();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "{{ route('real_estate_types') }}",
                    data: {
                        real_estate_type: selectVal,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        let land_id = response;

                        if (x < MAX_INPUT) {
                            parent.append(renderLandRate(land_id, x));
                            x++;
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
            $(document).on('click', '.remove_land_rate_input', function() {
                $(this).parent().parent().remove();
                x--;
            })
            $(document).on('change', ".land_bank_id", function() {
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

            $(document).on('change', ".land_estate_typess", function() {
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
                        let land_id = response;

                        $('.land_id').each(function(i, obj) {
                            console.log(obj);
                            var value = $(obj).val(land_id);
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            function renderLandRate(id, x) {
                var content = `
            <div class="new-income">
                <div class="row">
                    <div class="col-3 form-group">
                        <label>@lang('receipts.bank') </label>
                        <select class="form-control land_bank_id" choice_id="emp_rate_choice_id_${x+1}" name="land_bank_ids[]" id='business_sector_id_${x+1}'>
                            <option disabled selected>@lang('receipts.bank')</option>
                            @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}" {{ old('bank') == $bank->id ? 'selected' : '' }}>
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
                        <input type="text" name="land_first_rates[]" id="first_rate"
                            placeholder="@lang('receipts.first_rate')" class="form-control"
                            value="{{ old('first_rate') }}">
                        @error('first_rate')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="hidden" name="land_id[]" value="${id}" class="land_id">

                    <div class="col-3 form-group">
                        <label>@lang('receipts.second_rate') </label>
                        <input type="text" name="land_second_rates[]" id="second_rate"
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
                        <input type="text" name="land_third_rates[]" id="third_rate"
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
                        <select class="form-control" name="land_emp_rates[]" id="emp_rate_choice_id_${x+1}">
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
                            value="{{ old('approved_rate') }}">
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
                            value="{{ old('rate_notes') }}">
                        @error('rate_notes')
                            <span class="help-block">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-3 form-group">
                <a class="btn btn-light-success font-weight-bold btn-sm land_rate_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> @lang('receipts.add_land_rate') </a>
                <a class="btn btn-light-danger font-weight-bold remove_land_rate_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
                return content;
            }
        });
    </script>
@endpush
