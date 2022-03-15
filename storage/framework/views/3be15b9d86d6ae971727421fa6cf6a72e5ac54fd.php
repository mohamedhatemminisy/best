<?php if($general->realEstate->count() > 0): ?>
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        <?php $__currentLoopData = $general->realEstate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3>
                <?php echo app('translator')->get('receipts.real_state_info'); ?>
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.real_estate_types'); ?></label>
                    <br>
                    <?php if($estate->estate_type != null): ?>
                        <p> <?php echo e($estate->estate_type->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.real_estate_status'); ?></label>
                    <br>
                    <?php if($estate->estate_status != null): ?>
                        <p> <?php echo e($estate->estate_status->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.planned_num'); ?></label>
                    <br>
                    <p> <?php echo e($estate->planned_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.piece_num'); ?></label>
                    <br>
                    <p> <?php echo e($estate->piece_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.city'); ?></label>
                    <br>
                    <?php if($estate->city != null): ?>
                        <p> <?php echo e($estate->city->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.district'); ?></label>
                    <br>
                    <p> <?php echo e($estate->district); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.owner_num'); ?></label>
                    <br>
                    <p> <?php echo e($estate->owner_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.rate_num'); ?></label>
                    <br>
                    <p> <?php echo e($estate->rate_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_type'); ?></label>
                    <br>
                    <?php if($estate->license_type != null): ?>
                        <p> <?php echo e($estate->license_type->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_issue_date'); ?></label>
                    <br>
                    <p> <?php echo e($estate->license_issue_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_expiration_date'); ?></label>
                    <br>
                    <p> <?php echo e($estate->license_expiration_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.property_price'); ?></label>
                    <br>
                    <p> <?php echo e($estate->property_price); ?></p>
                </div>


                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.property_notes'); ?></label>
                    <br>
                    <p> <?php echo e($estate->property_notes); ?></p>
                </div>
                <?php if($estate->rating->count() > 0): ?>
                    <?php echo $__env->make('admin.receipt.show_components.real_rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/show_components/real_state.blade.php ENDPATH**/ ?>