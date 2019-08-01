<!DOCTYPE HTML>

<html>

<head>
	<title>@yield('title')</title>
	<!-- <title>Theory by TEMPLATED</title> -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Scripts -->
	{{ Html::style('assets/css/main.css') }}
    {{ Html::script('assets/js/jquery.min.js') }}
	{{ Html::script('assets/js/skel.min.js') }}
	{{ Html::script('assets/js/util.js') }}
	{{ Html::script('assets/js/main.js') }}
	<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
</head>

<body class="subpage">
<!-- Header -->
<header id="header">
	<div class="inner">
		<a href="{{URL::action('LibroController@index')}}" class="logo">Biblioteca Unicauca</a>
		<nav id="nav">
		@guest
			<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			@if (Route::has('register'))
				<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			@endif
			@else
				<a href="{{URL::action('LibroController@index')}}">Lista de Libros</a>
				<!-- Cambiar a ruta create -->
				<a href="{{URL::action('LibroController@create')}}">Agregar Libro</a>
		
				<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('Salir') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>	
		</nav>
		<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		@endguest
	</div>
</header>


<!-- Mi seccion -->
<section id="main" class="wrapper">
<!-- <section id="two" class="wrapper style1 special">-->
	@yield('content')
</section>

</body>

</html>