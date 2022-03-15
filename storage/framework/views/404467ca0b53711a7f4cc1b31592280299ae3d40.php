<?php $__env->startSection('module_name'); ?> <?php echo app('translator')->get('general.modules.users'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('permission', 'organization'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.users'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('create_route'); ?> <?php echo e(route('users.create')); ?> <?php $__env->stopSection(); ?>



<?php $__env->startSection('page_content'); ?>
<table class="table table-bordered table-checkable" id="kt_datatable">
    <thead>
        <tr>
            <th>#</th>
             <th><?php echo app('translator')->get('user.name'); ?></th>
            <th><?php echo app('translator')->get('user.email'); ?></th>
            <th><?php echo app('translator')->get('slider.created_at'); ?></th>
            <th><?php echo app('translator')->get('slider.control'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="dtr-control"><?php echo e($key + 1); ?></td>
                <td><?php echo e($value->name); ?></td>
                 <td>
                    <?php echo e($value->email); ?>

                </td>
                <td class="sorting_1" nowrap="nowrap">
                    <span class="label-inline"><?php echo e($value->created_at); ?></span>
                </td>
                <td nowrap="nowrap">
                    <?php echo $__env->make('admin.components.table-control', ['permission' => 'organization', 'name'=>'users', 'value'=>$value], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
    <div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/users/index.blade.php ENDPATH**/ ?>