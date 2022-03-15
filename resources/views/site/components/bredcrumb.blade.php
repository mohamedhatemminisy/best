<!--breadcrumb-->
<nav class="main-breadcrumb" aria-label="breadcrumb" style=" background-image: url('{{asset('site/images/bgs/bredcrumb.jpg')}}');"  >
    <div class="container">
      <div class="breadcrumb-title">
        <h2>{{ $title}} </h2>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $title}} </li>
        </ol>
      </nav>
    </div>
  </nav>
  <!--breadcrumb-->
  