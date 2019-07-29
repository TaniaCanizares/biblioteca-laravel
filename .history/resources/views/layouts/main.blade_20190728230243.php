<!DOCTYPE HTML>

<html>

<head>
	<title>@yield('title')</title>
	<!-- <title>Theory by TEMPLATED</title> -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
    <script src="{{ asset('css/main.css') }}" defer></script>
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
			
		</nav>
		<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
	</div>
</header>


<!-- Mi seccion -->
<section id="main" class="wrapper">
<!-- <section id="two" class="wrapper style1 special">-->
	@yield('content')
</section>
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    <script src="{{ asset('js/jquery.min.js') }}" ></script>
    <script src="{{ asset/js/jquery.min.js }}" ></script>
    <script src="{{ asset/js/util.js }}" ></script>}

</body>

</html>