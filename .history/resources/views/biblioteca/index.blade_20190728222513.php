@extends('templates.main')

@section('title', 'Lista de Libros')

<!-- @section('Nombre_Pagina')
<header>
    <h2>Ipsum Feugiat</h2>
    <p>Semper suscipit posuere apede</p>
</header> -->

@section('content')
<div class="inner">
    <header>
        <h2>Biblioteca</h2>
        <p>Libros que se encuentran en el stock</p>
    </header>
    <div class="flex flex-4">
    @foreach ($libros as $lib)
        <div class="box alt">
            <div class="image fit">
                <img src="{{$lib->imagen}}" alt="4">
            </div>
            <h3>{{ $lib->titulo }}</h3>
            <p>{{ $lib->autor }}</p>
            <footer>
            <a href="{{URL::action('LibroController@show',$lib->id_libro)}}" class="button special">Ver Detalle</a>
            </footer>
        </div>
    @endforeach
    </div>
</div>
@endsection