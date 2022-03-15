




<?php $__env->startSection('module_name'); ?> <?php echo app('translator')->get('general.modules.roles'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('permission', 'organization'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.roles'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('create_route'); ?> <?php echo e(route('roles.create')); ?> <?php $__env->stopSection(); ?>



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
         <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
                <th scope="row"><?php echo e($key+1); ?></th>
                 <td><?php echo e($value->name); ?></td>
 

 
                <td>
                    <a href="<?php echo e(route('roles.show',$value->id)); ?>" class="btn btn-sm btn-clean
                        btn-icon mr-2" title="<?php echo app('translator')->get('general.locales.show'); ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                        
                        <a href="<?php echo e(route('roles.edit',$value->id)); ?>" class="btn btn-sm btn-clean
                        btn-icon mr-2 custimizeEditBtn" title="<?php echo app('translator')->get('general.locales.edit'); ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                       <?php if(!in_array(auth()->user()->roles[0]->name ,$rolesUser)): ?>
                         <form id="delete-form-<?php echo e($value->id); ?>" style="display: inline-table;" action="<?php echo e(route('roles.destroy',$value->id)); ?>"
                            method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="button" class="btn btn-sm btn-clean btn-icon"
                                    title="<?php echo app('translator')->get('general.locales.delete'); ?>" onclick="confirmDelete
                            ('delete-form-<?php echo e($value->id); ?>')">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                       <?php endif; ?>
                </td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </tbody>
    </table>
    <div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/roles/index.blade.php ENDPATH**/ ?>