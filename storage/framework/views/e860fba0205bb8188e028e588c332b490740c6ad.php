<?php if($general->salary->count() || $general->income->count() ||$general->commitment->count()): ?>
    <div class="col-12 form-group">
        <h2>
            <?php echo app('translator')->get('receipts.financial_info'); ?>
        </h2>
    </div>
    <?php if($general->salary->count()): ?>
        <hr>
        <div class="card-body">
            <?php $__currentLoopData = $general->salary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3>
                    <?php echo app('translator')->get('receipts.salary_info'); ?>
                </h3><br><br>
                <div class="row">
                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.basic_salary'); ?></label>
                        <br>
                        <p> <?php echo e($salary->basic_salary); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.Allowances_without_housing_allowance'); ?></label>
                        <br>
                        <p> <?php echo e($salary->Allowances_without_housing_allowance); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.Monthly_housing_allowance'); ?></label>
                        <br>
                        <p> <?php echo e($salary->Monthly_housing_allowance); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.total'); ?></label>
                        <br>
                        <p> <?php echo e($salary->total); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.retirement_discount'); ?></label>
                        <br>
                        <p> <?php echo e($salary->retirement_discount); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.other_discounts'); ?></label>
                        <br>
                        <p> <?php echo e($salary->other_discounts); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.net'); ?></label>
                        <br>
                        <p> <?php echo e($salary->net); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.approved_salary'); ?></label>
                        <br>
                        <p> <?php echo e($salary->approved_salary); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.business_sector_id'); ?></label>
                        <br>

                        <?php if($salary->business_sector != null): ?>
                            <p> <?php echo e($salary->business_sector->name); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.employer_id'); ?></label>
                        <br>
                        <?php if($salary->employer != null): ?>
                            <p> <?php echo e($salary->employer->name); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.job_title'); ?></label>
                        <br>
                        <p> <?php echo e($salary->job_title); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.hiring_date'); ?></label>
                        <br>
                        <p> <?php echo e($salary->hiring_date); ?></p>
                    </div>

                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.Remaining_period_of_retirement'); ?></label>
                        <br>
                        <p> <?php echo e($salary->Remaining_period_of_retirement); ?></p>
                    </div>
                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.bank_salary_transferred'); ?></label>
                        <br>
                        <?php if($salary->bank_salary_transferred): ?>
                        <p> <?php echo e($salary->bank->name); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-3 form-group">
                        <label><?php echo app('translator')->get('receipts.salary_note'); ?></label>
                        <br>
                        <p> <?php echo e($salary->salary_note); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show_components/financial.blade.php ENDPATH**/ ?>