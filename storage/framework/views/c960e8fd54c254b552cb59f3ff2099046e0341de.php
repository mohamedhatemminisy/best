
 <?php $__env->startSection('module_name', trans('general.aside.permissions')); ?>
<?php $__env->startSection('index_route', route('permissions.index')); ?>
<?php $__env->startSection('store_route', route('permissions.store')); ?>
<?php $__env->startSection('page_type', trans('general.locales.add_new')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.aside.permissions'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title d-block">
                <h3 class="card-label"><?php echo app('translator')->get('general.fields.add_new_permission'); ?></h3><br/>
                <div class="lead">
                   <p> <?php echo app('translator')->get('general.fields.add_new_role_and_assign_permissions'); ?></p>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <div class="mb-3">
                <label for="name" class="form-label"> <?php echo app('translator')->get('general.fields.name'); ?> </label>
                <input value="<?php echo e(old('name')); ?>" 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    placeholder="<?php echo app('translator')->get('general.fields.name'); ?>">

                
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

 
  
<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/permissions/create.blade.php ENDPATH**/ ?>