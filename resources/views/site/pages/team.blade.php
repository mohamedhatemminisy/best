@extends('site.layouts.app')
@section('title', 'Team')
@section('content')
 <!--breadcrumb-->
 @include('site.components.bredcrumb')
<!--breadcrumb-->
<!--team page-->
<section class="team-in-page">
  <div class="container">
    <div class="main-title">
      <div class="side-text">transformers</div>
      <h2>our team</h2>
    </div>
    <div class="content">
      <div class="row">
         @if ($team)
          @foreach ($team as $key => $value)
            
        
         <div class="col-lg-4 col-md-6 box">
          <div class="team-box">
            <div class="image"><a href="#!"> <img class="img-fluid" data-src="{{ asset($value->image) }}" alt=""></a></div>
            <div class="details"><span class="title">{{ $value->title }}</span><a class="name" href="#!">{{ $value->name }}</a></div>
          </div>
        </div>
        @endforeach
         @endif
      </div>
    </div>
  </div>
</section>
<!--team page-->
<!--clients-->
@if (isset($clients))
@include('site.components.clients',['clients',$clients])
@endif
<!--clients-->

@endsection()