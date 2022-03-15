<!--begin::Header-->
<?php echo $__env->make('site.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--end::Header-->
<body>
	<div class="main-wrapper">
		<div class="loader"><img src="<?php echo e(asset('site')); ?>/images/OFAF.gif"></div>
		<div class="loader">
		  <video width="auto" height="auto" muted autoplay loop>
			<source src="video/OFAF.webp" type="video/mp4">Your browser does not support the video tag.
		  </video>
		</div>
		<?php echo $__env->make('site.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		  
			<?php echo $__env->yieldContent('content'); ?>
		 
		 
    <?php echo $__env->make('site.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('extra_js'); ?>
<!--begin::Footer--><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/site/layouts/app.blade.php ENDPATH**/ ?>