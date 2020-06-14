<!DOCTYPE html>
<html>
<head>
	@yield('css')
</head>
<body>
<div id='header'>
	@include('frontend.includes.header')
</div>

<div id="carouselBlk">
	@include('frontend.includes.carousel')
</div>

<div id="mainBody">
	@include('frontend.includes.sidebar')

	@yield('content')
</div>

<div id="footerSection">
	@include('frontend.includes.footer')
</div>

@yield('script')
</body>
</html>