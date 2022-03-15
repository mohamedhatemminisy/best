@extends('site.layouts.app')
@section('title', $title)
@section('content')

   @include('site.components.bredcrumb')
 
@if ($service)
<section class="about singleService">
  <div class="container">
    <div class="content">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="main-title wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <h2>{{ $service->name }}</h2>
            <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s">
              <p class="text-justify">{{ strip_tags($service->description) }}</p>
            </div>
          </div>
          <div class="btns"><a class="btn details-btn" href="{{ url('pre-order') }}">طلب خدمة<i class="bi bi-chevron-double-left"></i></a></div>
        </div>
        <div class="col-lg-6">
          <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s"><img class="img-fluid" alt="" srcset="" src="{{ asset($service->image) }}" style=""></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endif  <!--about page-->
 
@endsection()