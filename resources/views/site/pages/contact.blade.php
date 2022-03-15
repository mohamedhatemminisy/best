@extends('site.layouts.app')
@section('title', 'Contact')
@section('content')
   <!--breadcrumb-->
   @include('site.components.bredcrumb')
      <!--breadcrumb-->
      <!--contact page-->
   @if($contactSection)
      <section class="contact contact-info">
        <div class="container">
          <div class="content">
            <div class="main-title text-center pt-3">
              <h2>{{ $contactSection->name }}</h2>
              <p> {{ strip_tags($contactSection->description) }} </p>
            </div>
            <div class="row">
              <div class="col-lg-8 p-0">
                <div class="contact-form wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".2s">
                  <div id="success-msg" class="text-success hide" >
                    <h4 class="text-center"> </h4>  
                   </div>
      
                <form   id="ajaxForm">
                  @csrf
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
              <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInRight" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="media"><i class="bi bi-geo-alt"></i>
                  <div class="media-body">
                    <h5>العنوان </h5>
                    <p class="p-1"> {{settings()->address}}</p>
                  </div>
                </div>
                <div class="media"><i class="bi bi-phone"></i>
                  <div class="media-body">
                    <h5>رقم الجوال</h5>
                    <p>{{ settings()->phone }}</p>
                  </div>
                </div>
                <div class="media"><i class="bi bi-envelope"></i>
                  <div class="media-body">
                    <h5>البريد الالكتروني</h5>
                    <p> {{ settings()->po_box }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-2">
            
           <iframe src="{{settings()->map }}" width="100%" height="500" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </section>
    @endif
@endsection

 
<script src="{{ asset('site/js/jquery-3.6.0.min.js') }}"></script>
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
           url:"{{ route('contactUs') }}",
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


