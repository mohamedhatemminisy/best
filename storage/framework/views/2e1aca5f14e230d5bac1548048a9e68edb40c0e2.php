<?php $__env->startSection('module_name', trans('real_estate_status.real_estate_status')); ?>
<?php $__env->startSection('index_route', route('real_estate_status.index')); ?>
<?php $__env->startSection('store_route', route('real_estate_status.store')); ?>
<?php $__env->startSection('page_type', trans('general.locales.add_new')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('real_estate_status.real_estate_status'); ?> <?php $__env->stopSection(); ?>


<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.locales.add_new'); ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col form-group">
                <label><?php echo app('translator')->get('real_estate_status.name'); ?><span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="<?php echo app('translator')->get('real_estate_status.name'); ?>" class="form-control "
                    value="<?php echo e(old('name')); ?>">
            </div>
            <input type="hidden" name="type" value="real_estate_status">
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

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/real_estate_status/create.blade.php ENDPATH**/ ?>