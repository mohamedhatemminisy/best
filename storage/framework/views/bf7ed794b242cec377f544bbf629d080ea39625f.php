

<?php $__env->startSection('module_name', trans('user.users')); ?>
<?php $__env->startSection('index_route', route('users.index')); ?>
<?php $__env->startSection('store_route', route('users.store')); ?>
<?php $__env->startSection('page_type', trans('general.locales.add_new')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('user.users'); ?> <?php $__env->stopSection(); ?>


<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.locales.add_new'); ?></h3>
            </div>

        </div>
        <div class="card-body">
            <div class="col form-group">
                <label><?php echo app('translator')->get('user.name'); ?><span class="text-danger">*</span></label>
                <input type="text" name="name" placeholder="<?php echo app('translator')->get('user.name'); ?>" class="form-control "
                    value="<?php echo e(old('name')); ?>">
            </div>
            <div class="col form-group">
                <label><?php echo app('translator')->get('user.email'); ?><span class="text-danger">*</span></label>
                <input type="email" name="email" placeholder="<?php echo app('translator')->get('user.email'); ?>" class="form-control "
                    value="<?php echo e(old('email')); ?>">
            </div>
            <div class="col form-group">
                <label><?php echo app('translator')->get('user.password'); ?><span class="text-danger">*</span></label>
                <input type="password" name="password" placeholder="<?php echo app('translator')->get('user.password'); ?>" class="form-control "
                    value="<?php echo e(old('password')); ?>">
            </div>
            <div class="col form-group">
                <label><?php echo app('translator')->get('user.confrim_password'); ?><span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" placeholder="<?php echo app('translator')->get('user.confrim_password'); ?>"
                    class="form-control " value="<?php echo e(old('confrim_password')); ?>">
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

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/users/create.blade.php ENDPATH**/ ?>