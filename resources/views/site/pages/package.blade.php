@extends('site.layouts.app')
@section('title', 'Package')
@section('content')
<!--breadcrumb-->
@include('site.components.bredcrumb')
  <!--breadcrumb-->
  <!--packages-->
  <section class="packages">
    <div class="container">
      <div class="main-title"><span class="top-title">choose what you want</span>
        <h2>our packages</h2>
      </div>
      <div class="content">
        <div class="row">

          @if ($package)
           
           @foreach ($package as $key => $value )
             
          
          <div class="col-lg-4 box">
            <div class="packages-box" style="background-image: url({{ asset($value->image) }});">
              <div class="type">
                <h3>{{ $value->title }}</h3>
                <p>{{ $value->description}}</p>
              </div>
              <div class="price">
                <h5 class="per">for {{ $value->duration}}</h5><span>{{ $value->price}}<sup>EGP</sup></span>
              </div>
              <div class="details">
                {!! $value->detail !!}
              </div>
              <div class="packages-btn">
                <div class="outer-btn"><a class="btn" href="#!"><span>select now</span></a></div>
              </div>
            </div>
          </div>
          @endforeach

          @endif
         
          
        </div>
      </div>
    </div>
  </section>
  <!--packages-->

@endsection()