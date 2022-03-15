<?php $__currentLoopData = $estate->rating; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        <h3>
            <?php echo app('translator')->get('receipts.real_rate_info'); ?>
        </h3><br>
        <div class="row">

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.bank'); ?></label>
                <br>
                <?php if($rate->rate_bank != null): ?>
                    <p> <?php echo e($rate->rate_bank->name); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.first_rate'); ?></label>
                <br>
                <p> <?php echo e($rate->first_rate); ?></p>
            </div>

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.second_rate'); ?></label>
                <br>
                <p> <?php echo e($rate->second_rate); ?></p>
            </div>

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.third_rate'); ?></label>
                <br>
                <p> <?php echo e($rate->third_rate); ?></p>
            </div>

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.emp_rate'); ?></label>
                <br>
                <?php if($rate->rate_bank_emp != null): ?>
                    <p> <?php echo e($rate->rate_bank_emp->name); ?></p>
                <?php endif; ?>
            </div>

            <div class="col-3 form-group">
                <label><?php echo app('translator')->get('receipts.approved_rate'); ?></label>
                <br>
                <p> <?php echo e($rate->approved_rate); ?></p>
            </div>

            <div class="col-6 form-group">
                <label><?php echo app('translator')->get('receipts.rate_notes'); ?></label>
                <br>
                <p> <?php echo e($rate->rate_notes); ?></p>
            </div>

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show_components/real_rating.blade.php ENDPATH**/ ?>