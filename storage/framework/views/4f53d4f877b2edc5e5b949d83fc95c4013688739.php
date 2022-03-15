<!DOCTYPE html>
<?php if(app()->getLocale() == 'ar'): ?>
<html direction="rtl" dir="rtl" style="direction: rtl" >
	<?php else: ?>
	<html direction="ltr" dir="ltr" style="direction: ltr" >
	<?php endif; ?>
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <title>الحسبة المثلى - لوحة التحكم </title>
		<!-- description -->
		
		<!-- keywords -->
		
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" />
		<!--end::Fonts-->
         <!--<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet"/>-->

        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>-->
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.js"></script>-->

          <title><?php echo $__env->yieldContent('title'); ?></title>
              <link rel="icon" href="<?php echo e(asset(settings()->logo)); ?>">

          <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>

		<?php if(app()->getLocale() == 'ar'): ?>
			<!--begin::Page Vendors Styles(used by this page)-->
			<link href="<?php echo e(asset('admin')); ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />
			<!--end::Page Vendors Styles-->
			<!--begin::Global Theme Styles(used by all pages)-->
			<link href="<?php echo e(asset('admin')); ?>/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />

			<!--end::Global Theme Styles-->
            <link href="<?php echo e(asset('admin')); ?>/assets/plugins/custom/datatables/datatables.bundle.rtl.css" rel="stylesheet" type="text/css" />

			<!--begin::Layout Themes(used by all pages)-->

			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/header/base/light.rtl.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/header/menu/light.rtl.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/brand/dark.rtl.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/aside/dark.rtl.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/new-style-ar.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('admin')); ?>/assets/date/css/bootstrap-datetimepicker.css" rel="stylesheet" />


		<?php else: ?>
			<!--begin::Page Vendors Styles(used by this page)-->
			<link href="<?php echo e(asset('admin')); ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
			<!--end::Page Vendors Styles-->
			<!--begin::Global Theme Styles(used by all pages)-->
			<link href="<?php echo e(asset('admin')); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo e(asset('admin')); ?>/assets/plugins/custom/datatables.bundle.css" rel="stylesheet" type="text/css" />
			<!--end::Global Theme Styles-->
			<!--begin::Layout Themes(used by all pages)-->
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
			<link href="<?php echo e(asset('admin')); ?>/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />


		<?php endif; ?>


		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="<?php echo e(asset('admin')); ?>/assets/css/iconpicker-1.5.0.css" rel="stylesheet" type="text/css" />
		<link  href="<?php echo e(asset('admin/assets/css/custom.css')); ?>" rel="stylesheet" type="text/css" />
		<script src="<?php echo e(asset('admin')); ?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo e(asset('admin')); ?>/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
		<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
       <link rel="icon" type="image/png" >
		<!--end::Layout Themes-->
		

        <style>
            *{
                font-family: 'Tajawal', sans-serif;
            }
        </style>
	</head>
	<!--end::Head-->
<?php /**PATH F:\Work\best_edit\best_edit\resources\views/admin/layouts/header.blade.php ENDPATH**/ ?>