

<footer>
  <div class="container">
    <div class="footer-content">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="footer-box">
            <div class="text">  <a  class="footer-logo" href="<?php echo e(url('/')); ?>">
             <img class="img-fluid mb-4" data-src="<?php echo e(asset(settings()->logo)); ?>" alt=""></a>
              <p class="text-justify"><?php echo e(strip_tags( settings()->description )); ?></p>
            </div>
            <div class="social-links">
              <div class="links"><a class="bi bi-facebook" href="<?php echo e(settings()->facebook); ?>"></a><a class="bi bi-twitter" href="<?php echo e(settings()->twitter); ?>"></a><a class="bi bi-instagram" href="<?php echo e(settings()->instagram); ?>"></a><a class="bi bi-linkedin" href="<?php echo e(settings()->linkedin); ?>"></a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-box">
            <h3>روابط الموقع</h3>

               <ul class="map-links">
              <li><a href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
              <li><a href="<?php echo e(url('/about')); ?>"> من نحن  </a></li>
              <li><a href="<?php echo e(url('/pre-order')); ?>"> طلب خدمة </a></li>
              <li><a href="<?php echo e(url('/contact')); ?>"> تواصل معنا  </a></li>


            </ul>
            </li>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="footer-box">
            <h3>خدماتنا</h3>

              <ul class="map-links">
              <?php if(getServices()): ?>

                 <?php $__currentLoopData = getServices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <li><a  href="<?php echo e(route('service-details',$service->id)); ?>"><?php echo e($service->name); ?></a></li>

                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php endif; ?>
              </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
      <div class="copy-text">
        <p><?php echo e(settings()->copyright); ?></a></p>
      </div>
    </div>
  </div>
</footer>
<!--footer part-->

<!--scripts-->
<script src="<?php echo e(asset('site')); ?>/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/jquery.lazy.min.js"></script>

<script src="<?php echo e(asset('site')); ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/wow.min.js"></script>
<script src="<?php echo e(asset('site')); ?>/js/script.js"></script>
<?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/site/layouts/footer.blade.php ENDPATH**/ ?>