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
                <option value="supported" @if ($data->support_status == 'supported') selected  @endif>
                    @lang('receipts.supported')</option>
                <option value="not_supported" @if ($data->support_status == 'not_supported') selected  @endif>
                    @lang('receipts.not_supported')</option>
                <option value="former_beneficiary" @if ($data->support_status == 'former_beneficiary') selected  @endif>
                    @lang('receipts.former_beneficiary')</option>
                <option value="second_beneficiary" @if ($data->support_status == 'second_beneficiary') selected  @endif>
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
                <option value="personal" @if ($data->order_type == 'personal') selected  @endif>
                    @lang('receipts.personal')</option>
                <option value="real_estate" @if ($data->order_type == 'real_estate') selected  @endif>
                    @lang('receipts.real_estate')</option>
                <option value="commercial" @if ($data->order_type == 'commercial') selected  @endif>
                    @lang('receipts.commercial')</option>
                <option value="rental" @if ($data->order_type == 'rental') selected  @endif>
                    @lang('receipts.rental')</option>
            </select>
            @error('order_type')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-3 form-group {{$data->order_result == 'new' || $data->order_result == 'extra'
            || $data->order_result == 'complementary' || $data->order_result == 'buying_personal_debts' ? " ":"d-none" }}" id="personal">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="new" @if ($data->order_result == 'new') selected  @endif>
                    @lang('receipts.new')</option>
                <option value="extra" @if ($data->order_result == 'extra') selected  @endif>
                    @lang('receipts.extra')</option>
                <option value="complementary" @if ($data->order_result == 'complementary') selected  @endif>
                    @lang('receipts.complementary')</option>
                <option value="buying_personal_debts" @if ($data->order_result == 'buying_personal_debts') selected  @endif>
                    @lang('receipts.buying_personal_debts')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group  {{$data->order_result == 'alone_ready' || $data->order_result == 'buying_on_map'
            || $data->order_result == 'self_build' || $data->order_result == 'Land_loan' ? " ":"d-none" }}" id="real_estate_supported">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="alone_ready" @if ($data->order_result == 'alone_ready') selected  @endif id="alone_ready">
                    @lang('receipts.alone_ready')</option>
                <option value="buying_on_map" @if ($data->order_result == 'buying_on_map') selected  @endif id="buying_on_map">
                    @lang('receipts.buying_on_map')</option>
                <option value="self_build" @if ($data->order_result == 'self_build') selected  @endif id="self_build">
                    @lang('receipts.self_build')</option>
                <option value="Land_loan" @if ($data->order_result == 'Land_loan') selected  @endif id="Land_loan">
                    @lang('receipts.Land_loan')</option>
                <option value="buying_real_estate_debt" @if ($data->order_result == 'buying_real_estate_debt') selected  @endif id="buying_real_estate_debt">
                    @lang('receipts.buying_real_estate_debt')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-3 form-group {{$data->order_result == 'alone_ready' || $data->order_result == 'mortgage'|| $data->order_result == 'buying_real_estate_debt'
            || $data->order_result == 'incomplete_property' || $data->order_result == 'real_estate_supplement'|| $data->order_result == 'self_builds'
            || $data->order_result == 'Land_loan' ? " ":"d-none" }}" id="real_estate">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="alone_ready" @if ($data->order_result == 'alone_ready') selected  @endif>
                    @lang('receipts.alone_ready')</option>
                <option value="mortgage" @if ($data->order_result == 'mortgage') selected  @endif>
                    @lang('receipts.mortgage')</option>
                <option value="incomplete_property" @if ($data->order_result == 'incomplete_property') selected  @endif>
                    @lang('receipts.incomplete_property')</option>
                <option value="real_estate_supplement" @if ($data->order_result == 'real_estate_supplement') selected  @endif>
                    @lang('receipts.real_estate_supplement')</option>
                <option value="buying_real_estate_debt" @if ($data->order_result == 'buying_real_estate_debt') selected  @endif>
                    @lang('receipts.buying_real_estate_debt')</option>
                <option value="self_builds" @if ($data->order_result == 'self_builds') selected  @endif>
                    @lang('receipts.self_builds')</option>
                <option value="Land_loan" @if ($data->order_result == 'Land_loan') selected  @endif>
                    @lang('receipts.Land_loan')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-3 form-group {{$data->order_result == 'guarantee_financing' || $data->order_result == 'point_sale_financing'
        || $data->order_result == 'Real_estate_mortgage_financing' || $data->order_result == 'revenue_financing' ? " ":"d-none" }}" id="commercial">
            <label>@lang('receipts.product_type_id') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.product_type_id')</option>
                <option value="guarantee_financing" @if ($data->order_result == 'guarantee_financing') selected  @endif>
                    @lang('receipts.guarantee_financing')</option>
                <option value="point_sale_financing" @if ($data->order_result == 'point_sale_financing') selected  @endif>
                    @lang('receipts.point_sale_financing')</option>
                <option value="Real_estate_mortgage_financing" @if ($data->order_result == 'Real_estate_mortgage_financing') selected  @endif>
                    @lang('receipts.Real_estate_mortgage_financing')</option>
                <option value="revenue_financing" @if ($data->order_result == 'revenue_financing') selected  @endif>
                    @lang('receipts.revenue_financing')</option>
                <option value="other" @if ($data->order_result == 'other') selected  @endif>
                    @lang('receipts.other')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-3 form-group {{$data->order_result == 'cars' || $data->order_result == 'car_mortgage'|| $data->order_result == 'other' ? " ":"d-none" }}" id="rental">
            <label>@lang('receipts.rental') </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected>@lang('receipts.rental')</option>
                <option value="cars" @if ($data->order_result == 'cars') selected  @endif>
                    @lang('receipts.cars')</option>
                <option value="car_mortgage" @if ($data->order_result == 'car_mortgage') selected  @endif>
                    @lang('receipts.car_mortgage')</option>
                <option value="other" @if ($data->order_result == 'other') selected  @endif>
                    @lang('receipts.other')</option>
            </select>
            @error('order_result')
                <span class="help-block">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-3 form-group {{$data->product_details == 'customer_land' || $data->product_details == 'fund_land' ? " ":"d-none" }}" id="product_description">
            <label>@lang('receipts.product_descriptions') </label>
            <select class="form-control" name="product_details" id='product_details'>
                <option disabled selected>@lang('receipts.product_descriptions')</option>
                <option value="customer_land" @if ($data->product_details == 'customer_land') selected  @endif>
                    @lang('receipts.customer_land')</option>
                <option value="fund_land" @if ($data->product_details == 'fund_land') selected  @endif>
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
