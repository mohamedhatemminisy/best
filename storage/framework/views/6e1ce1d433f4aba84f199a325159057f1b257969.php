<!--breadcrumb-->
<nav class="main-breadcrumb" aria-label="breadcrumb" style=" background-image: url('<?php echo e(asset('site/images/bgs/bredcrumb.jpg')); ?>');"  >
    <div class="container">
      <div class="breadcrumb-title">
        <h2><?php echo e($title); ?> </h2>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?> </li>
        </ol>
      </nav>
    </div>
  </nav>
  <!--breadcrumb-->
  <?php /**PATH F:\Work\best_edit\best_edit\resources\views/site/components/bredcrumb.blade.php ENDPATH**/ ?>