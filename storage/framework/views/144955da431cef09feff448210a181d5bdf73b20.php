
 
 
<?php $__env->startSection('title', 'الرئيسية'); ?>
<?php $__env->startSection('content'); ?>

  <!--main slider-->
<style>
  .bi-caret-right-fill::before
  {
    line-height: 110px;
  }
  </style>
 <!--main slider-->
<?php if($slider): ?>
<section class="main-slider">
  <div class="main-slider-carousel owl-carousel owl-theme">
    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="slider-item"><img class="img-fluid" data-src="<?php echo e(asset($slide->image)); ?>" alt="">
      <div class="item-details">
        <div class="container">
          <div class="item-text">
            <h1 class="title"><?php echo e($slide->name); ?></h1>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</section>
<?php endif; ?> 

<!--main slider-->
<!--about us-->
<?php if($about): ?>
 
<section class="about">
  <div class="container">
    <div class="content">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="main-title wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".3s"><span class="top-title"><?php echo e($about->name); ?></span>
            <h2><?php echo e(settings()->name); ?></h2>
            <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s">
              <p class="text-justify"><?php echo $about->description; ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s"><img class="img-fluid"  src="<?php echo e(asset($about->image)); ?>" alt="" srcset=""></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!--about us-->
<!--services-->
<?php if($servicesSection): ?>
<section class="services">
  <div class="container">
    <div class="main-title">
      <h2><?php echo e($servicesSection->name); ?></h2>
      <p><?php echo e($servicesSection->description); ?> </p>
    </div>
    <div class="content">
      <div class="row">
      <?php if($services): ?>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-3 col-md-6 box">
            <div class="service-box wow zoomInDown" data-wow-duration="1.3s" data-wow-delay="0s">
              <div class="image"><a href="<?php echo e(route('service-details',$service->id)); ?>"> <img class="img-fluid" data-src="<?php echo e(asset($service->image)); ?>" alt=""></a></div>
              <div class="details">
                <h3 class="title"><a href="<?php echo e(route('service-details',$service->id)); ?>"><?php echo e($service->name); ?></a></h3>
                <p><?php echo e(strip_tags($service->description)); ?> </p>
                <div class="btns"><a class="btn details-btn" href="<?php echo e(url('pre-order')); ?>">  طلب خدمة  <i class="bi bi-chevron-double-right"></i></a></div>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>  
      
       
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!--services-->
<!--why us-->
<!--why us-->
<!--contact us-->
<!--contact us-->
<!--clients-->

<section class="preOrder-section">
  <div class="container">
    <div class="c-banner">
      <div class="text-center">
        <p class="mb-5">للتمتع بخدماتنا قم بارسال طلب من خلال </p><a class="btn details-btn" href="<?php echo e(url('pre-order')); ?>">تسجيل طلبك <i class="bi bi-chevron-double-left"></i></a>
      </div>
    </div>
  </div>
</section>


<?php if($clientSection): ?>
<section class="clients">
  <div class="container">
    <div class="main-title text-center">
      <h2><?php echo e($clientSection->name); ?></h2>
      <p> <?php echo e(strip_tags($clientSection->description)); ?> </p>
    </div>
    <div class="content">
      <div class="clients-carousel owl-carousel owl-theme">
        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item"><img class="img-fluid" data-src="<?php echo e($client->logo); ?>" alt=""></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
        
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!--contact-->
<?php if($contactSection): ?>


<section class="contact">
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="col-lg-4 p-0">
          <div class="image"><img class="img-fluid" src="<?php echo e(asset($contactSection->image)); ?>" alt=""></div>
        </div>
        <div class="col-lg-8 p-0">
          <div class="contact-form wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".2s">
            <div class="main-title wow slideInUp" data-wow-duration="1.3s" data-wow-delay="0s">
              <h2>تواصل معنا</h2>
            </div>
           
                <div id="success-msg" class="text-success hide" >
                <h4 class="text-center"> </h4>  
               </div>
  
             
               
            <form   id="ajaxForm">
              <?php echo csrf_field(); ?>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group position-relative">
                    <label for="">الاسم</label>
                    <input class="form-control" type="text" placeholder="الاسم" name="name" >
                    <p class="text-danger" id="name-error"></p>

                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group position-relative">
                    <label for="">البريد الالكتروني</label>
                    <input class="form-control" type="email" placeholder="البريد الالكتروني" name="email" >
                    <p class="text-danger" id="email-error"></p>

                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group position-relative">
                    <label for="">رقم الهاتف</label>
                    <input class="form-control" type="number" placeholder="الهاتف" name="phone" >
                    <p class="text-danger" id="phone-error"></p>

                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">العنوان</label>
                    <input class="form-control" type="text" placeholder="العنوان" name="subject" >
                    <p class="text-danger" id="subject-error"></p>

                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="">الرسالة</label>
                    <textarea class="form-control" rows="5"  placeholder="الرسالة" id="message" name="message"></textarea>
                      <p class="text-danger" id="message-error"></p>

                  </div>
                </div>
              </div>
              <div class="contact-btn">
                <button class="btn" id="formBtn" type="submit">ارسال</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
 
<script src="<?php echo e(asset('site/js/jquery-3.6.0.min.js')); ?>"></script>
<script type="text/javascript">
       $(document).ready(function() {
        
        $("#formBtn").click(function(e){
          
            e.preventDefault();
            var errors = [];


            // get all form value 
            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var phone = $("input[name='phone']").val();
            var email = $("input[name='email']").val();
            var subject = $("input[name='subject']").val();
            var message = $("textarea[name='message']").val();
            
              $.ajax({
                url:"<?php echo e(route('contactUs')); ?>",
                type:"POST",
                data: {_token:_token, name:name, phone:phone, email:email, subject:subject, message:message},

                success:function(data){
                    console.log(data);

                    
           
                    if(data.success) {
 
                       $('#success-msg').removeClass('hide');
                       $('#success-msg h4').text(data.success);
                    setInterval(function(){ 
                       
                        $('#success-msg').addClass('hide');
                    }, 10000);
                     
                      
                      $("#ajaxForm")[0].reset();
                     $('.text-danger').css('display','none');


                    }
                  },
                  error: function(error) {
                    
                    errors  = error.responseJSON.errors
                   
                    console.log(errors);
                     
                     if(errors)

                     { 
                      setTimeout(() => {
                          $('.text-danger').fadeOut('fast');
                        }, 2000);

                         if(errors['name'])
                         {
                          $('#name-error').html(errors['name']).css('display','block')
                         }

                         if(errors['email'])
                         {
                          $('#email-error').html(errors['email']).css('display','block');
                         }

                         if(errors['phone'])
                         {
                          $('#phone-error').html(errors['phone']).css('display','block');
                         }

                         if(errors['subject'])
                         {
                          $('#subject-error').html(errors['subject']).css('display','block');
                         }

                         if(errors['message'])
                         {
                          $('#message-error').html(errors['message']).css('display','block');
                         }
                          
                     }   
                   
                  }
                });
        })
       });
  </script>



<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/demoyoursite/public_html/minesy/best_edit/resources/views/site/pages/home.blade.php ENDPATH**/ ?>