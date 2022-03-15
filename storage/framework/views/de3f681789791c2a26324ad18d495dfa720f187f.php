<div class="col-12 form-group">
    <br>
    <h3> <?php echo app('translator')->get('receipts.support_info'); ?></h3>
    <hr>
</div>

<div class="support_status">
    <div class="row">
        <div class="col-3 form-group" id="support_status">
            <label><?php echo app('translator')->get('receipts.support_status'); ?> </label>
            <select class="form-control support_status" name="support_status" id='support_status'>
                <option disabled selected><?php echo app('translator')->get('receipts.support_status'); ?></option>
                <option value="supported" <?php echo e(old('support_status') == 'supported' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.supported'); ?></option>
                <option value="not_supported" <?php echo e(old('support_status') == 'not_supported' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.not_supported'); ?></option>
                <option value="former_beneficiary"
                    <?php echo e(old('support_status') == 'former_beneficiary' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.former_beneficiary'); ?></option>
                <option value="second_beneficiary"
                    <?php echo e(old('support_status') == 'second_beneficiary' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.second_beneficiary'); ?></option>
            </select>
            <?php $__errorArgs = ['support_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div>

<div class="col-12 form-group">
    <br>
    <h3> <?php echo app('translator')->get('receipts.order_type'); ?></h3>
    <hr>
</div>

<div class="order_type">
    <div class="row">
        <div class="col-3 form-group" id="order_type">
            <label><?php echo app('translator')->get('receipts.order_type'); ?> </label>
            <select class="form-control order_type" name="order_type" id='order_type'>
                <option disabled selected><?php echo app('translator')->get('receipts.order_type'); ?></option>
                <option value="personal" <?php echo e(old('order_type') == 'personal' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.personal'); ?></option>
                <option value="real_estate" <?php echo e(old('order_type') == 'real_estate' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.real_estate'); ?></option>
                <option value="commercial" <?php echo e(old('order_type') == 'commercial' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.commercial'); ?></option>
                <option value="rental" <?php echo e(old('order_type') == 'rental' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.rental'); ?></option>
            </select>
            <?php $__errorArgs = ['order_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="col-3 form-group d-none" id="personal">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                <option value="new" <?php echo e(old('order_result') == 'new' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.new'); ?></option>
                <option value="extra" <?php echo e(old('order_result') == 'extra' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.extra'); ?></option>
                <option value="complementary" <?php echo e(old('order_result') == 'complementary' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.complementary'); ?></option>
                <option value="buying_personal_debts"
                    <?php echo e(old('order_result') == 'buying_personal_debts' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.buying_personal_debts'); ?></option>
            </select>
            <?php $__errorArgs = ['order_result'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group d-none" id="real_estate_supported">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                <option value="alone_ready" <?php echo e(old('order_result') == 'alone_ready' ? 'selected' : ''); ?>

                    id="alone_ready">
                    <?php echo app('translator')->get('receipts.alone_ready'); ?></option>
                <option value="buying_on_map" <?php echo e(old('order_result') == 'buying_on_map' ? 'selected' : ''); ?>

                    id="buying_on_map">
                    <?php echo app('translator')->get('receipts.buying_on_map'); ?></option>
                <option value="self_build" <?php echo e(old('order_result') == 'self_build' ? 'selected' : ''); ?>

                    id="self_build">
                    <?php echo app('translator')->get('receipts.self_build'); ?></option>
                <option value="Land_loan" <?php echo e(old('order_result') == 'Land_loan' ? 'selected' : ''); ?> id="Land_loan">
                    <?php echo app('translator')->get('receipts.Land_loan'); ?></option>
                <option value="buying_real_estate_debt"
                    <?php echo e(old('order_result') == 'buying_real_estate_debt' ? 'selected' : ''); ?>

                    id="buying_real_estate_debt">
                    <?php echo app('translator')->get('receipts.buying_real_estate_debt'); ?></option>
            </select>
            <?php $__errorArgs = ['order_result'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group d-none" id="real_estate">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                <option value="alone_ready" <?php echo e(old('order_result') == 'alone_ready' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.alone_ready'); ?></option>
                <option value="mortgage" <?php echo e(old('order_result') == 'mortgage' ? 'selected' : ''); ?>>
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
                <option value="self_builds" <?php echo e(old('order_result') == 'self_builds' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.self_builds'); ?></option>
                <option value="Land_loan" <?php echo e(old('order_result') == 'Land_loan' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.Land_loan'); ?></option>
            </select>
            <?php $__errorArgs = ['order_result'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group d-none" id="commercial">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
            <select class="form-control" name="order_result" id='order_result'>
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
                <option value="revenue_financing" <?php echo e(old('order_result') == 'revenue_financing' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.revenue_financing'); ?></option>
                <option value="other" <?php echo e(old('order_result') == 'other' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.other'); ?></option>
            </select>
            <?php $__errorArgs = ['order_result'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group d-none" id="rental">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
            <select class="form-control" name="order_result" id='order_result'>
                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                <option value="cars" <?php echo e(old('order_result') == 'cars' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.cars'); ?></option>
                <option value="car_mortgage" <?php echo e(old('order_result') == 'car_mortgage' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.car_mortgage'); ?></option>
                <option value="other" <?php echo e(old('order_result') == 'other' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.other'); ?></option>
            </select>
            <?php $__errorArgs = ['order_result'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-3 form-group d-none" id="product_description">
            <label><?php echo app('translator')->get('receipts.product_descriptions'); ?> </label>
            <select class="form-control" name="product_details" id='product_details'>
                <option disabled selected><?php echo app('translator')->get('receipts.product_descriptions'); ?></option>
                <option value="customer_land" <?php echo e(old('product_details') == 'customer_land' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.customer_land'); ?></option>
                <option value="fund_land" <?php echo e(old('product_details') == 'fund_land' ? 'selected' : ''); ?>>
                    <?php echo app('translator')->get('receipts.fund_land'); ?></option>
            </select>
            <?php $__errorArgs = ['product_details'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="help-block">
                    <strong><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
</div>

<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/components/support_order.blade.php ENDPATH**/ ?>