<div class="col-12 form-group">
    <br>
    <h3> <?php echo app('translator')->get('receipts.support_info'); ?></h3>
    <hr>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.support_status'); ?></label>
            <br>
            <?php if($general->support_status != null): ?>
                <p> <?php echo e(trans('receipts.'.$general->support_status)); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="col-12 form-group">
    <br>
    <h3> <?php echo app('translator')->get('receipts.order_type'); ?></h3>
    <hr>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.order_type'); ?></label>
            <br>
            <?php if($general->order_type != null): ?>
                <p> <?php echo e(trans('receipts.'.$general->order_type)); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.product_type_id'); ?></label>
            <br>
            <?php if($general->order_result != null): ?>
                <p><?php echo app('translator')->get('receipts.'.$general->order_result); ?></p>
            <?php endif; ?>
        </div>
        <?php if($general->product_details != null): ?>
        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.product_descriptions'); ?></label>
            <br>
                <p> <?php echo app('translator')->get('receipts.'.$general->product_details); ?></p>
        </div>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show_components/support_order.blade.php ENDPATH**/ ?>