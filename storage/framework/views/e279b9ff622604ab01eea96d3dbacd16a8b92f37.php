<?php $__env->startSection('subheader'); ?>
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-2">
        <!--begin::Page Title-->
        <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?php echo $__env->yieldContent('module_name'); ?></h5>
        <!--end::Page Title-->
        <!--begin::Actions-->
        <span class="text-muted font-weight-bold mr-4"> </span>
        <!--end::Actions-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Actions-->
        <a href="<?php echo $__env->yieldContent('index_route'); ?>" class="btn btn-clean btn-sm font-weight-bold
        font-size-base mr-1"><?php echo $__env->yieldContent('module_name'); ?></a> <span> / </span>
        <span class="btn-clean btn-sm font-weight-bold font-size-base mr-1"><?php echo $__env->yieldContent('page_type'); ?></span>
        <!--end::Actions-->

    </div>
    <!--end::Info-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-12">
        <form action="<?php echo $__env->yieldContent('store_route'); ?>" method="<?php echo $__env->yieldContent('form_type'); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card card-custom mb-5">
                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo app('translator')->get('general.data'); ?>
                    </h3>
                    <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div>
            </div>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <!--begin::Form-->
            <?php echo $__env->yieldContent('fields_content'); ?>

            </form>
            <!--end::Form-->
            <?php echo $__env->yieldContent('extra_custom_form'); ?>

    </div>

    <?php $__env->startPush('css'); ?>
    <style>
        .remove_input, .add-more-div {
            position: absolute;
            top: 0;
            left: 2px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script>
    var x = 1;
    $(document).on('click','.add-more-div',function(){
        var max_input = 9;
        var content = `
                            <div class="col-lg-2 col-xl-2 mb-5 container-div-image">
                                <div class="image-input image-input-outline" id="kt_image_${(x + 1 )}">
                                    <div class="image-input-wrapper" style="background-image: url(https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png)"></div>
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="images[]" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                </div>

                                <span class="remove_input btn btn-light-danger font-weight-bold mt-2"> - </span>
                            </div>
                        `;

        if($('.kt_image-add-more .container-div-image').length < max_input)
        {
            $('.kt_image-add-more').append(content);
            x++;
console.log($('.kt_image-add-more .container-div-image').length);
            var avatar4 = new KTImageInput('kt_image_' + x);
        }
    });
    $(document).on('click','.remove_input',function(){
        $(this).closest('.container-div-image').remove();
    })
</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/components/form.blade.php ENDPATH**/ ?>