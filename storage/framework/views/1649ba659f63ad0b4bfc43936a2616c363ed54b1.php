
<?php $__env->startSection('subheader'); ?>

<div class="d-flex align-items-center flex-wrap mr-2">
    <!--begin::Page Title-->
    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?php echo $__env->yieldContent('module_name'); ?></h5>
    <!--end::Page Title-->
</div>
<div class="d-flex align-items-center">
    <!--begin::Actions-->
    <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1"><?php echo app('translator')->get('general.dashboard'); ?></a> <span> / </span>
    <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1"><?php echo $__env->yieldContent('module_name'); ?></span> <span> / </span>
    <!--end::Actions-->
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-12">
    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label"><?php echo app('translator')->get('general.data'); ?>
                    <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
            </div>
           <?php if(Route::is('contact.index')): ?>
           <div class="card-toolbar">

            
        </div>
               
           <?php else: ?>
            <div class="card-toolbar">

                <!--begin::Button-->
                
                    <a href="<?php echo $__env->yieldContent('create_route'); ?>" class="btn btn-primary font-weight-bolder">
                    <i class="fas fa-plus-circle fa-sm"></i><?php echo app('translator')->get('general.add_new'); ?></a>
                
                <!--end::Button-->
            </div>
            <?php endif; ?>
        </div>
        <div class="card-body">
            <?php echo $__env->yieldContent('filters'); ?>
            <div class="table-responsive">
                <?php echo $__env->yieldContent('page_content'); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/components/index.blade.php ENDPATH**/ ?>