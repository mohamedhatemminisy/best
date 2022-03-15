<?php if(count($data->income) > 0): ?>
    <div class="col-12 form-group">
        <h2>
            <?php echo app('translator')->get('receipts.financial_info'); ?>
        </h2>
        <h3>
            <?php echo app('translator')->get('receipts.income_info'); ?>
        </h3>
        <hr>
    </div>
    <?php $__currentLoopData = $data->income; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="clone_income">
            <div class="row">
                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.income_type_id'); ?> </label>
                    <select class="form-control" name="income_type_ids[]" id='income_type_id'>
                        <option disabled value="0"><?php echo app('translator')->get('receipts.income_type_id'); ?></option>
                        <?php $__currentLoopData = $income_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($income->id); ?>" <?php if($salary->income_type_id == $income->id): ?> selected <?php endif; ?>><?php echo e($income->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['income_type_id'];
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
                    <label><?php echo app('translator')->get('receipts.annual_income_value'); ?> </label>
                    <input type="text" name="annual_income_values[]" id="annual_income_value"
                        placeholder="<?php echo app('translator')->get('receipts.annual_income_value'); ?>" class="form-control"
                        value="<?php echo e(old('annual_income_values.0', $salary->annual_income_value)); ?>">
                    <?php $__errorArgs = ['annual_income_value'];
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
                <input type="hidden" name="income_id[]" value="<?php echo e($salary->id); ?>">

                <div class="col-6 form-group">
                    <label><?php echo app('translator')->get('receipts.income_statement_detail'); ?> </label>
                    <input type="text" name="income_statement_details[]" id="income_statement_detail"
                        placeholder="<?php echo app('translator')->get('receipts.income_statement_detail'); ?>" class="form-control"
                        value="<?php echo e(old('income_statement_details.0', $salary->income_statement_detail)); ?>">
                    <?php $__errorArgs = ['income_statement_detail'];
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
                    <a class="btn btn-light-success font-weight-bold btn-sm income_clone text-center"
                        style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_income'); ?> </a>
                    <a class="btn btn-light-danger font-weight-bold remove_income_input mr-3" style="height: 35px"><i
                            class="fa fa-trash fa-sm p-0"></i></a>

                </div>
            </div>
            <div class="clone_income_last">

            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).on('click', '.income_clone', function() {
            var max_input_3 = 9;
            var content = `
            <iv class="new-incomee">
                <div class="row">

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.income_type_id'); ?> </label>
                        <select class="form-control" name="income_type_ids[]" id='income_type_id'>
                            <option disabled selected value="0"><?php echo app('translator')->get('receipts.income_type_id'); ?></option>
                            <?php $__currentLoopData = $income_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($income->id); ?>" <?php echo e(old('income') == $income->id ? 'selected' : ''); ?>>
                                    <?php echo e($income->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['income_type_id'];
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
                        <label><?php echo app('translator')->get('receipts.annual_income_value'); ?> </label>
                        <input type="text" name="annual_income_values[]" id="annual_income_value"
                            placeholder="<?php echo app('translator')->get('receipts.annual_income_value'); ?>" class="form-control"
                            value="<?php echo e(old('annual_income_value')); ?>">
                        <?php $__errorArgs = ['annual_income_value'];
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
                        <label><?php echo app('translator')->get('receipts.income_statement_detail'); ?> </label>
                        <input type="text" name="income_statement_details[]" id="income_statement_detail"
                            placeholder="<?php echo app('translator')->get('receipts.income_statement_detail'); ?>" class="form-control"
                            value="<?php echo e(old('income_statement_detail')); ?>">
                        <?php $__errorArgs = ['income_statement_detail'];
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

                    <input type="hidden" name="income_id[]" value="">

                    <div class="col-3 form-group">

                <a class="btn btn-light-success font-weight-bold btn-sm income_clone text-center" style="height: 35px"><i
                        class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_income'); ?> </a>
                <a class="btn btn-light-danger font-weight-bold remove_income_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
              </div
            </div>
            </div>`;
            if (x < max_input_3) {
                $('.clone_income .clone_income_last').append(content);
                x++;
            }
        });

        $(document).on('click', '.remove_income_input', function() {
            $(this).parent().parent().remove();
            x--;
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/editComponents/income.blade.php ENDPATH**/ ?>