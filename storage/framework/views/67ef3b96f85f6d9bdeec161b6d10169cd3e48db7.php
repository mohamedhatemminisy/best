<?php $__env->startSection('title', 'طلب مبدئي'); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('site.components.bredcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                <?php echo csrf_field(); ?>
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
                                                <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($bank->id); ?>"><?php echo e($bank->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                <?php $__currentLoopData = $employers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($employer->id); ?>"><?php echo e($employer->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <p class="text-danger" id="employer-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">البنك المحول له الراتب </label>
                                            <select class="form-control" name="salary_bank" aria-invalid="false">
                                                <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($bank->id); ?>"><?php echo e($bank->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <p class="text-danger" id="salary_bank-error"></p>
                                        </div>
                                    </div>

                                    <div class="col-6" id="order_type">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.order_type'); ?> </label>
                                            <select class="form-control order_type" name="order_type" id='order_type'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.order_type'); ?></option>
                                                <option value="personal"
                                                    <?php echo e(old('order_type') == 'personal' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.personal'); ?></option>
                                                <option value="real_estate"
                                                    <?php echo e(old('order_type') == 'real_estate' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.real_estate'); ?></option>
                                                <option value="commercial"
                                                    <?php echo e(old('order_type') == 'commercial' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.commercial'); ?></option>
                                                <option value="rental"
                                                    <?php echo e(old('order_type') == 'rental' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.rental'); ?></option>
                                            </select>
                                            <p class="text-danger" id="order_type-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 d-none" id="support_status">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.support_status'); ?> </label>
                                            <select class="form-control support_status" name="support_status"
                                                id='support_status'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.support_status'); ?></option>
                                                <option value="supported"
                                                    <?php echo e(old('support_status') == 'supported' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.supported'); ?></option>
                                                <option value="not_supported"
                                                    <?php echo e(old('support_status') == 'not_supported' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.not_supported'); ?></option>
                                                <option value="former_beneficiary"
                                                    <?php echo e(old('support_status') == 'former_beneficiary' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.former_beneficiary'); ?></option>
                                                <option value="second_beneficiary"
                                                    <?php echo e(old('support_status') == 'second_beneficiary' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.second_beneficiary'); ?></option>
                                            </select>
                                            <p class="text-danger" id="support_status-error"></p>
                                        </div>
                                    </div>
                                    <div class="col-6  d-none" id="personal">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
                                            <select class="form-control" name="order_result" id='order_result'>
                                                <option value="new" <?php echo e(old('order_result') == 'new' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.new'); ?></option>
                                                <option value="extra"
                                                    <?php echo e(old('order_result') == 'extra' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.extra'); ?></option>
                                                <option value="complementary"
                                                    <?php echo e(old('order_result') == 'complementary' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.complementary'); ?></option>
                                                <option value="buying_personal_debts"
                                                    <?php echo e(old('order_result') == 'buying_personal_debts' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.buying_personal_debts'); ?></option>
                                            </select>
                                            <p class="text-danger" id="order_result-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-6  d-none" id="real_estate_supported">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
                                            <select class="form-control" name="real_estate_supported" id='order_result'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                                                <option value="alone_ready"
                                                    <?php echo e(old('order_result') == 'alone_ready' ? 'selected' : ''); ?>

                                                    id="alone_ready">
                                                    <?php echo app('translator')->get('receipts.alone_ready'); ?></option>
                                                <option value="buying_on_map"
                                                    <?php echo e(old('order_result') == 'buying_on_map' ? 'selected' : ''); ?>

                                                    id="buying_on_map">
                                                    <?php echo app('translator')->get('receipts.buying_on_map'); ?></option>
                                                <option value="self_build"
                                                    <?php echo e(old('order_result') == 'self_build' ? 'selected' : ''); ?>

                                                    id="self_build">
                                                    <?php echo app('translator')->get('receipts.self_build'); ?></option>
                                                <option value="Land_loan"
                                                    <?php echo e(old('order_result') == 'Land_loan' ? 'selected' : ''); ?>

                                                    id="Land_loan">
                                                    <?php echo app('translator')->get('receipts.Land_loan'); ?></option>
                                                <option value="buying_real_estate_debt"
                                                    <?php echo e(old('order_result') == 'buying_real_estate_debt' ? 'selected' : ''); ?>

                                                    id="buying_real_estate_debt">
                                                    <?php echo app('translator')->get('receipts.buying_real_estate_debt'); ?></option>
                                            </select>
                                            <p class="text-danger" id="order_result-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-6 d-none" id="real_estate">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
                                            <select class="form-control" name="order_result_other_result"
                                                id='order_result'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                                                <option value="alone_ready"
                                                    <?php echo e(old('order_result') == 'alone_ready' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.alone_ready'); ?></option>
                                                <option value="mortgage"
                                                    <?php echo e(old('order_result') == 'mortgage' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.mortgage'); ?></option>
                                                <option value="incomplete_property"
                                                    <?php echo e(old('order_result') == 'incomplete_property' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.incomplete_property'); ?></option>
                                                <option value="real_estate_supplement"
                                                    <?php echo e(old('order_result') == 'real_estate_supplement' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.real_estate_supplement'); ?></option>
                                                <option value="buying_real_estate_debt"
                                                    <?php echo e(old('order_result') == 'buying_real_estate_debt' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.buying_real_estate_debt'); ?></option>
                                                <option value="self_builds"
                                                    <?php echo e(old('order_result') == 'self_builds' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.self_builds'); ?></option>
                                                <option value="Land_loan"
                                                    <?php echo e(old('order_result') == 'Land_loan' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.Land_loan'); ?></option>
                                            </select>
                                            <p class="text-danger" id="order_result-error"></p>

                                        </div>
                                    </div>

                                    <div class="col-6 d-none" id="commercial">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
                                            <select class="form-control" name="commercial" id='order_result'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                                                <option value="guarantee_financing"
                                                    <?php echo e(old('order_result') == 'guarantee_financing' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.guarantee_financing'); ?></option>
                                                <option value="point_sale_financing"
                                                    <?php echo e(old('order_result') == 'point_sale_financing' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.point_sale_financing'); ?></option>
                                                <option value="Real_estate_mortgage_financing"
                                                    <?php echo e(old('order_result') == 'Real_estate_mortgage_financing' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.Real_estate_mortgage_financing'); ?></option>
                                                <option value="revenue_financing"
                                                    <?php echo e(old('order_result') == 'revenue_financing' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.revenue_financing'); ?></option>
                                                <option value="other"
                                                    <?php echo e(old('order_result') == 'other' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.other'); ?></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6 d-none" id="rental">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
                                            <select class="form-control" name="rental" id='order_result'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                                                <option value="cars"
                                                    <?php echo e(old('order_result') == 'cars' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.cars'); ?></option>
                                                <option value="car_mortgage"
                                                    <?php echo e(old('order_result') == 'car_mortgage' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.car_mortgage'); ?></option>
                                                <option value="other"
                                                    <?php echo e(old('order_result') == 'other' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.other'); ?></option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-6 d-none" id="product_description">
                                        <div class="form-group">
                                            <label><?php echo app('translator')->get('receipts.product_descriptions'); ?> </label>
                                            <select class="form-control" name="product_details" id='product_details'>
                                                <option disabled selected><?php echo app('translator')->get('receipts.product_descriptions'); ?></option>
                                                <option value="customer_land"
                                                    <?php echo e(old('product_details') == 'customer_land' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.customer_land'); ?></option>
                                                <option value="fund_land"
                                                    <?php echo e(old('product_details') == 'fund_land' ? 'selected' : ''); ?>>
                                                    <?php echo app('translator')->get('receipts.fund_land'); ?></option>
                                            </select>
                                            <p class="text-danger" id="product_details-error"></p>

                                        </div>
                                    </div>


                                    <?php if(request()->get('code')): ?>
                                        <input type="hidden" name="code" value="<?php echo e(request()->get('code')); ?>" />
                                    <?php else: ?>
                                        <input type="hidden" class="form-control" name="code" value="" />
                                    <?php endif; ?>

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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?>


<script src="<?php echo e(asset('site/js/jquery-3.6.0.min.js')); ?>"></script>
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
                url: "<?php echo e(route('orderRequest')); ?>",
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

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/site/pages/preOrder.blade.php ENDPATH**/ ?>