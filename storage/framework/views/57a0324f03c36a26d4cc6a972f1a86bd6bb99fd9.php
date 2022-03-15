<?php if(count($land_rate) > 0): ?>

    <div class="col-12 form-group">
        <br>
        <h3>
            <?php echo app('translator')->get('receipts.land_rate_info'); ?>
        </h3>
        <hr>
    </div>
    <?php $__currentLoopData = $land_rate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="clone_land_rate">
            <div class="row">
                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.bank'); ?> </label>
                    <select class="form-control land_bank_id" choice_id="emp_rate_land_choice_id_0"
                        name="land_bank_ids[]" id='land_bank_id'>
                        <option disabled><?php echo app('translator')->get('receipts.bank'); ?></option>
                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($bank->id); ?>" <?php if($rate->land_bank_id == $bank->id): ?> selected <?php endif; ?>><?php echo e($bank->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>
                    <?php $__errorArgs = ['land_bank_id'];
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
                    <label><?php echo app('translator')->get('receipts.first_rate'); ?> </label>
                    <input type="text" name="land_first_rates[]" id="first_rate"
                        placeholder="<?php echo app('translator')->get('receipts.first_rate'); ?>" class="form-control"
                        value="<?php echo e(old('land_first_rates.0', $rate->first_rate)); ?>">
                    <?php $__errorArgs = ['first_rate'];
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
                    <label><?php echo app('translator')->get('receipts.second_rate'); ?> </label>
                    <input type="text" name="land_second_rates[]" id="second_rate"
                        placeholder="<?php echo app('translator')->get('receipts.second_rate'); ?>" class="form-control"
                        value="<?php echo e(old('land_second_rates.0', $rate->second_rate)); ?>">
                    <?php $__errorArgs = ['second_rate'];
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
                    <label><?php echo app('translator')->get('receipts.third_rate'); ?> </label>
                    <input type="text" name="land_third_rates[]" id="third_rate"
                        placeholder="<?php echo app('translator')->get('receipts.third_rate'); ?>" class="form-control"
                        value="<?php echo e(old('land_third_rates.0', $rate->third_rate)); ?>">
                    <?php $__errorArgs = ['third_rate'];
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
                    <label><?php echo app('translator')->get('receipts.emp_rate'); ?> </label>
                    <select class="form-control real_emp_rate_id" name="land_emp_rates[]"
                        id='emp_rate_land_choice_id_0'>
                        <option disabled selected><?php echo app('translator')->get('receipts.emp_rate'); ?></option>
                        <?php $__currentLoopData = $rate_employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($emp->id); ?>" <?php if($rate->emp_rate_id == $emp->id): ?> selected <?php endif; ?>><?php echo e($emp->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['real_emp_rate_id'];
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
                    <label><?php echo app('translator')->get('receipts.approved_rate'); ?> </label>
                    <input type="text" name="land_approved_rates[]" id="approved_rate"
                        placeholder="<?php echo app('translator')->get('receipts.approved_rate'); ?>" class="form-control"
                        value="<?php echo e(old('land_approved_rates.0', $rate->approved_rate)); ?>">
                    <?php $__errorArgs = ['approved_rate'];
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
                    <label><?php echo app('translator')->get('receipts.rate_notes'); ?> </label>
                    <input type="text" name="land_rate_notess[]" id="rate_notes"
                        placeholder="<?php echo app('translator')->get('receipts.rate_notes'); ?>" class="form-control"
                        value="<?php echo e(old('land_rate_notess.0', $rate->rate_notes)); ?>">
                    <?php $__errorArgs = ['rate_notes'];
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

                <input type="hidden" name="land_id[]" value="" class="land_id">

                <div class="col-12 form-group">

                    <a class="btn btn-light-success font-weight-bold btn-sm land_rate_clone text-center"
                        style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_real_rate'); ?> </a>
                    <a class="btn btn-light-danger font-weight-bold remove_land_rate_input mr-3" style="height: 35px"><i
                            class="fa fa-trash fa-sm p-0"></i></a>
                </div>
            </div>
            <div class="clone_land_rate_last">

            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/editComponents/land_rating.blade.php ENDPATH**/ ?>