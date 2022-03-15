<div class="card-header card-header-tabs-line">
    <div class="card-title">
        <h2 style="font-size: 2vh;
        font-weight: bold;" class="card-label"><?php echo app('translator')->get('receipts.personal_info'); ?></h2>
    </div>
</div>
<div class="card-body">
    <div class="row">

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.client_name'); ?></label>
            <br>
            <p> <?php echo e($general->name); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.cid'); ?></label>
            <br>
            <p> <?php echo e($general->identity); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.phone_one'); ?></label>
            <br>
            <p> <?php echo e($general->phone_one); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.phone_two'); ?></label>
            <br>
            <p> <?php echo e($general->phone_two); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.Hijri_date_of_birth'); ?></label>
            <br>
            <p> <?php echo e($general->Hijri_date_of_birth); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.birthday'); ?></label>
            <br>
            <p> <?php echo e($general->birthday); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.Hijri_age'); ?></label>
            <br>
            <p> <?php echo e($general->Hijri_age); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.birth_age'); ?></label>
            <br>
            <p> <?php echo e($general->birth_age); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.city'); ?></label>
            <br>
            <?php if($general->city != null): ?>
                <p> <?php echo e($general->city->name); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.clinet_bank'); ?></label>
            <br>
            <?php if($general->bank != null): ?>
                <p> <?php echo e($general->bank->name); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.family_members'); ?></label>
            <br>
            <p> <?php echo e($general->family_members); ?></p>
        </div>

        <div class="col-3 form-group">
            <label><?php echo app('translator')->get('receipts.notes'); ?></label>
            <br>
            <p> <?php echo e($general->notes); ?></p>
        </div>

    </div>
</div>
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show_components/personal.blade.php ENDPATH**/ ?>