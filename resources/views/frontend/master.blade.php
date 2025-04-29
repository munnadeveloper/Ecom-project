<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-commerce Website</title>
	<!-- Pavicon ICon -->
	<link rel="shortcut icon" href="{{asset ('/frontend/') }}/assets/images/logo.png" type="image/x-icon">
@include('frontend.includes.style')

</head>
<body>
	@include('frontend.includes.header')

	<main>
        @yield('content')
	</main>

@include('frontend.includes.footer')


@include('frontend.includes.script')
</body>
</html>