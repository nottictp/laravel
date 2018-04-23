<!DOCTYPE html>
<html>
<head>
	<title>Mantis DB</title>
	<!-- <link rel="stylesheet" href="/css/app.css"> -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@stack('css')
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	
</head>
<body class="text-center">
	<div class="container">
		<div class="cover-container d-flex p-3 mx-auto flex-column">
			<header class="masthead mb-auto">
				<div class="inner">
				<h3 class="masthead-brand">Web Tester</h3>
				<nav class="nav nav-masthead justify-content-center">
					@yield('nav-bar')
				</nav>
				</div>
			</header>
		</div>

		<div class="row">
			<div class='col-12' style="text-align: center; font-size: 2em;">@yield('page-title')</div>
		</div>
		<div class="row">
			@yield('content')
		</div>
	</div>

	<script src="/js/app.js" charset="utf-8"></script>
</body>
</html>