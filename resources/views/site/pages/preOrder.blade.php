@extends('site.layouts.app')
@section('title', 'طلب مبدئي')
@section('content')

    @include('site.components.bredcrumb')

    <section class="contact contact-info">
        <div class="container">
            <div class="content">
                <div class="main-title text-center pt-3">
                    <h2>طلب مبدئي</h2>
                    <p>يمكنك تقديم الطلب من خلال ملئ بياناتك </p>
                </div>
                <div class="row     justify-content-center">
                    <div class="col-lg-10 p-0">
                        <div class="contact-form wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".2s">

                            <form id="ajaxForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group position-relative">
                                            <label for="">اسم العميل</label>
                                            <input class="form-control" type="text" placeholder="اسم العميل" name="name">
                                            <p class="text-danger" id="name-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group position-relative">
                                            <label for="">رقم جوال </label>
                                            <input class="form-control" type="text" placeholder="رقم جوال" name="phone">
                                            <p class="text-danger" id="phone-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">بنك العميل</label>
                                            <select class="form-control" name="bank" aria-invalid="false">
                                                @foreach ($banks as $bank)
                                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger" id="bank-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">الصافي </label>
                                            <input class="form-control" type="text" placeholder="الصافي" name="net">
                                            <p class="text-danger" id="net-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for=""> جهه العمل</label>
                                            <select class="form-control" name="employer" aria-invalid="false">
                                                @foreach ($employers as $employer)
                                                    <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger" id="employer-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">البنك المحول له الراتب </label>
                                            <select class="form-control" name="salary_bank" aria-invalid="false">
                                                @foreach ($banks as $bank)
                                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger" id="salary_bank-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-6" id="order_type">
                                        <div class="form-group">
                                            <label>@lang('receipts.order_type') </label>
                                            <select class="form-control order_type" name="order_type" id='order_type'>
                                                <option disabled selected>@lang('receipts.order_type')</option>
                                                <option value="personal"
                                                    {{ old('order_type') == 'personal' ? 'selected' : '' }}>
                                                    @lang('receipts.personal')</option>
                                                <option value="real_estate"
                                                    {{ old('order_type') == 'real_estate' ? 'selected' : '' }}>
                                                    @lang('receipts.real_estate')</option>
                                                <option value="commercial"
                                                    {{ old('order_type') == 'commercial' ? 'selected' : '' }}>
                                                    @lang('receipts.commercial')</option>
                                                <option value="rental"
                                                    {{ old('order_type') == 'rental' ? 'selected' : '' }}>
                                                    @lang('receipts.rental')</option>
                                            </select>
                                            <p class="text-danger" id="order_type-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 d-none" id="support_status">
                                        <div class="form-group">
                                            <label>@lang('receipts.support_status') </label>
                                            <select class="form-control support_status" name="support_status"
                                                id='support_status'>
                                                <option disabled selected>@lang('receipts.support_status')</option>
                                                <option value="supported"
                                                    {{ old('support_status') == 'supported' ? 'selected' : '' }}>
                                                    @lang('receipts.supported')</option>
                                                <option value="not_supported"
                                                    {{ old('support_status') == 'not_supported' ? 'selected' : '' }}>
                                                    @lang('receipts.not_supported')</option>
                                                <option value="former_beneficiary"
                                                    {{ old('support_status') == 'former_beneficiary' ? 'selected' : '' }}>
                                                    @lang('receipts.former_beneficiary')</option>
                                                <option value="second_beneficiary"
                                                    {{ old('support_status') == 'second_beneficiary' ? 'selected' : '' }}>
                                                    @lang('receipts.second_beneficiary')</option>
                                            </select>
                                            <p class="text-danger" id="support_status-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-6  d-none" id="personal">
                                        <div class="form-group">
                                            <label>@lang('receipts.product_type_id') </label>
                                            <select class="form-control" name="order_result" id='order_result'>
                                                <option value="new" {{ old('order_result') == 'new' ? 'selected' : '' }}>
                                                    @lang('receipts.new')</option>
                                                <option value="extra"
                                                    {{ old('order_result') == 'extra' ? 'selected' : '' }}>
                                                    @lang('receipts.extra')</option>
                                                <option value="complementary"
                                                    {{ old('order_result') == 'complementary' ? 'selected' : '' }}>
                                                    @lang('receipts.complementary')</option>
                                                <option value="buying_personal_debts"
                                                    {{ old('order_result') == 'buying_personal_debts' ? 'selected' : '' }}>
                                                    @lang('receipts.buying_personal_debts')</option>
                                            </select>
                                            <p class="text-danger" id="order_result-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-6  d-none" id="real_estate_supported">
                                        <div class="form-group">
                                            <label>@lang('receipts.product_type_id') </label>
                                            <select class="form-control" name="real_estate_supported" id='order_result'>
                                                <option disabled selected>@lang('receipts.product_type_id')</option>
                                                <option value="alone_ready"
                                                    {{ old('order_result') == 'alone_ready' ? 'selected' : '' }}
                                                    id="alone_ready">
                                                    @lang('receipts.alone_ready')</option>
                                                <option value="buying_on_map"
                                                    {{ old('order_result') == 'buying_on_map' ? 'selected' : '' }}
                                                    id="buying_on_map">
                                                    @lang('receipts.buying_on_map')</option>
                                                <option value="self_build"
                                                    {{ old('order_result') == 'self_build' ? 'selected' : '' }}
                                                    id="self_build">
                                                    @lang('receipts.self_build')</option>
                                                <option value="Land_loan"
                                                    {{ old('order_result') == 'Land_loan' ? 'selected' : '' }}
                                                    id="Land_loan">
                                                    @lang('receipts.Land_loan')</option>
                                                <option value="buying_real_estate_debt"
                                                    {{ old('order_result') == 'buying_real_estate_debt' ? 'selected' : '' }}
                                                    id="buying_real_estate_debt">
                                                    @lang('receipts.buying_real_estate_debt')</option>
                                            </select>
                                            <p class="text-danger" id="order_result-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-6 d-none" id="real_estate">
                                        <div class="form-group">
                                            <label>@lang('receipts.product_type_id') </label>
                                            <select class="form-control" name="order_result_other_result"
                                                id='order_result'>
                                                <option disabled selected>@lang('receipts.product_type_id')</option>
                                                <option value="alone_ready"
                                                    {{ old('order_result') == 'alone_ready' ? 'selected' : '' }}>
                                                    @lang('receipts.alone_ready')</option>
                                                <option value="mortgage"
                                                    {{ old('order_result') == 'mortgage' ? 'selected' : '' }}>
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
                                                <option value="self_builds"
                                                    {{ old('order_result') == 'self_builds' ? 'selected' : '' }}>
                                                    @lang('receipts.self_builds')</option>
                                                <option value="Land_loan"
                                                    {{ old('order_result') == 'Land_loan' ? 'selected' : '' }}>
                                                    @lang('receipts.Land_loan')</option>
                                            </select>
                                            <p class="text-danger" id="order_result-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-6 d-none" id="commercial">
                                        <div class="form-group">
                                            <label>@lang('receipts.product_type_id') </label>
                                            <select class="form-control" name="commercial" id='order_result'>
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
                                                <option value="revenue_financing"
                                                    {{ old('order_result') == 'revenue_financing' ? 'selected' : '' }}>
                                                    @lang('receipts.revenue_financing')</option>
                                                <option value="other"
                                                    {{ old('order_result') == 'other' ? 'selected' : '' }}>
                                                    @lang('receipts.other')</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 d-none" id="rental">
                                        <div class="form-group">
                                            <label>@lang('receipts.product_type_id') </label>
                                            <select class="form-control" name="rental" id='order_result'>
                                                <option disabled selected>@lang('receipts.product_type_id')</option>
                                                <option value="cars"
                                                    {{ old('order_result') == 'cars' ? 'selected' : '' }}>
                                                    @lang('receipts.cars')</option>
                                                <option value="car_mortgage"
                                                    {{ old('order_result') == 'car_mortgage' ? 'selected' : '' }}>
                                                    @lang('receipts.car_mortgage')</option>
                                                <option value="other"
                                                    {{ old('order_result') == 'other' ? 'selected' : '' }}>
                                                    @lang('receipts.other')</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-6 d-none" id="product_description">
                                        <div class="form-group">
                                            <label>@lang('receipts.product_descriptions') </label>
                                            <select class="form-control" name="product_details" id='product_details'>
                                                <option disabled selected>@lang('receipts.product_descriptions')</option>
                                                <option value="customer_land"
                                                    {{ old('product_details') == 'customer_land' ? 'selected' : '' }}>
                                                    @lang('receipts.customer_land')</option>
                                                <option value="fund_land"
                                                    {{ old('product_details') == 'fund_land' ? 'selected' : '' }}>
                                                    @lang('receipts.fund_land')</option>
                                            </select>
                                            <p class="text-danger" id="product_details-error"></p>

                                        </div>
                                    </div>


                                    @if (request()->get('code'))
                                        <input type="hidden" name="code" value="{{ request()->get('code') }}" />
                                    @else
                                        <input type="hidden" class="form-control" name="code" value="" />
                                    @endif

                                    <div class="contact-btn">
                                        <button class="btn" id="formBtn" type="submit">ارسال</button>
                                    </div>
                                </div>
                            </form>
                            <div id="success-msg" class="text-success hide">
                                <h4 class="text-center"> </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
    <script type="text/javascript">
        $('.order_type').on('change', function() {
            $("#order_result").val("");
            var form = $(this);
            var order_type = form.val();
            if (order_type == 'personal') {
                $('#personal').removeClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#commercial').addClass("d-none");
                $('#rental').addClass("d-none");
                $('#support_status').addClass("d-none");
                $('#product_description').addClass("d-none");
            }
            if (order_type == 'commercial') {
                $('#commercial').removeClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#personal').addClass("d-none");
                $('#rental').addClass("d-none");
                $('#support_status').addClass("d-none");
                $('#product_description').addClass("d-none");
            }
            if (order_type == 'rental') {
                $('#commercial').addClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#personal').addClass("d-none");
                $('#rental').removeClass("d-none");
                $('#support_status').addClass("d-none");
                $('#product_description').addClass("d-none");
            }
            if (order_type == 'real_estate') {
                $('#support_status').removeClass("d-none");
                $('#commercial').addClass("d-none");
                $('#real_estate_supported').addClass("d-none");
                $('#real_estate').addClass("d-none");
                $('#personal').addClass("d-none");
                $('#rental').addClass("d-none");
                $('#product_description').addClass("d-none");
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
                    if (support_status == 'not_supported' || support_status == "former_beneficiary" ||
                        support_status == "second_beneficiary") {
                        $('#commercial').addClass("d-none");
                        $('#real_estate_supported').addClass("d-none");
                        $('#real_estate').removeClass("d-none");
                        $('#personal').addClass("d-none");
                        $('#rental').addClass("d-none");
                        $('#product_description').addClass("d-none");
                    }
                    $('#product_description').addClass("d-none");

                });
            }
            $('#product_description').addClass("d-none");
        });
        $('#real_estate_supported').on('change', function() {
            var order_result = $(this).find('option:selected').attr('id');
            if (order_result == 'self_build') {
                $('#product_description').removeClass("d-none");
            } else {
                $('#product_description').addClass("d-none");
            }
        });
    </script>
