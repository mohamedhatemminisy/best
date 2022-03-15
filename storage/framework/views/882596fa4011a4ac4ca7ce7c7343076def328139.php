<div class="row">

    <div class="col-12 form-group">
        <h2>
            <?php echo app('translator')->get('receipts.personal_info'); ?>
        </h2>
        <hr>
    </div>
    <div class="col-3 form-group">
        <label><?php echo app('translator')->get('receipts.client_name'); ?> </label>
        <input type="text" name="name" id="name" placeholder="<?php echo app('translator')->get('receipts.client_name'); ?>" class="form-control"
            value="<?php echo e(old('name')); ?>">
        <?php $__errorArgs = ['name'];
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
        <label><?php echo app('translator')->get('receipts.cid'); ?> </label>
        <input type="text" name="identity" id="identity" placeholder="<?php echo app('translator')->get('receipts.cid'); ?>" class="form-control"
            value="<?php echo e(old('identity')); ?>">
        <?php $__errorArgs = ['identity'];
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
        <label><?php echo app('translator')->get('receipts.phone_one'); ?> </label>
        <input type="text" name="phone_one" id="phone_one" placeholder="<?php echo app('translator')->get('receipts.phone_one'); ?>"
            class="form-control" value="<?php echo e(old('phone_one')); ?>">
        <?php $__errorArgs = ['phone_one'];
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
        <label><?php echo app('translator')->get('receipts.phone_two'); ?> </label>
        <input type="text" name="phone_two" id="phone_two" placeholder="<?php echo app('translator')->get('receipts.phone_two'); ?>"
            class="form-control" value="<?php echo e(old('phone_two')); ?>">
        <?php $__errorArgs = ['phone_two'];
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
        <label><?php echo app('translator')->get('receipts.Hijri_date_of_birth'); ?> </label>
        <input type="text" name="Hijri_date_of_birth" id="hijri-date-input"
            placeholder="<?php echo app('translator')->get('receipts.Hijri_date_of_birth'); ?>" class="form-control disable-date"
            value="<?php echo e(old('Hijri_date_of_birth')); ?>">

        <?php $__errorArgs = ['Hijri_date_of_birth'];
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
        <label><?php echo app('translator')->get('receipts.birthday'); ?> </label>
        <input type="text" name="birthday" id="datepicker" placeholder="<?php echo app('translator')->get('receipts.birthday'); ?>"
            class="form-control " value="<?php echo e(old('birthday')); ?>">
        <?php $__errorArgs = ['birthday'];
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
        <label><?php echo app('translator')->get('receipts.Hijri_age'); ?> </label>
        <input type="text" name="Hijri_age" id="Hijri_age" placeholder="<?php echo app('translator')->get('receipts.Hijri_age'); ?>"
            class="form-control" value="<?php echo e(old('Hijri_age')); ?>">
        <?php $__errorArgs = ['Hijri_age'];
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
        <label><?php echo app('translator')->get('receipts.birth_age'); ?> </label>
        <input type="text" name="birth_age" id="birth_age" placeholder="<?php echo app('translator')->get('receipts.birth_age'); ?>"
            class="form-control" value="<?php echo e(old('birth_age')); ?>">
        <?php $__errorArgs = ['birth_age'];
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
        <label><?php echo app('translator')->get('receipts.city'); ?> </label>
        <select class="form-control" name="city_id" id='city'>
            <option disabled selected><?php echo app('translator')->get('receipts.city'); ?></option>
            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($city->id); ?>" <?php echo e(old('city') == $city->id ? 'selected' : ''); ?>>
                    <?php echo e($city->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['city_id'];
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
        <label><?php echo app('translator')->get('receipts.clinet_bank'); ?> </label>
        <select class="form-control" name="bank_id" id='bank'>
            <option disabled selected><?php echo app('translator')->get('receipts.clinet_bank'); ?></option>
            <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($bank->id); ?>" <?php echo e(old('bank') == $bank->id ? 'selected' : ''); ?>>
                    <?php echo e($bank->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['bank_id'];
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
        <label><?php echo app('translator')->get('receipts.family_members'); ?> </label>
        <input type="text" name="family_members" id="family_members" placeholder="<?php echo app('translator')->get('receipts.family_members'); ?>"
            class="form-control" value="<?php echo e(old('family_members')); ?>">
        <?php $__errorArgs = ['family_members'];
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
        <label><?php echo app('translator')->get('receipts.notes'); ?> </label>
        <textarea name="notes" class="form-control" type="text" rows="2" cols="2"
            placeholder="<?php echo app('translator')->get('receipts.notes'); ?>">
                <?php echo e(old('notes')); ?> </textarea>
        <?php $__errorArgs = ['notes'];
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


</div>
<?php $__env->startPush('js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            let dateObj = new Date();
            let thisYear = dateObj.getUTCFullYear();
            let dateObject;
            $("#datepicker").datepicker({
                onSelect: function() {
                    var dateObject = $(this).datepicker('getDate');
                   
                    
                }
            });
            $("#datepicker").change(function(){
               let brithVal = $(this).val();
               let brithYear = new Date(brithVal).getUTCFullYear();
                $('#Hijri_age').val(thisYear - brithYear);
                $('#birth_age').val(thisYear - brithYear);
            });
            
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/components/personal.blade.php ENDPATH**/ ?>