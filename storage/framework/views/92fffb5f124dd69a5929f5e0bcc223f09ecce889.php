<?php if($general->commitment->count() > 0): ?>
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        <?php $__currentLoopData = $general->commitment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commitment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3>
                <?php echo app('translator')->get('receipts.commitment_info'); ?>
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.installment'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->installment); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.product_type_id'); ?></label>
                    <br>
                    <?php if($commitment->product_type != null): ?>
                        <p> <?php echo e($commitment->product_type->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.sponser_id'); ?></label>
                    <br>
                    <?php if($commitment->sponser != null): ?>
                        <p> <?php echo e($commitment->sponser->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.payment_status_id'); ?></label>
                    <br>
                    <?php if($commitment->payment_status != null): ?>
                        <p> <?php echo e($commitment->payment_status->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.early_repayment'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->early_repayment); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.total'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->total); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.commitment_start_date'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->commitment_start_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.commitment_end_date'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->commitment_end_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.remaining_installments_count'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->remaining_installments_count); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.last_payment_date'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->last_payment_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.commitment_notes'); ?></label>
                    <br>
                    <p> <?php echo e($commitment->notes); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show_components/commitment.blade.php ENDPATH**/ ?>