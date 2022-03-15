

<?php $__env->startSection('module_name', trans('general.modules.roles')); ?>
<?php $__env->startSection('index_route', route('roles.index')); ?>
<?php $__env->startSection('store_route', route('roles.update', $role)); ?>
<?php $__env->startSection('page_type', trans('general.modules.edit')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.roles'); ?> <?php $__env->stopSection(); ?>


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

  
                <div class="mb-3">
                    <label for="name" class="form-label"><?php echo app('translator')->get('general.fields.name'); ?></label>
                    <input value="<?php echo e($role->name); ?>" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>
                </div>
                
                <label for="permissions" class="form-label"><?php echo app('translator')->get('general.fields.assign_permissions'); ?></label>

                <table class="table table-bordered table-checkable" id="kt_datatable">
                    <thead>
                        <th scope="col" ><input type="checkbox" id="all_permission" name="all_permission"></th>
                        <th scope="col"> <?php echo app('translator')->get('general.fields.name'); ?> </th>
                        <th scope="col" ><?php echo app('translator')->get('general.fields.guard'); ?></th> 
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <input type="checkbox" 
                                name="permission[<?php echo e($permission->name); ?>]"
                                value="<?php echo e($permission->name); ?>"
                                class='permission'
                                <?php echo e(in_array($permission->name, $rolePermissions) 
                                    ? 'checked'
                                    : ''); ?>>
                            </td>
                            <td><?php echo e($permission->name); ?></td>
                            <td><?php echo e($permission->guard_name); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
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
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
             $('[name="all_permission"]').on('click', function() {
                 if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>