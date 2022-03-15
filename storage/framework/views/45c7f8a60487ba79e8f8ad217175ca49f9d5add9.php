<?php $__env->startSection('module_name'); ?> <?php echo app('translator')->get('general.modules.receipts'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('permission', 'organization'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.receipts'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('create_route'); ?> <?php echo e(route('receipts.create')); ?> <?php $__env->stopSection(); ?>


<style>
    td {
        font-size: 1.5rem;
    }
    .btn.btn-primary {
        display: none;
    }
    .activeBtn {
        color: #3699ff !important;
        background-color: #f3f6f9 !important;
        border-color: transparent !important;
    }

    .activeBtn i {
        color: #3699ff !important;
    }

    @media  screen and (max-width:991px) {
        .invoice-table .action.sorting_disabled {
            display: block !important;
            margin: 18px 0px 0px;
        }
    }

</style>
<?php $__env->startSection('page_content'); ?>
    <table class="table table-bordered table-checkable" id="kt_datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"><?php echo app('translator')->get('general.fields.name'); ?></th>
                <th scope="col">الكود</th>
                <th scope="col"><?php echo app('translator')->get('receipts.status'); ?></th>
                <th scope="col"><?php echo app('translator')->get('invoice.status'); ?></th>
                <th scope="col"><?php echo app('translator')->get('general.fields.created_at'); ?></th>
                <th scope="col"><?php echo app('translator')->get('general.fields.control'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($key + 1); ?></th>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->code); ?></td>
                    <td><?php if($value->compelete): ?><?php echo e($value->compelete->name); ?> <?php endif; ?></td>
                    <td><?php if($value->status): ?> <?php echo app('translator')->get('invoice.'.$value->status); ?> <?php endif; ?></td>
                    <td><?php echo e($value->created_at); ?></td>
                    <td>
                        <a href="<?php echo e(route('receipts.show',$value->id)); ?>" class="btn btn-sm btn-clean
                            btn-icon mr-2" title="<?php echo app('translator')->get('general.locales.show'); ?>">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form id="delete-form-<?php echo e($value->id); ?>" style="display: inline-table;" action="<?php echo e(route('archive.destroy',$value->id)); ?>"
                                method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="button" class="btn btn-sm btn-clean btn-icon"
                                        title="<?php echo app('translator')->get('general.locales.delete'); ?>" onclick="confirmDelete
                                ('delete-form-<?php echo e($value->id); ?>')">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('receipts.un_archive')): ?>
                            <a href="<?php echo e(route('receipts.un_archive', $value->id)); ?>"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn <?php if($value->status == 'archive'): ?> activeBtn <?php endif; ?>"
                                title=" <?php echo app('translator')->get('invoice.un_archive'); ?>">
                                <i class="far fa-file-archive"></i>
                            </a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/archive/index.blade.php ENDPATH**/ ?>