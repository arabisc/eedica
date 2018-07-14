<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="rtl" class="uk-background-secondary">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>{{ config('app.name', 'Eedica') }}/@yield('title')</title>
	
	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="{{ Request::url() === url('/') ? ' uk-background-secondary' : ' uk-background-muted' }}  uk-height-viewport">
	<div id="app">
		@include('partials.client.navs.topNav')
		<div class="ee-content">
			@yield('content')
		</div>
		<div class="ee-footer uk-container-expand uk-margin">
			@include('partials.client.footer')
		</div>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
	@yield('scripts')
</body>
</html>