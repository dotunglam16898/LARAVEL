<!DOCTYPE html>
<html>
<head>
	@yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		@include('backend.includes.navbar')


		@include('backend.includes.sidebar')

		<div class="content-wrapper">
			<div class="content-header">
				@yield('content-header')
			</div>


			<section class="content">
				@yield('content')
			</section>
		</div>

		@include('backend.includes.footer')
	</div>
	@yield('script')
</body>
</html>