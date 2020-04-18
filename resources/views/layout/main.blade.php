<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />



</head>
<body>
	<!--banner -->
	<div class="container-fluid">
		<div class="container">
			@include('shared.banner')
		</div>
	</div>
	<!-- menu -->
	<!--content-->
	<div class="container">
		@yield('content')
	</div>
	<!--footer-->
	<div class="container-fluid">
		<div class="container">
			@include('layout.footer')
		</div>
	</div>
	@yield('script')
</body>
</html>