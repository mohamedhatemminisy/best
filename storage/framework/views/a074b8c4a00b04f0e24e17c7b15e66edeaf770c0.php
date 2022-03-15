


<?php $__env->startSection('module_name'); ?> <?php echo app('translator')->get('general.modules.permissions'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('permission', 'organization'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.permissions'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('create_route'); ?> <?php echo e(route('permissions.create')); ?> <?php $__env->stopSection(); ?>



<?php $__env->startSection('page_content'); ?>
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"><?php echo app('translator')->get('general.fields.name'); ?></th>
 
           
              <th scope="col"><?php echo app('translator')->get('general.fields.control'); ?></th>
        </tr>
        </thead>
        <tbody>
        
        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($key+1); ?></th>
            <td><?php echo e($permission->name); ?></td>
             <td>
                <?php echo $__env->make('admin.components.table-control', ['permission' => 'organization', 'name'=>'permissions', 'value'=>$permission], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </td>

        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </tbody>
    </table>
    <div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>