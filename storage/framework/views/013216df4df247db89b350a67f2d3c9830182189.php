<?php $__env->startSection('module_name', trans('earth_type.earth_type')); ?>
<?php $__env->startSection('index_route', route('earth_type.index')); ?>
<?php $__env->startSection('store_route', route('earth_type.store')); ?>
<?php $__env->startSection('page_type', trans('general.locales.add_new')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('earth_type.earth_type'); ?> <?php $__env->stopSection(); ?>


<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.locales.add_new'); ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col form-group">
                <label><?php echo app('translator')->get('earth_type.name'); ?><span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="<?php echo app('translator')->get('earth_type.name'); ?>" class="form-control "
                    value="<?php echo e(old('name')); ?>">
            </div>
            <input type="hidden" name="type" value="earth_type">
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

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/earth_type/create.blade.php ENDPATH**/ ?>