 


<header> 
  <!--topnav -->
  <div class="top-nav"> 
    <div class="container-fluid">
      <div class="top-nav-content">
        <div class="flex-item"><a class="top-item  vertical-align-middle
          align-items-center"><i class="bi bi-geo-alt"></i>
            <p><?php echo e(settings()->address); ?></p></a><a class="top-item vertical-align-middle
            align-items-center bright" href="mailto:<?php echo e(settings()->po_box); ?>"><i class="bi bi-envelope"></i>
            <p>info@mail.com</p></a></div>
        <div class="flex-item"><a class="top-item vertical-align-middle
          align-items-center bright" href="tel:<?php echo e(settings()->phone); ?>"><i class="bi bi-phone"></i>
            <p><?php echo e(settings()->phone); ?></p></a></div>
      </div>
    </div>
  </div>
  <!--navbar desktop-->
  <nav class="navbar main-nav navbar-expand-lg">
    <div class="container-fluid"><a class="navbar-brand" href="<?php echo e(url('/')); ?>"> <img class="img-fluid" data-src="<?php echo e(asset(settings()->logo)); ?>" alt=""></a>
      <div class="group">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger-menu"><span></span><span></span><span></span></div>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?> "><a class="nav-link" aria-current="page" href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
          <li class="nav-item <?php echo e(Request::is('about') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(url('/about')); ?>">من نحن </a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> خدماتنا</a>
            <ul class="dropdown-menu">
            <?php if(getServices()): ?>  
          
               <?php $__currentLoopData = getServices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li><a class="dropdown-item" href="<?php echo e(route('service-details',$service->id)); ?>"><?php echo e($service->name); ?></a></li>
                 
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            <?php endif; ?>
            </ul>
          </li>
          <li class="nav-item <?php echo e(Request::is('pre-order') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(url('/pre-order')); ?>">طلب مبدائي    </a></li>
          <li class="nav-item <?php echo e(Request::is('contact') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(url('/contact')); ?>">تواصل معنا</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar desktop-->
  <!--side menu in mobile only-->
  <div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1" aria-labelledby="side_menu_label">
    <div class="offcanvas-header">
      <button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="navbar">
        <div class="collapsed navbar-collapse" id="navbarNavSide">
          <ul class="navbar-nav">
            <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?> "><a class="nav-link" aria-current="page" href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
            <li class="nav-item <?php echo e(Request::is('/about') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(url('/about')); ?>">من نحن </a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> خدماتنا</a>
              <ul class="dropdown-menu">
              <?php if(getServices()): ?>  
            
                 <?php $__currentLoopData = getServices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><a class="dropdown-item" href="<?php echo e(route('service-details',$service->id)); ?>"><?php echo e($service->name); ?></a></li>
                   
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              <?php endif; ?>
              </ul>
            </li>
            <li class="nav-item <?php echo e(Request::is('/pre-order') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(url('/pre-order')); ?>">طلب مبدائي    </a></li>
          <li class="nav-item <?php echo e(Request::is('/contact') ? 'active' : ''); ?>"><a class="nav-link" href="<?php echo e(url('/contact')); ?>">تواصل معنا</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header><?php /**PATH F:\Work\best_edit\best_edit\resources\views/site/layouts/nav.blade.php ENDPATH**/ ?>