


<?php $__env->startSection('module_name'); ?> <?php echo app('translator')->get('general.modules.mediator'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('permission', 'organization'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.mediator'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('create_route'); ?> <?php echo e(route('mediator.create')); ?> <?php $__env->stopSection(); ?>



<?php $__env->startSection('page_content'); ?>
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"><?php echo app('translator')->get('mediator.name'); ?></th>
           
            <th scope="col"><?php echo app('translator')->get('mediator.code'); ?></th>
            <th scope="col"><?php echo app('translator')->get('mediator.url'); ?></th>

            <th scope="col"><?php echo app('translator')->get('general.fields.created_at'); ?></th>
            <th scope="col"><?php echo app('translator')->get('general.fields.control'); ?></th>
        </tr>
        </thead>
        <tbody>
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
                <th scope="row"><?php echo e($key+1); ?></th>
                 <td><?php echo e($value->name); ?></td>
                 <td><?php echo e($value->code); ?></td>

                 <td><?php echo e($value->url); ?></td>

 

                 <td><?php echo e($value->created_at); ?></td>

                <td>
                    <?php echo $__env->make('admin.components.table-control', ['permission' => 'organization', 'name'=>'mediator', 'value'=>$value], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </tbody>
    </table>
    <div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/mediator/index.blade.php ENDPATH**/ ?>