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
			<a href="{{URL::action('LibroController@index')}}">Lista de Libros</a>
			<!-- Cambiar a ruta create -->
			<a href="{{URL::action('LibroController@create')}}">Agregar Libro</a>
			<!-- Para revisar si se hace con inicio de sesion -->
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->name }} <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
		</nav>
		<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
	</div>
</header>


<!-- Mi seccion -->
<section id="main" class="wrapper">
<!-- <section id="two" class="wrapper style1 special">-->
	@yield('content')
</section>

</body>

</html>