


<?php $__env->startSection('module_name', trans('general.modules.roles')); ?>
<?php $__env->startSection('index_route', route('roles.index')); ?>
<?php $__env->startSection('page_type', trans('general.modules.show')); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.roles'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
 p
 {
     border:none !important;
 }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">      <?php echo e(ucfirst($role->name)); ?> <?php echo app('translator')->get('general.fields.role'); ?></h3>
           
        </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                
                <table class="table table-bordered table-checkable" id="kt_datatable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"><?php echo app('translator')->get('general.fields.name'); ?></th>
                       
                        <th scope="col"><?php echo app('translator')->get('general.fields.guard'); ?></th>
                     </tr>
                    </thead>
                    <tbody>
                     <?php $__currentLoopData = $rolePermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                            <th scope="row"><?php echo e($key+1); ?></th>
                             <td><?php echo e($permission->name); ?></td>
             
            
                             <td><?php echo e($permission->guard_name); ?></td>
            
                            
            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>



    </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/roles/show.blade.php ENDPATH**/ ?>