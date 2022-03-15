<?php $__env->startSection('module_name', trans('general.modules.receipts')); ?>
<?php $__env->startSection('index_route', route('receipts.index')); ?>
<?php $__env->startSection('store_route', route('receipts.store')); ?>
<?php $__env->startSection('page_type', trans('general.modules.add_new')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.receipts'); ?> <?php $__env->stopSection(); ?>

<style>
    .help-block {
        color: red;
    }
    p {
        border: none !important;
    }

    .font p {
        font-size: 1.5rem;
    }

    .font label {
            font-weight: bold;
            font-size: 1.2rem!important;
    }

    .font h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .font h3 {
        font-size: 2rem;
        font-weight: bold;
    }
</style>

<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom font">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.locales.add_new'); ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <?php echo $__env->make('admin.receipt.components.personal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.receipt.components.financial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.receipt.components.income', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.receipt.components.commitment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.receipt.components.support_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.receipt.components.real_state', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('admin.receipt.components.land', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row">
                    <div class="col-12 form-group">
                        <h2>
                            <?php echo app('translator')->get('receipts.status'); ?>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-6 form-group">
                        <label><?php echo app('translator')->get('receipts.acctach'); ?> </label><br>
                        <input type="file" name="files[]" multiple><br>
                        <?php $__errorArgs = ['files'];
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
                        <label><?php echo app('translator')->get('receipts.status'); ?> </label>
                        <select class="form-control" name="compeleted" id='compeleted'>
                            <option disabled selected><?php echo app('translator')->get('receipts.status'); ?></option>
                            <?php $__currentLoopData = $order_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($order->id); ?>"
                                    <?php echo e(old('compeleted') == $order->id ? 'selected' : ''); ?>>
                                    <?php echo e($order->name); ?></option>
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
                </div>
            </div>
        </div>
        <div class="card card-custom">
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-light-success active">
                    <i class="far fa-save fa-sm"></i>
                    <?php echo app('translator')->get('general.save'); ?>
                </button>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/receipt/create.blade.php ENDPATH**/ ?>