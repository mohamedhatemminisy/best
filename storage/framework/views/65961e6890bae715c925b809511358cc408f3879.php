<?php if($general->land->count() > 0): ?>
    <div class="col-12 form-group">
        <hr>
    </div>
    <div class="card-body">
        <?php $__currentLoopData = $general->land; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $land): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3>
                <?php echo app('translator')->get('receipts.land_info'); ?>
            </h3><br>
            <div class="row">

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.land_type_id'); ?></label>
                    <br>
                    <?php if($land->land_type != null): ?>
                        <p> <?php echo e($land->land_type->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.land_status_ids'); ?></label>
                    <br>
                    <?php if($land->land_status != null): ?>
                        <p> <?php echo e($land->land_status->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.planned_num'); ?></label>
                    <br>
                    <p> <?php echo e($land->planned_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.piece_num'); ?></label>
                    <br>
                    <p> <?php echo e($land->piece_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.city'); ?></label>
                    <br>
                    <?php if($land->city != null): ?>
                        <p> <?php echo e($land->city->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.district'); ?></label>
                    <br>
                    <p> <?php echo e($land->district); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.owner_num'); ?></label>
                    <br>
                    <p> <?php echo e($land->owner_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.rate_num'); ?></label>
                    <br>
                    <p> <?php echo e($land->rate_num); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_type'); ?></label>
                    <br>
                    <?php if($land->license_type != null): ?>
                        <p> <?php echo e($land->license_type->name); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_issue_date'); ?></label>
                    <br>
                    <p> <?php echo e($land->license_issue_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.license_expiration_date'); ?></label>
                    <br>
                    <p> <?php echo e($land->license_expiration_date); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.property_price'); ?></label>
                    <br>
                    <p> <?php echo e($land->property_price); ?></p>
                </div>

                <div class="col-3 form-group">
                    <label><?php echo app('translator')->get('receipts.land_notes'); ?></label>
                    <br>
                    <p> <?php echo e($land->property_notes); ?></p>
                </div>
                <?php if($land->rating->count() > 0): ?>
                    <?php echo $__env->make('admin.receipt.show_components.land_rating', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/show_components/land.blade.php ENDPATH**/ ?>