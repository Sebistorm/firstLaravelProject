<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

	@include('navbar')

    <div class="container">
        @yield("content")
    </div>
    
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
