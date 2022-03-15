<div class="col-12 form-group">
    <h2>
        <?php echo app('translator')->get('receipts.financial_info'); ?>
    </h2>
    <h3>
        <?php echo app('translator')->get('receipts.salary_info'); ?>
    </h3>
    <hr>
</div>
<?php if(count($data->salary) > 0): ?>

    <?php $__currentLoopData = $data->salary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row clon_salary">

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.basic_salary'); ?> </label>
                <input type="text" name="salary[]" id="basic_salary" placeholder="<?php echo app('translator')->get('receipts.basic_salary'); ?>"
                    class="form-control" value="<?php echo e(old('salary.0', $salary->basic_salary)); ?>">
                <?php $__errorArgs = ['basic_salary'];
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
                <label><?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?> </label>
                <input type="text" name="Allowances_without[]" id="Allowances_without_housing_allowance"
                    placeholder="<?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?>" class="form-control"
                    value="<?php echo e(old('Allowances_without.0', $salary->Allowances_without_housing_allowance)); ?>">
                <?php $__errorArgs = ['Allowances_without_housing_allowance'];
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
                <label><?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?> </label>
                <input type="text" name="Monthly_allowance[]" id="Monthly_housing_allowance"
                    placeholder="<?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?>" class="form-control"
                    value="<?php echo e(old('Monthly_allowance.0', $salary->Monthly_housing_allowance)); ?>">
                <?php $__errorArgs = ['Monthly_housing_allowance'];
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
                <input type="text" name="totals[]" id="total" placeholder="<?php echo app('translator')->get('receipts.total'); ?>"
                    class="form-control" value="<?php echo e(old('totals.0', $salary->total)); ?>">
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
                <label><?php echo app('translator')->get('receipts.retirement_discount'); ?> </label>
                <input type="text" name="retirement[]" id="retirement_discount"
                    placeholder="<?php echo app('translator')->get('receipts.retirement_discount'); ?>" class="form-control"
                    value="<?php echo e(old('retirement.0', $salary->retirement_discount)); ?>">
                <?php $__errorArgs = ['retirement_discount'];
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
                <label><?php echo app('translator')->get('receipts.other_discounts'); ?> </label>
                <input type="text" name="other_discount[]" id="other_discounts"
                    placeholder="<?php echo app('translator')->get('receipts.other_discounts'); ?>" class="form-control"
                    value="<?php echo e(old('other_discount.0', $salary->other_discounts)); ?>">
                <?php $__errorArgs = ['other_discounts'];
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
                <label><?php echo app('translator')->get('receipts.net'); ?> </label>
                <input type="text" name="nets[]" id="net" placeholder="<?php echo app('translator')->get('receipts.net'); ?>" class="form-control"
                    value="<?php echo e(old('nets.0', $salary->net)); ?>">
                <?php $__errorArgs = ['net'];
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
                <label><?php echo app('translator')->get('receipts.approved_salary'); ?> </label>
                <input type="text" name="approved_salarys[]" id="approved_salary"
                    placeholder="<?php echo app('translator')->get('receipts.approved_salary'); ?>" class="form-control"
                    value="<?php echo e(old('approved_salarys.0', $salary->approved_salary)); ?>">
                <?php $__errorArgs = ['approved_salary'];
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
                <label><?php echo app('translator')->get('receipts.business_sector_id'); ?> </label>
                <select class="form-control business_sector_id" choice_id="choice_id_0" name="business_sector_ids[]"
                    id='business_sector_id'>
                    <option disabled selected><?php echo app('translator')->get('receipts.business_sector_id'); ?></option>
                    <?php $__currentLoopData = $business_sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($sector->id); ?>" <?php if($salary->business_sector_id == $sector->id): ?> selected <?php endif; ?>><?php echo e($sector->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['business_sector_id'];
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
                <label><?php echo app('translator')->get('receipts.employer_id'); ?> </label>
                <select class="form-control employer_id" name="employer_ids[]" id="choice_id_0">
                    <option disabled selected><?php echo app('translator')->get('receipts.employer_id'); ?></option>
                    <?php $__currentLoopData = $employers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employer->id); ?>" <?php if($salary->employer_id == $employer->id): ?> selected <?php endif; ?>><?php echo e($employer->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['employer_id'];
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
                <label><?php echo app('translator')->get('receipts.job_title'); ?> </label>
                <input type="text" name="job_titles[]" id="job_title" placeholder="<?php echo app('translator')->get('receipts.job_title'); ?>"
                    class="form-control" value="<?php echo e(old('job_titles.0', $salary->job_title)); ?>">
                <?php $__errorArgs = ['job_title'];
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
                <label><?php echo app('translator')->get('receipts.hiring_date'); ?> </label>
                <input type="text" name="hiring_dates[]" id="hiring_date" placeholder="<?php echo app('translator')->get('receipts.hiring_date'); ?>"
                    class="form-control disable-date" value="<?php echo e(old('hiring_dates.0', $salary->hiring_date)); ?>">
                <?php $__errorArgs = ['hiring_date'];
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
                <label><?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?> </label>
                <input type="text" name="Remaining_period_of_retirements[]" id="Remaining_period_of_retirement"
                    placeholder="<?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?>" class="form-control"
                    value="<?php echo e(old('Remaining_period_of_retirements.0', $salary->Remaining_period_of_retirement)); ?>">
                <?php $__errorArgs = ['Remaining_period_of_retirement'];
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
                <label><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?> </label>
                <select class="form-control" name="bank_salary_transferreds[]" id='bank_salary_transferred'>
                    <option disabled><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?></option>
                    <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bank->id); ?>" <?php if($salary->bank_salary_transferred == $bank->id): ?> selected <?php endif; ?>><?php echo e($bank->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['bank_salary_transferred'];
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
                <label><?php echo app('translator')->get('receipts.salary_note'); ?> </label>
                <textarea name="salary_notes[]" class="form-control" type="text" rows="2" cols="2"
                    placeholder="<?php echo app('translator')->get('receipts.salary_note'); ?>">
            <?php echo e(old('salary_notes.0', $salary->salary_note)); ?> </textarea>
                <?php $__errorArgs = ['salary_note'];
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
            <input type="hidden" name="salary_id[]" value="<?php echo e($salary->id); ?>">
            <div class="col-12 form-group">
                <a class="btn btn-light-success font-weight-bold btn-sm related_link text-center"
                    style="height: 35px"><i class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_salary'); ?> </a>
                <a class="btn btn-light-danger font-weight-bold remove_salary_input mr-3" style="height: 35px"><i
                        class="fa fa-trash fa-sm p-0"></i></a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <div class="row clon_salary">
        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.basic_salary'); ?> </label>
            <input type="text" name="salary[]" id="basic_salary" placeholder="<?php echo app('translator')->get('receipts.basic_salary'); ?>"
                class="form-control" value="<?php echo e(old('salary.0')); ?>">
            <?php $__errorArgs = ['basic_salary'];
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
            <label><?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?> </label>
            <input type="text" name="Allowances_without[]" id="Allowances_without_housing_allowance"
                placeholder="<?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?>" class="form-control"
                value="<?php echo e(old('Allowances_without.0')); ?>">
            <?php $__errorArgs = ['Allowances_without_housing_allowance'];
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
            <label><?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?> </label>
            <input type="text" name="Monthly_allowance[]" id="Monthly_housing_allowance"
                placeholder="<?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?>" class="form-control"
                value="<?php echo e(old('Monthly_allowance.0')); ?>">
            <?php $__errorArgs = ['Monthly_housing_allowance'];
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
            <input type="text" name="totals[]" id="total" placeholder="<?php echo app('translator')->get('receipts.total'); ?>" class="form-control"
                value="<?php echo e(old('totals.0')); ?>">
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
            <label><?php echo app('translator')->get('receipts.retirement_discount'); ?> </label>
            <input type="text" name="retirement[]" id="retirement_discount"
                placeholder="<?php echo app('translator')->get('receipts.retirement_discount'); ?>" class="form-control"
                value="<?php echo e(old('retirement.0')); ?>">
            <?php $__errorArgs = ['retirement_discount'];
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
            <label><?php echo app('translator')->get('receipts.other_discounts'); ?> </label>
            <input type="text" name="other_discount[]" id="other_discounts"
                placeholder="<?php echo app('translator')->get('receipts.other_discounts'); ?>" class="form-control"
                value="<?php echo e(old('other_discount.0')); ?>">
            <?php $__errorArgs = ['other_discounts'];
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
            <label><?php echo app('translator')->get('receipts.net'); ?> </label>
            <input type="text" name="nets[]" id="net" placeholder="<?php echo app('translator')->get('receipts.net'); ?>" class="form-control"
                value="<?php echo e(old('nets.0')); ?>">
            <?php $__errorArgs = ['net'];
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
            <label><?php echo app('translator')->get('receipts.approved_salary'); ?> </label>
            <input type="text" name="approved_salarys[]" id="approved_salary"
                placeholder="<?php echo app('translator')->get('receipts.approved_salary'); ?>" class="form-control"
                value="<?php echo e(old('approved_salarys.0')); ?>">
            <?php $__errorArgs = ['approved_salary'];
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
            <label><?php echo app('translator')->get('receipts.business_sector_id'); ?> </label>
            <select class="form-control business_sector_id" choice_id="choice_id_0" name="business_sector_ids[]"
                id='business_sector_id'>
                <option disabled selected><?php echo app('translator')->get('receipts.business_sector_id'); ?></option>
                <?php $__currentLoopData = $business_sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($sector->id); ?>"
                        <?php echo e(old('business_sector_ids') == $sector->id ? 'selected' : ''); ?>>
                        <?php echo e($sector->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['business_sector_id'];
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
            <label><?php echo app('translator')->get('receipts.employer_id'); ?> </label>
            <select class="form-control employer_id" name="employer_ids[]" id="choice_id_0">
                <option disabled selected><?php echo app('translator')->get('receipts.employer_id'); ?></option>
            </select>
            <?php $__errorArgs = ['employer_id'];
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
            <label><?php echo app('translator')->get('receipts.job_title'); ?> </label>
            <input type="text" name="job_titles[]" id="job_title" placeholder="<?php echo app('translator')->get('receipts.job_title'); ?>"
                class="form-control" value="<?php echo e(old('job_titles.0')); ?>">
            <?php $__errorArgs = ['job_title'];
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
            <label><?php echo app('translator')->get('receipts.hiring_date'); ?> </label>
            <input type="text" name="hiring_dates[]" id="hiring_date" placeholder="<?php echo app('translator')->get('receipts.hiring_date'); ?>"
                class="form-control disable-date" value="<?php echo e(old('hiring_dates.0')); ?>">
            <?php $__errorArgs = ['hiring_date'];
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
            <label><?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?> </label>
            <input type="text" name="Remaining_period_of_retirements[]" id="Remaining_period_of_retirement"
                placeholder="<?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?>" class="form-control"
                value="<?php echo e(old('Remaining_period_of_retirements.0')); ?>">
            <?php $__errorArgs = ['Remaining_period_of_retirement'];
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
            <label><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?> </label>
            <select class="form-control" name="bank_salary_transferreds[]" id='bank_salary_transferred'>
                <option disabled selected><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?></option>
                <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($bank->id); ?>" <?php echo e(old('bank') == $bank->id ? 'selected' : ''); ?>>
                        <?php echo e($bank->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['bank_salary_transferred'];
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
            <label><?php echo app('translator')->get('receipts.salary_note'); ?> </label>
            <textarea name="salary_notes[]" class="form-control" type="text" rows="2" cols="2"
                placeholder="<?php echo app('translator')->get('receipts.salary_note'); ?>"> <?php echo e(old('salary_notes.0')); ?> </textarea>
            <?php $__errorArgs = ['salary_note'];
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
        <input type="hidden" name="salary_id[]" value="<?php echo e($data->id); ?>">
        <div class="col-12 form-group">

            <a class="btn btn-light-success font-weight-bold btn-sm related_link text-center" style="height: 35px"><i
                    class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_salary'); ?> </a>
            <a class="btn btn-light-danger font-weight-bold remove_salary_input mr-3" style="height: 35px"><i
                    class="fa fa-trash fa-sm p-0"></i></a>

        </div>
    </div>
<?php endif; ?>
<?php $__env->startPush('js'); ?>

    <script type="text/javascript">
        $(document).ready(function() {
            var x = 0;
            const MAX_INPUT = 9;
            $(document).on('click', '.related_link', function() {

                let content = `
            <div class="new-class">
            <div class="row">
                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.basic_salary'); ?> </label>
                    <input type="text" name="salary[]"  id="basic_salary" placeholder="<?php echo app('translator')->get('receipts.basic_salary'); ?>"
                        class="form-control" value="<?php echo e(old('basic_salary')); ?>">
                    <?php $__errorArgs = ['basic_salary'];
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
                    <label><?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?> </label>
                    <input type="text" name="Allowances_without[]" id="Allowances_without_housing_allowance"
                        placeholder="<?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?>" class="form-control"
                        value="<?php echo e(old('Allowances_without_housing_allowance')); ?>">
                    <?php $__errorArgs = ['Allowances_without_housing_allowance'];
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
                    <label><?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?> </label>
                    <input type="text" name="Monthly_allowance[]" id="Monthly_housing_allowance"
                        placeholder="<?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?>" class="form-control"
                        value="<?php echo e(old('Monthly_housing_allowance')); ?>">
                    <?php $__errorArgs = ['Monthly_housing_allowance'];
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
                    <input type="text" name="totals[]" id="total" placeholder="<?php echo app('translator')->get('receipts.total'); ?>" class="form-control"
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
                    <label><?php echo app('translator')->get('receipts.retirement_discount'); ?> </label>
                    <input type="text" name="retirement[]" id="retirement_discount"
                        placeholder="<?php echo app('translator')->get('receipts.retirement_discount'); ?>" class="form-control"
                        value="<?php echo e(old('retirement_discount')); ?>">
                    <?php $__errorArgs = ['retirement_discount'];
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
                    <label><?php echo app('translator')->get('receipts.other_discounts'); ?> </label>
                    <input type="text" name="other_discount[]" id="other_discounts" placeholder="<?php echo app('translator')->get('receipts.other_discounts'); ?>"
                        class="form-control" value="<?php echo e(old('other_discounts')); ?>">
                    <?php $__errorArgs = ['other_discounts'];
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
                    <label><?php echo app('translator')->get('receipts.net'); ?> </label>
                    <input type="text" name="nets[]" id="net" placeholder="<?php echo app('translator')->get('receipts.net'); ?>" class="form-control"
                        value="<?php echo e(old('net')); ?>">
                    <?php $__errorArgs = ['net'];
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
                    <label><?php echo app('translator')->get('receipts.approved_salary'); ?> </label>
                    <input type="text" name="approved_salarys[]" id="approved_salary" placeholder="<?php echo app('translator')->get('receipts.approved_salary'); ?>"
                        class="form-control" value="<?php echo e(old('approved_salary')); ?>">
                    <?php $__errorArgs = ['approved_salary'];
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
                    <label><?php echo app('translator')->get('receipts.business_sector_id'); ?> </label>
                    <select class="form-control business_sector_id" choice_id="choice_id_${x+1}" name="business_sector_ids[]" id='business_sector_id_${x+1}'>
                        <option disabled selected><?php echo app('translator')->get('receipts.business_sector_id'); ?></option>
                        <?php $__currentLoopData = $business_sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sector->id); ?>" <?php echo e(old('sector') == $sector->id ? 'selected' : ''); ?>>
                                <?php echo e($sector->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['business_sector_id'];
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
                    <label><?php echo app('translator')->get('receipts.employer_id'); ?> </label>
                    <select class="form-control employer_id" id="choice_id_${x+1}" name="employer_ids[]">
                        <option disabled selected><?php echo app('translator')->get('receipts.employer_id'); ?></option>
                    </select>
                    <?php $__errorArgs = ['employer_id'];
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
                    <label><?php echo app('translator')->get('receipts.job_title'); ?> </label>
                    <input type="text" name="job_titles[]" id="job_title" placeholder="<?php echo app('translator')->get('receipts.job_title'); ?>"
                        class="form-control" value="<?php echo e(old('job_title')); ?>">
                    <?php $__errorArgs = ['job_title'];
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
                    <label><?php echo app('translator')->get('receipts.hiring_date'); ?> </label>
                    <input type="text" name="hiring_dates[]" id="hiring_date" placeholder="<?php echo app('translator')->get('receipts.hiring_date'); ?>"
                        class="form-control disable-date" value="<?php echo e(old('hiring_date')); ?>">
                    <?php $__errorArgs = ['hiring_date'];
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
                    <label><?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?> </label>
                    <input type="text" name="Remaining_period_of_retirements[]" id="Remaining_period_of_retirement"
                        placeholder="<?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?>" class="form-control"
                        value="<?php echo e(old('Remaining_period_of_retirement')); ?>">
                    <?php $__errorArgs = ['Remaining_period_of_retirement'];
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
                    <label><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?> </label>
                    <select class="form-control" name="bank_salary_transferreds[]" id='bank_salary_transferred'>
                        <option disabled selected><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?></option>
                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($bank->id); ?>" <?php if($data->bank_salary_transferred == $bank->id): ?> selected <?php endif; ?>><?php echo e($bank->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['bank_salary_transferred'];
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
                    <label><?php echo app('translator')->get('receipts.salary_note'); ?> </label>
                    <textarea name="salary_notes[]" class="form-control" type="text" rows="2" cols="2"
                        placeholder="<?php echo app('translator')->get('receipts.salary_note'); ?>">
                        <?php echo e(old('salary_note')); ?> </textarea>
                    <?php $__errorArgs = ['salary_note'];
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
                <input type="hidden" name="salary_id[]" value="">

                <div class="col-6 form-group">
                    <a class="btn btn-light-success font-weight-bold btn-sm related_link text-center mr-1" style="height: 35px"><i
                            class="fa fa-plus fa-sm p-0"></i> <?php echo app('translator')->get('receipts.add_salary'); ?> </a>
                    <a class="btn btn-light-danger font-weight-bold remove_salary_input mr-3" style="height: 35px"><i class="fa fa-trash fa-sm p-0"></i></a>
                </div>

              </div>
            </div>`;
                if (x < MAX_INPUT) {
                    $('.clon_salary').append(content);
                    x++;
                }
            });
            $(document).on('click', '.remove_salary_input', function() {
                $(this).parent().parent().remove();
                x--;
            })
            $(document).on('change', ".business_sector_id", function() {
                let business_parent_val = $(this).val();
                let business_child_id = "#" + $(this).attr("choice_id");
                $(business_child_id).empty();
                $.ajax({
                    type: 'post', // the method (could be GET btw)
                    url: "<?php echo e(route('employer_data')); ?>",
                    data: {
                        business_sector_id: business_parent_val,
                        _token: '<?php echo e(csrf_token()); ?>',
                    },
                    success: function(response) {
                        let len = response.length;
                        if (len > 0) {
                            for (i = 0; i < len; i++) {
                                let name = response[i].name;
                                let id = response[i].id;
                                let state_details = '<option value="' + id + '">' +
                                    name + ' </option>'
                                $(business_child_id).append(state_details);
                            }
                        } else {
                            let state_details = '<option value="0"> لا توجد بيانات </option>'
                            $(business_child_id).append(state_details);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/editComponents/financial.blade.php ENDPATH**/ ?>