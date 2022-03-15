<!--begin::Header-->
@include('site.layouts.header')


<!--end::Header-->
<body>
	<div class="main-wrapper">
		<div class="loader"><img src="{{ asset('site') }}/images/OFAF.gif"></div>
		<div class="loader">
		  <video width="auto" height="auto" muted autoplay loop>
			<source src="video/OFAF.webp" type="video/mp4">Your browser does not support the video tag.
		  </video>
		</div>
		@include('site.layouts.nav')
		  
			@yield('content')
		 
		 
    @include('site.layouts.footer')
	@yield('extra_js')
<!--begin::Footer-->