<?php $__env->startSection('module_name', trans('general.modules.sponser')); ?>
<?php $__env->startSection('index_route', route('sponser.index')); ?>
<?php $__env->startSection('store_route', route('sponser.update', $data)); ?>
<?php $__env->startSection('page_type', trans('general.modules.edit')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.sponser'); ?> <?php $__env->stopSection(); ?>


<?php $__env->startSection('fields_content'); ?>
    <?php echo method_field('put'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.locales.edit'); ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="col form-group">
                    <label><?php echo app('translator')->get('sponser.name'); ?><span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" placeholder="<?php echo app('translator')->get('sponser.name'); ?>" class="form-control"
                        value="<?php echo e($data->name); ?>">
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

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/sponser/edit.blade.php ENDPATH**/ ?>