@endpush


<script src="{{ asset('site/js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#formBtn").click(function(e) {

            e.preventDefault();
            var errors = [];


            // get all form value
            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var phone = $("input[name='phone']").val();
            var bank = $("select[name='bank']").val();
            var net = $("input[name='net']").val();
            var employer = $("select[name='employer']").val();
            var salary_bank = $("select[name='salary_bank']").val();
            var support_status = $("select[name='support_status']").val();
            var order_type = $("select[name='order_type']").val();
            var code = $("input[name='code']").val();

            if (order_type == 'personal') {
                var order_result = $("select[name='order_result']").val();
            } else if (order_type == 'commercial') {
                var order_result = $("select[name='commercial']").val();
            } else if (order_type == 'rental') {
                var order_result = $("select[name='rental']").val();
            } else if (order_type == 'real_estate') {
                if (support_status == 'supported') {
                    var order_result = $("select[name='real_estate_supported']").val();
                } else if (support_status == 'not_supported' || support_status ==
                    "former_beneficiary" ||
                    support_status == "second_beneficiary") {
                    var order_result = $("select[name='order_result_other_result']").val();
                }
            }
            var product_type_id = $("select[name='product_type_id']").val();
            var product_details = $("select[name='product_details']").val();

            $.ajax({
                url: "{{ route('orderRequest') }}",
                type: "POST",
                data: {
                    _token: _token,
                    name: name,
                    phone: phone,
                    bank: bank,
                    net: net,
                    employer: employer,
                    salary_bank: salary_bank,
                    support_status: support_status,
                    order_type: order_type,
                    code: code,
                    order_result: order_result,
                    product_type_id: product_type_id,
                    product_details: product_details,
                },
                success: function(data) {
                    console.log(data);
                    if (data.success) {
                        $('#success-msg').removeClass('hide');
                        $('#success-msg h4').text(data.success);
                        setInterval(function() {
                            $('#success-msg').addClass('hide');
                        }, 10000);
                        $("#ajaxForm")[0].reset();
                        $('#order_type').val("");
                        $('#support_status').addClass('d-none');
                        $('#order_result').addClass('d-none');
                        $('#product_details').addClass('d-none');
                        $('.text-danger').css('display', 'none');
                    }
                },
                error: function(error) {
                    errors = error.responseJSON.errors
                    if (errors)
                        console.log(errors); {
                        setTimeout(() => {
                            $('.text-danger').fadeOut('fast');
                        }, 2000);

                        if (errors['name']) {
                            $('#name-error').html(errors['name']).css('display', 'block')
                        }

                        if (errors['bank']) {
                            $('#bank-error').html(errors['bank']).css('display', 'block');
                        }

                        if (errors['phone']) {
                            $('#phone-error').html(errors['phone']).css('display', 'block');
                        }

                        if (errors['net']) {
                            $('#net-error').html(errors['net']).css('display',
                                'block');
                        }

                        if (errors['salary_bank']) {
                            $('#salary_bank-error').html(errors['salary_bank']).css(
                                'display', 'block');
                        }

                        if (errors['support_status']) {
                            $('#support_status-error').html(errors['support_status']).css(
                                'display',
                                'block');
                        }
                        if (errors['order_type']) {
                            $('#order_type-error').html(errors['order_type']).css('display',
                                'block');
                        }

                        if (errors['order_result']) {
                            $('#order_result-error').html(errors['order_result']).css(
                                'display', 'block');
                        }

                        if (errors['product_type_id']) {
                            $('#product_type_id-error').html(errors['product_type_id']).css(
                                'display',
                                'block');
                        }

                        if (errors['product_details']) {
                            $('#product_details-error').html(errors['product_details']).css(
                                'display',
                                'block');
                        }
                    }
                }
            });
        })
    });
</script>
