@extends('site.layouts.app')
@section('title', $title)
@section('content')

   @include('site.components.bredcrumb')
 
@if ($about)
<section class="about">
  <div class="container">
    <div class="content">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="main-title wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".3s"><span class="top-title">{{ $about->name }}</span>
            <h2>{{ settings()->name }}</h2>
            <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s">
                <p class="text-justify">{!! $about->description !!}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s"><img class="img-fluid" alt="" srcset="" src="{{ $about->image }}" style=""></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endif

 
 
@if ($featuresSection)
<section class="why-us">
  <div class="container">
    <div class="main-title">
      <h2>{{ $featuresSection->name }}</h2>
      <p>{{ strip_tags($featuresSection->description) }}</p>
    </div>
    <div class="py-5 service-1">
      <div class="row justify-content-center">
        <!-- Column-->

        @foreach ($features as $feature )
        <div class="col-md-3 mr-3 wrap-service1-box service-box wow zoomInDown" data-wow-duration="1.3s" data-wow-delay="0s">
          <div class="card border-0 card-shadow mb-4">
            <div class="card-body text-center">
              <div class="my-3"><i class="{{ $feature->icon }}"></i></div>
              <h4 class="font-weight-medium">{{ $feature->name }}</h4>
              <p class="mt-3">{{ strip_tags($feature->description) }}</p>
            </div>
          </div>
        </div>
        @endforeach
       
       
      </div>
    </div>
  </div>
</section>

@endif  <!--about page-->
 
@endsection()