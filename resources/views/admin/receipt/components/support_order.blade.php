<div class="col-12 form-group">
    <br>
    <h3> @lang('receipts.support_info')</h3>
    <hr>
</div>

<div class="support_status">
    <div class="row">
        <div class="col-3 form-group" id="support_status">
            <label>@lang('receipts.support_status') </label>
            <select class="form-control support_status" name="support_status" id='support_status'>
                <option disabled selected>@lang('receipts.support_status')</option>
                <option value="supported" {{ old('support_status') == 'supported' ? 'selected' : '' }}>
                    @lang('receipts.supported')</option>
                <option value="not_supported" {{ old('support_status') == 'not_supported' ? 'selected' : '' }}>
                    @lang('receipts.not_supported')</option>
                <option value="former_beneficiary"
                    {{ old('support_status') == 'former_beneficiary' ? 'selected' : '' }}>
                    @lang('receipts.former_beneficiary')</option>
                <option value="second_beneficiary"
                    {{ old('support_status') == 'second_beneficiary' ? 'selected' : '' }}>
                    @lang('receipts.second_beneficiary')</option>
            </select>
            @error('support_status')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="col-12 form-group">
    <br>
    <h3> @lang('receipts.order_type')</h3>
    <hr>
</div>

<div class="order_type">
    <div class="row">
        <div class="col-3 form-group" id="order_type">
            <label>@lang('receipts.order_type') </label>
            <select class="form-control order_type" name="order_type" id='order_type'>
                <option disabled selected>@lang('receipts.order_type')</option>
                <option value="personal" {{ old('order_type') == 'personal' ? 'selected' : '' }}>
                    @lang('receipts.personal')</option>
                <option value="real_estate" {{ old('order_type') == 'real_estate' ? 'selected' : '' }}>
                    @lang('receipts.real_estate')</option>
                <option value="commercial" {{ old('order_type') == 'commercial' ? 'selected' : '' }}>
                    @lang('receipts.commercial')</option>
                <option value="rental" {{ old('order_type') == 'rental' ? 'selected' : '' }}>
                    @lang('receipts.rental')</option>
            </select>
            @error('order_type')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-3 form-group d-none" id="personal">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="new" {{ old('order_result') == 'new' ? 'selected' : '' }}>
                    @lang('receipts.new')</option>
                <option value="extra" {{ old('order_result') == 'extra' ? 'selected' : '' }}>
                    @lang('receipts.extra')</option>
                <option value="complementary" {{ old('order_result') == 'complementary' ? 'selected' : '' }}>
                    @lang('receipts.complementary')</option>
                <option value="buying_personal_debts"
                    {{ old('order_result') == 'buying_personal_debts' ? 'selected' : '' }}>
                    @lang('receipts.buying_personal_debts')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group d-none" id="real_estate_supported">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="alone_ready" {{ old('order_result') == 'alone_ready' ? 'selected' : '' }}
                    id="alone_ready">
                    @lang('receipts.alone_ready')</option>
                <option value="buying_on_map" {{ old('order_result') == 'buying_on_map' ? 'selected' : '' }}
                    id="buying_on_map">
                    @lang('receipts.buying_on_map')</option>
                <option value="self_build" {{ old('order_result') == 'self_build' ? 'selected' : '' }}
                    id="self_build">
                    @lang('receipts.self_build')</option>
                <option value="Land_loan" {{ old('order_result') == 'Land_loan' ? 'selected' : '' }} id="Land_loan">
                    @lang('receipts.Land_loan')</option>
                <option value="buying_real_estate_debt"
                    {{ old('order_result') == 'buying_real_estate_debt' ? 'selected' : '' }}
                    id="buying_real_estate_debt">
                    @lang('receipts.buying_real_estate_debt')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group d-none" id="real_estate">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="alone_ready" {{ old('order_result') == 'alone_ready' ? 'selected' : '' }}>
                    @lang('receipts.alone_ready')</option>
                <option value="mortgage" {{ old('order_result') == 'mortgage' ? 'selected' : '' }}>
                    @lang('receipts.mortgage')</option>
                <option value="incomplete_property"
                    {{ old('order_result') == 'incomplete_property' ? 'selected' : '' }}>
                    @lang('receipts.incomplete_property')</option>
                <option value="real_estate_supplement"
                    {{ old('order_result') == 'real_estate_supplement' ? 'selected' : '' }}>
                    @lang('receipts.real_estate_supplement')</option>
                <option value="buying_real_estate_debt"
                    {{ old('order_result') == 'buying_real_estate_debt' ? 'selected' : '' }}>
                    @lang('receipts.buying_real_estate_debt')</option>
                <option value="self_builds" {{ old('order_result') == 'self_builds' ? 'selected' : '' }}>
                    @lang('receipts.self_builds')</option>
                <option value="Land_loan" {{ old('order_result') == 'Land_loan' ? 'selected' : '' }}>
                    @lang('receipts.Land_loan')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group d-none" id="commercial">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="guarantee_financing"
                    {{ old('order_result') == 'guarantee_financing' ? 'selected' : '' }}>
                    @lang('receipts.guarantee_financing')</option>
                <option value="point_sale_financing"
                    {{ old('order_result') == 'point_sale_financing' ? 'selected' : '' }}>
                    @lang('receipts.point_sale_financing')</option>
                <option value="Real_estate_mortgage_financing"
                    {{ old('order_result') == 'Real_estate_mortgage_financing' ? 'selected' : '' }}>
                    @lang('receipts.Real_estate_mortgage_financing')</option>
                <option value="revenue_financing" {{ old('order_result') == 'revenue_financing' ? 'selected' : '' }}>
                    @lang('receipts.revenue_financing')</option>
                <option value="other" {{ old('order_result') == 'other' ? 'selected' : '' }}>
                    @lang('receipts.other')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group d-none" id="rental">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="cars" {{ old('order_result') == 'cars' ? 'selected' : '' }}>
                    @lang('receipts.cars')</option>
                <option value="car_mortgage" {{ old('order_result') == 'car_mortgage' ? 'selected' : '' }}>
                    @lang('receipts.car_mortgage')</option>
                <option value="other" {{ old('order_result') == 'other' ? 'selected' : '' }}>
                    @lang('receipts.other')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group d-none" id="product_description">
            <label>@lang('receipts.product_descriptions') </label>
            <select class="form-control" name="product_details" id='product_details'>
                <option disabled selected>@lang('receipts.product_descriptions')</option>
                <option value="customer_land" {{ old('product_details') == 'customer_land' ? 'selected' : '' }}>
                    @lang('receipts.customer_land')</option>
                <option value="fund_land" {{ old('product_details') == 'fund_land' ? 'selected' : '' }}>
                    @lang('receipts.fund_land')</option>
            </select>
            @error('product_details')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

