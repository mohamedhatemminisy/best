

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
                    <label><?php echo app('translator')->get('mediator.name'); ?><span class="text-danger">*</span></label>

                    <p><?php echo e($general->name); ?></p>
                </div>


                <div class="col form-group">
                    <label><?php echo app('translator')->get('mediator.code'); ?><span class="text-danger">*</span></label><br />
                    <p><?php echo e($general->code); ?></p>
                </div>
                <div class="col form-group">
                    <label><?php echo app('translator')->get('mediator.url'); ?><span class="text-danger">*</span></label><br/>
                    <a href="<?php echo e($general->url); ?>"><?php echo e($general->url); ?></a>
                </div>
                <?php if($general->phone_one): ?>
                    <div class="col form-group">
                        <label><?php echo app('translator')->get('mediator.phone_one'); ?></label><br/>
                        <a href="tel:<?php echo e($general->phone_one); ?>"><?php echo e($general->phone_one); ?></a>
                    </div>
                <?php endif; ?>
                <?php if($general->phone_two): ?>
                    <div class="col form-group">
                        <label><?php echo app('translator')->get('mediator.phone_two'); ?></label><br/>
                        <a href="tel:<?php echo e($general->phone_two); ?>"><?php echo e($general->phone_two); ?></a>
                    </div>
                <?php endif; ?>
            </div>




        </div>



    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/mediator/show.blade.php ENDPATH**/ ?>