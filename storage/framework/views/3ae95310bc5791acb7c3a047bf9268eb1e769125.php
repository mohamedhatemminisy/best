

 



<?php $__env->startSection('content'); ?>
        <div class="row justify-content-center" style="text-align: center;margin: 0 auto;">
	      <div class="page-content m-atuo text-center" style="">
		       <img style="width: 50%" src="<?php echo e(asset(settings()->logo)); ?>" class="img-fluid">
			   <h1 style="font-size: 50px"><?php echo app('translator')->get('general.hi'); ?> <?php echo e(settings()->name); ?></h1>
		   </div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/admin/index.blade.php ENDPATH**/ ?>