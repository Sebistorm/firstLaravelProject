<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <title>@yield('title')</title>
</head>
<body>

	@include('navbar')

    <div class="container">
        @yield("content")
    </div>
    
</body>
</html>
