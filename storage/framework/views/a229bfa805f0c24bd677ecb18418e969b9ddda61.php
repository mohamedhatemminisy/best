<?php $__env->startSection('module_name', trans('general.modules.receipts')); ?>
<?php $__env->startSection('index_route', route('receipts.index')); ?>
<?php $__env->startSection('page_type', trans('general.modules.show')); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.receipts'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        p {
            border: none !important;
        }
        .font p{
            font-size: 1.5rem;
        }
        .font label{
            font-weight: bold;
            font-size: 1.2rem;
        }
        .font h2{
            font-size: 2rem;
            font-weight: bold;
        }
        .font h3{
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom font">
        <?php echo $__env->make('admin.receipt.show_components.personal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.receipt.show_components.financial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.receipt.show_components.income', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.receipt.show_components.commitment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.receipt.show_components.support_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.receipt.show_components.real_state', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.receipt.show_components.land', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-12 form-group">
            <h2>
                <?php echo app('translator')->get('receipts.status'); ?>
            </h2>
            <hr>
        </div>
        <div class="col-6 form-group">
            <label><?php echo app('translator')->get('receipts.status'); ?></label>
            <br>
            <?php if( $general->compelete): ?>
            <p><?php echo e($general->compelete->name); ?></p>
            <?php endif; ?>
        </div>
        <?php if($general->file): ?>
        <div class="col-6 form-group">
            <label><?php echo app('translator')->get('receipts.file_download'); ?></label>
            <br>
                    <p>  <?php $__currentLoopData = json_decode($general->file); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><a target="_blank" href="<?php echo e(asset($file)); ?>"><i class="fas fa-download"></i></a> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
        </div>
        <?php endif; ?>
    </div>

    <div class="card card-custom">
        <div class="card-footer text-center">
            <a class="btn btn-primary" href="javascript:history.go(-1)">
                <i class="fas fa-undo-alt"></i>
                <?php echo app('translator')->get('receipts.back'); ?>
            </a>
            </button>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/receipt/show.blade.php ENDPATH**/ ?>