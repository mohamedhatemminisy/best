<div class="col-12 form-group">
    <br>
    <h3>
        <?php echo app('translator')->get('receipts.commitment_info'); ?>
    </h3>
    <hr>
</div>
<div class="clone_commitment">
    <div class="row">

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.installment'); ?> </label>
            <input type="text" name="installments[]" id="installment" placeholder="<?php echo app('translator')->get('receipts.installment'); ?>"
                class="form-control" value="<?php echo e(old('installments.0')); ?>">
            <?php $__errorArgs = ['installment'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
            <select class="form-control" name="product_type_ids[]" id='product_type_id'>
                <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                <?php $__currentLoopData = $product_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($product->id); ?>"
                        <?php echo e(old('product_type_ids.0') == $product->id ? 'selected' : ''); ?>>
                        <?php echo e($product->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['product_type_id'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.sponser_id'); ?> </label>
            <select class="form-control" name="sponser_ids[]" id='sponser_id'>
                <option disabled selected><?php echo app('translator')->get('receipts.sponser_id'); ?></option>
                <?php $__currentLoopData = $sponsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($sponser->id); ?>" <?php echo e(old('sponser_id.0') == $sponser->id ? 'selected' : ''); ?>>
                        <?php echo e($sponser->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['sponser_id'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.payment_status_id'); ?> </label>
            <select class="form-control" name="payment_status_ids[]" id='payment_status_id'>
                <option disabled selected><?php echo app('translator')->get('receipts.payment_status_id'); ?></option>
                <?php $__currentLoopData = $Payment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($Payment->id); ?>"
                        <?php echo e(old('payment_status_ids.0') == $Payment->id ? 'selected' : ''); ?>>
                        <?php echo e($Payment->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['payment_status_id'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.early_repayment'); ?> </label>
            <input type="text" name="early_repayments[]" id="early_repayment"
                placeholder="<?php echo app('translator')->get('receipts.early_repayment'); ?>" class="form-control"
                value="<?php echo e(old('early_repayments.0')); ?>">
            <?php $__errorArgs = ['early_repayment'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.total'); ?> </label>
            <input type="text" name="commitment_totals[]" id="total" placeholder="<?php echo app('translator')->get('receipts.total'); ?>"
                class="form-control" value="<?php echo e(old('commitment_totals.0')); ?>">
            <?php $__errorArgs = ['total'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.commitment_start_date'); ?> </label>
            <input type="text" name="commitment_start_dates[]" id="commitment_start_date"
                placeholder="<?php echo app('translator')->get('receipts.commitment_start_date'); ?>" class="form-control disable-date"
                value="<?php echo e(old('commitment_start_dates.0')); ?>">
            <?php $__errorArgs = ['commitment_start_date'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.commitment_end_date'); ?> </label>
            <input type="text" name="commitment_end_dates[]" id="commitment_end_date"
                placeholder="<?php echo app('translator')->get('receipts.commitment_end_date'); ?>" class="form-control disable-date"
                value="<?php echo e(old('commitment_end_dates.0')); ?>">
            <?php $__errorArgs = ['commitment_end_date'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.remaining_installments_count'); ?> </label>
            <input type="text" name="remaining_installments_counts[]" id="remaining_installments_count"
                placeholder="<?php echo app('translator')->get('receipts.remaining_installments_count'); ?>" class="form-control"
                value="<?php echo e(old('remaining_installments_counts.0')); ?>">
            <?php $__errorArgs = ['remaining_installments_count'];
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

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.last_payment_date'); ?> </label>
            <input type="text" name="last_payment_dates[]" id="last_payment_date"
                placeholder="<?php echo app('translator')->get('receipts.last_payment_date'); ?>" class="form-control disable-date"
                value="<?php echo e(old('last_payment_dates.0')); ?>">
            <?php $__errorArgs = ['last_payment_date'];
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

        <div class="col-6 form-group">
            <label><?php echo app('translator')->get('receipts.commitment_notes'); ?> </label>
            <input type="text" name="commitment_notess[]" id="commitment_notes"
                placeholder="<?php echo app('translator')->get('receipts.commitment_notes'); ?>" class="form-control"
                value="<?php echo e(old('commitment_notess.0')); ?>">
            <?php $__errorArgs = ['commitment_notes'];
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

        <div class="col-12 form-group">

            <a class="btn btn-light-success font-weight-bold btn-sm commitment_clone text-center"
                style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_commitment'); ?> </a><br>
        </div>
    </div>
    <div class="clone_commitment_last">

    </div>
</div>

<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).on('click', '.commitment_clone', function() {
            var max_input_3 = 9;
            var content = `
            <iv class="new-incomee">
                <div class="row">
                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.installment'); ?> </label>
                        <input type="text" name="installments[]" id="installment"
                            placeholder="<?php echo app('translator')->get('receipts.installment'); ?>" class="form-control"
                            value="<?php echo e(old('installment')); ?>">
                        <?php $__errorArgs = ['installment'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.product_type_id'); ?> </label>
                        <select class="form-control" name="product_type_ids[]" id='product_type_id'>
                            <option disabled selected><?php echo app('translator')->get('receipts.product_type_id'); ?></option>
                            <?php $__currentLoopData = $product_description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($product->id); ?>" <?php echo e(old('product_type_ids.0') == $product->id ? 'selected' : ''); ?>>
                                    <?php echo e($product->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['product_type_id'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.sponser_id'); ?> </label>
                        <select class="form-control" name="sponser_ids[]" id='sponser_id'>
                            <option disabled selected><?php echo app('translator')->get('receipts.sponser_id'); ?></option>
                            <?php $__currentLoopData = $sponsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($sponser->id); ?>" <?php echo e(old('sponser') == $sponser->id ? 'selected' : ''); ?>>
                                    <?php echo e($sponser->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['sponser_id'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.payment_status_id'); ?> </label>
                        <select class="form-control" name="payment_status_ids[]" id='payment_status_id'>
                            <option disabled selected><?php echo app('translator')->get('receipts.payment_status_id'); ?></option>
                            <?php $__currentLoopData = $Payment_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($Payment->id); ?>" <?php echo e(old('Payment') == $Payment->id ? 'selected' : ''); ?>>
                                    <?php echo e($Payment->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['payment_status_id'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.early_repayment'); ?> </label>
                        <input type="text" name="early_repayments[]" id="early_repayment"
                            placeholder="<?php echo app('translator')->get('receipts.early_repayment'); ?>" class="form-control"
                            value="<?php echo e(old('early_repayment')); ?>">
                        <?php $__errorArgs = ['early_repayment'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.total'); ?> </label>
                        <input type="text" name="commitment_totals[]" id="total"
                            placeholder="<?php echo app('translator')->get('receipts.total'); ?>" class="form-control"
                            value="<?php echo e(old('total')); ?>">
                        <?php $__errorArgs = ['total'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.commitment_start_date'); ?> </label>
                        <input type="text" name="commitment_start_dates[]" id="commitment_start_date"
                            placeholder="<?php echo app('translator')->get('receipts.commitment_start_date'); ?>" class="form-control disable-date"
                            value="<?php echo e(old('commitment_start_date')); ?>">
                        <?php $__errorArgs = ['commitment_start_date'];
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


                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.commitment_end_date'); ?> </label>
                        <input type="text" name="commitment_end_dates[]" id="commitment_end_date"
                            placeholder="<?php echo app('translator')->get('receipts.commitment_end_date'); ?>" class="form-control disable-date"
                            value="<?php echo e(old('commitment_end_date')); ?>">
                        <?php $__errorArgs = ['commitment_end_date'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.remaining_installments_count'); ?> </label>
                        <input type="text" name="remaining_installments_counts[]" id="remaining_installments_count"
                            placeholder="<?php echo app('translator')->get('receipts.remaining_installments_count'); ?>" class="form-control"
                            value="<?php echo e(old('remaining_installments_count')); ?>">
                        <?php $__errorArgs = ['remaining_installments_count'];
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

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.last_payment_date'); ?> </label>
                        <input type="text" name="last_payment_dates[]" id="last_payment_date"
                            placeholder="<?php echo app('translator')->get('receipts.last_payment_date'); ?>" class="form-control disable-date"
                            value="<?php echo e(old('last_payment_date')); ?>">
                        <?php $__errorArgs = ['last_payment_date'];
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

                    <div class="col-6 form-group">
                        <label><?php echo app('translator')->get('receipts.commitment_notes'); ?> </label>
                        <input type="text" name="commitment_notess[]" id="commitment_notes" placeholder="<?php echo app('translator')->get('receipts.commitment_notes'); ?>" class="form-control"
                            value="<?php echo e(old('commitment_notes')); ?>">
                        <?php $__errorArgs = ['commitment_notes'];
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
             <div class="col-3 form-group">
                <a class="btn btn-light-success font-weight-bold btn-sm commitment_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_commitment'); ?> </a>
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
<?php $__env->stopPush(); ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/components/commitment.blade.php ENDPATH**/ ?>