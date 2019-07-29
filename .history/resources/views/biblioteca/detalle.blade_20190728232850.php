@extends('layouts.main')

@section('title', 'Detalle Libro')

<!-- @section('Nombre_Pagina')
<header>
    <h2>Ipsum Feugiat</h2>
    <p>Semper suscipit posuere apede</p>
</header> -->

@section('content')

<div class="inner">
    <header>
        <h2>Detalle del libro</h2>
    </header>
    <div class="row">
        <div class="3u 12u$(small)">
            <div class="box alt">
                <div class="image fit">
                    <img src="{{$libro->imagen}}" alt="2">
                </div>
            </div>
        </div>
        <div class="8u$ 12u$(small)">
            <table>
                <tbody>
                    <tr>
                        <td>Titulo:</td>
                        <td>{{$libro->titulo}}</td>
                    </tr>
                    <tr>
                        <td>Autor:</td>
                        <td>{{$libro->autor}}</td>
                    </tr>
                    <tr>
                        <td>Genero:</td>
                        <td>{{$libro->genero}}</td>
                    </tr>
                    <tr>
                        <td>Edicion:</td>
                        <td>{{$libro->edicion}}</td>
                    </tr>
                    <tr>
                        <td>Unidades Existentes:</td>
                        <td>{{$libro->unidades_existentes}}</td>
                    </tr>
                    <tr>
                        <td>Unidades Disponibles:</td>
                        <td>{{$libro->unidades_disponible}}</td>
                    </tr>
                    <tr>
                        <td>Reseña:</td>
                        <td>{{$libro->resena}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="6u$ 12u$(small)">
        <ul class="actions fit">
            <li><a href="{{URL::action('LibroController@edit',$libro->id_libro)}}" class="button special fit">Editar</a></li>
            <li><a href="{{URL::action('LibroController@index')}}" class="button fit">Volver</a></li>
		</ul>
    </div>  
</div>
@endsection