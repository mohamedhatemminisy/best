

<?php $__env->startSection('module_name', trans('general.aside.roles')); ?>
<?php $__env->startSection('index_route', route('roles.index')); ?>
<?php $__env->startSection('store_route', route('roles.store')); ?>
<?php $__env->startSection('page_type', trans('general.locales.add_new')); ?>
<?php $__env->startSection('form_type', 'POST'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.aside.roles'); ?> <?php $__env->stopSection(); ?>
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
                    <label for="name" class="form-label"><?php echo app('translator')->get('general.fields.name'); ?></label>
                    <input value="<?php echo e(old('name')); ?>" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="<?php echo app('translator')->get('general.fields.name'); ?>" >
                </div>

                <label for="permissions" class="form-label"><?php echo app('translator')->get('general.fields.assign_permissions'); ?></label>

                <table class="table table-bordered table-checkable" id="kt_datatable">
                    <thead>
                        <th scope="col" ><input type="checkbox" id="all_permission" name="all_permission"></th>
                        <th scope="col"> <?php echo app('translator')->get('general.fields.roles_name'); ?> </th>
                        <th scope="col" ><?php echo app('translator')->get('general.fields.roles_guard'); ?></th> 
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <input type="checkbox" 
                                name="permission[<?php echo e($permission->name); ?>]"
                                value="<?php echo e($permission->name); ?>"
                                class='permission'>
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
<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/roles/create.blade.php ENDPATH**/ ?>