@push('js')
    <script type="text/javascript">
        $('.order_type').on('change', function() {
            var form = $(this);
            var order_type = form.val();
            if (order_type == 'personal') {
                $('#personal').removeClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#commercial').addClass("d-none");
                $('#rental').addClass("d-none");
                $('#product_description').addClass("d-none");
            }
            if (order_type == 'commercial') {
                $('#commercial').removeClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#personal').addClass("d-none");
                $('#rental').addClass("d-none");
                $('#product_description').addClass("d-none");
            }
            if (order_type == 'rental') {
                $('#commercial').addClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#personal').addClass("d-none");
                $('#rental').removeClass("d-none");
                $('#product_description').addClass("d-none");
            }
            if (order_type == 'real_estate') {
                $('.support_status').on('change', function() {
                    var form = $(this);
                    var support_status = form.val();
                    if (support_status == 'supported') {
                        $('#commercial').addClass("d-none");
                        $('#real_estate_supported').removeClass("d-none");
                        $('#real_estate').addClass("d-none");
                        $('#personal').addClass("d-none");
                        $('#rental').addClass("d-none");
                        $('#product_description').addClass("d-none");
                    }
                    if (support_status == 'not_supported') {
                        $('#commercial').addClass("d-none");
                        $('#real_estate_supported').addClass("d-none");
                        $('#real_estate').removeClass("d-none");
                        $('#personal').addClass("d-none");
                        $('#rental').addClass("d-none");
                        $('#product_description').addClass("d-none");
                    }
                });
            }
        });
        $('#real_estate_supported').on('change', function() {
            var order_result = $(this).find('option:selected').attr('id');
            if (order_result == 'self_build') {
                $('#product_description').removeClass("d-none");
            } else {
                $('#product_description').addClass("d-none");
            }
        });
        $('.support_status').on('change', function() {
            var form = $(this);
            var support_status = form.val();
            $('.order_type').on('change', function() {
                var form = $(this);
                var order_type = form.val();
                if (order_type == 'personal') {
                    $('#personal').removeClass("d-none");
                    $('#real_estate_supported').addClass("d-none");
                    $('#real_estate').addClass("d-none");
                    $('#commercial').addClass("d-none");
                    $('#rental').addClass("d-none");
                }
                if (order_type == 'commercial') {
                    $('#commercial').removeClass("d-none");
                    $('#real_estate_supported').addClass("d-none");
                    $('#real_estate').addClass("d-none");
                    $('#personal').addClass("d-none");
                    $('#rental').addClass("d-none");
                }
                if (order_type == 'rental') {
                    $('#commercial').addClass("d-none");
                    $('#real_estate_supported').addClass("d-none");
                    $('#real_estate').addClass("d-none");
                    $('#personal').addClass("d-none");
                    $('#rental').removeClass("d-none");
                }
                if (order_type == 'real_estate') {
                    if (support_status == 'supported') {
                        $('#commercial').addClass("d-none");
                        $('#real_estate_supported').removeClass("d-none");
                        $('#real_estate').addClass("d-none");
                        $('#personal').addClass("d-none");
                        $('#rental').addClass("d-none");
                    }
                    if (support_status == 'not_supported') {
                        $('#commercial').addClass("d-none");
                        $('#real_estate_supported').addClass("d-none");
                        $('#real_estate').removeClass("d-none");
                        $('#personal').addClass("d-none");
                        $('#rental').addClass("d-none");
                    }
                }
            });
            $('#product_description').addClass("d-none");
        });
    </script>
@endpush
