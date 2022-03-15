<?php if($general->income->count() > 0): ?>
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        <?php $__currentLoopData = $general->income; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3>
                <?php echo app('translator')->get('receipts.income_info'); ?>
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.income_type_id'); ?></label>
                    <br>
                    <?php if($income->income_type != null): ?>
                    <p> <?php echo e($income->income_type->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.annual_income_value'); ?></label>
                    <br>
                    <p> <?php echo e($income->annual_income_value); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.income_statement_detail'); ?></label>
                    <br>
                    <p> <?php echo e($income->income_statement_detail); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show_components/income.blade.php ENDPATH**/ ?>