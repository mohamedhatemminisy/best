<?php $__env->startSection('module_name'); ?> <?php echo app('translator')->get('general.modules.receipts'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('permission', 'organization'); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.receipts'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('create_route'); ?> <?php echo e(route('receipts.create')); ?> <?php $__env->stopSection(); ?>


<style>
    td {
        font-size: 1.5rem;
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
                <th scope="col"><?php echo app('translator')->get('invoice.redirect_to'); ?></th>
                <th scope="col"><?php echo app('translator')->get('invoice.delay_time'); ?></th>
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
                    <?php if($value->redirected_to ): ?>
                        <td><?php echo e($value->getRedirectUser->name); ?></td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>

                    <?php if($value->status == 'delay'): ?>
                        <td> <?php echo app('translator')->get('receipts.'.$value->delay); ?> </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    <td><?php echo e($value->created_at); ?></td>
                    <td>
                        <?php echo $__env->make('admin.components.table-control', ['permission' => 'organization', 'name'=>'receipts',
                        'value'=>$value], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('receipts.accept')): ?>
                            <a href="<?php echo e(route('receipts.accept', $value->id)); ?>"
                                class="btn btn-sm btn-clean
                                                btn-icon mr-2 custimizeEditBtn <?php if($value->status == 'accept'): ?> activeBtn <?php endif; ?>"
                                title="<?php echo app('translator')->get('invoice.accept'); ?>">
                                <i class="fas fa-check"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('receipts.reject')): ?>
                            <a href="<?php echo e(route('receipts.reject', $value->id)); ?>"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn <?php if($value->status == 'reject'): ?> activeBtn <?php endif; ?>"
                                title="
                                                                        <?php echo app('translator')->get('invoice.reject'); ?>">
                                <i class="fas fa-times"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('receipts.archive')): ?>
                            <a href="<?php echo e(route('receipts.archive', $value->id)); ?>"
                                class="btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn <?php if($value->status == 'archive'): ?> activeBtn <?php endif; ?>"
                                title=" <?php echo app('translator')->get('invoice.archive'); ?>">
                                <i class="far fa-file-archive"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('receipts.delay')): ?>
                            <button type="button" class="btn btn-primary btn btn-sm btn-clean btn-icon mr-2 custimizeEditBtn"
                                title="<?php echo app('translator')->get('invoice.delay'); ?>" data-toggle="modal" data-target="<?php echo e('#delay' . $value->id); ?>">
                                <i class="fas fa-stopwatch"></i>
                            </button>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('receipts.forward')): ?>
                            <button type="button"
                                class="btn btn-primary btn btn-sm btn-clean
                            btn-icon mr-2 custimizeEditBtn"
                                title="<?php echo app('translator')->get('invoice.redirect'); ?>" data-toggle="modal"
                                data-target="<?php echo e('#exampleModal' . $value->id); ?>">
                                <i class="fas fa-share"></i>
                            </button>
                        <?php endif; ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="delay<?php echo e($value->id); ?>" tabindex="-1" role="dialog" aria-labelledby="delay"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> اختار مدة التاجيل </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <form action="<?php echo e(route('receipts.delay')); ?>" method="GET">
                            <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleSelect1">اختار مدة التاجيل
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" id="exampleSelect1" name="delay">
                                        <option value="one_month"> <?php echo app('translator')->get('receipts.one_month'); ?></option>
                                        <option value="three_months"><?php echo app('translator')->get('receipts.three_months'); ?></option>
                                        <option value="six_months"> <?php echo app('translator')->get('receipts.six_months'); ?> </option>
                                        <option value="one_year"><?php echo app('translator')->get('receipts.one_year'); ?> </option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">اغلاق</button>
                                <button type="submit" class="btn btn-light-success active">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="exampleModal<?php echo e($value->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اختار المحول اليه </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <form action="<?php echo e(route('receipts.forward')); ?>" method="GET">
                            <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleSelect1">اختار المحول اليه
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" id="exampleSelect1" name="redirected_to">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-dismiss="modal">اغلاق</button>
                                <button type="submit" class="btn btn-light-success active">حفظ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/index.blade.php ENDPATH**/ ?>