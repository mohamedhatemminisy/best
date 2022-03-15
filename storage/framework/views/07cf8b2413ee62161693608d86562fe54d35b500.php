

<?php $__env->startSection('module_name', trans('general.modules.mediator')); ?>
<?php $__env->startSection('index_route', route('users.index')); ?>
<?php $__env->startSection('store_route', route('users.update', $general)); ?>
<?php $__env->startSection('page_type', trans('general.modules.edit')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.mediator'); ?> <?php $__env->stopSection(); ?>


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
                    <label><?php echo app('translator')->get('user.name'); ?><span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" placeholder="<?php echo app('translator')->get('user.name'); ?>" class="form-control"
                        value="<?php echo e($general->name); ?>">
                </div>


                <div class="col form-group">
                    <label><?php echo app('translator')->get('user.email'); ?><span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" placeholder="<?php echo app('translator')->get('user.email'); ?>" class="form-control"
                        value="<?php echo e($general->email); ?>">
                </div>


                <div class="col form-group">
                    <label><?php echo app('translator')->get('user.password'); ?><span class="text-danger">*</span></label>
                    <input type="password" name="password" id="password" placeholder="<?php echo app('translator')->get('user.password'); ?>"
                        class="form-control">
                </div>
                <div class="col form-group">
                    <div class="mb-3">
                        <label for="role" class="form-label"> <?php echo app('translator')->get('general.users.permission'); ?> </label>
                        <select class="form-control" name="role" required>
                            <option value=""><?php echo app('translator')->get('general.users.select_role'); ?></option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->id); ?>"
                                    <?php echo e(in_array($role->name, $userRole) ? 'selected' : ''); ?>>
                                    <?php echo e($role->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('role')): ?>
                            <span class="text-danger text-left"><?php echo e($errors->first('role')); ?></span>
                        <?php endif; ?>
                    </div>
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

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>