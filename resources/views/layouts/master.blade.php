<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@yield('title')
		@include('layouts.head')
	</head>
	<body>
		@include('layouts.menu')
		@yield('hero')    
		@yield('content')   
		@yield('winners')
		@include('layouts.footer')
		@include('layouts.scripts')
	</body>
</html>
