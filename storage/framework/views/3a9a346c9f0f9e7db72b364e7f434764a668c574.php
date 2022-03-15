<?php $__env->startSection('module_name', trans('general.modules.mediator')); ?>
<?php $__env->startSection('index_route', route('mediator.index')); ?>
<?php $__env->startSection('page_type', trans('general.modules.show')); ?>
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('general.modules.mediator'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style>
        p {
            border: none !important;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('fields_content'); ?>
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.locales.show'); ?></h3>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="col form-group">
                    <label><?php echo app('translator')->get('mediator.name'); ?></label>
                    <p><?php echo e($general->name); ?></p>
                </div>
                <div class="col form-group">
                    <label><?php echo app('translator')->get('mediator.email'); ?></label>
                    <p><?php echo e($general->email); ?></p>
                </div>
                <?php if($general->mediator): ?>
                <div class="col form-group">
                    <label><?php echo app('translator')->get('mediator.code'); ?></label>
                    <p><?php echo e($general->mediator->code); ?></p>
                </div>

                <div class="col form-group">
                    <label><?php echo app('translator')->get('mediator.url'); ?></label><br>
                    <a target="_blank" href="<?php echo e($general->mediator->url); ?>">
                        <?php echo app('translator')->get('mediator.url'); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/users/show.blade.php ENDPATH**/ ?>