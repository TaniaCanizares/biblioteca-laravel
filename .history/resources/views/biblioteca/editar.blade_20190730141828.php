@extends('layouts.main')

@section('title', 'Editar Libro')

<!-- @section('Nombre_Pagina') -->
<!-- <header>
    <h2>Ipsum Feugiat</h2>
    <p>Semper suscipit posuere apede</p>
</header> -->


@section('content')
<div class="inner">
    <header>
        <h2>Editar libro</h2>
        <p>Informacion del libro <strong>{{$libro->titulo}}</strong> para editar</p>
    </header>
    <div class="center">
        <form method="POST" action="/biblioteca/{{ $libro->id_libro }}">
        {{ csrf_field() }}
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <label for="">Título: </label>
                    <input type="text" class="textbox" name="titulo" id="titulo" value="{{$libro->titulo}}"
                        pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Autor: </label>
                    <input type="text" class="textbox" name="autor" id="autor" value="{{$libro->autor}}"
                        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales o numeros">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Genero: </label>
                    <input type="text" class="textbox" name="genero" id="genero" value="{{$libro->genero}}"
                        pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales o numeros">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Edición: </label>
                    <input type="text" class="textbox" name="edicion" id="edicion" value="{{$libro->edicion}}"
                        pattern="[0-9]*" title="Solo se aceptan numeros">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Unidades existentes: </label>
                    <input type="text" class="textbox" name="unidades_existentes" id="unidades_existentes" 
                        value="{{$libro->unidades_existentes}}" pattern="[0-9]*" title="Solo se aceptan numeros">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Unidades disponibles: </label>
                    <input type="text" class="textbox" name="unidades_disponible" id="unidades_disponible" 
                        value="{{$libro->unidades_disponible}}" pattern="[0-9]*" title="Solo se aceptan numeros">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Reseña: </label>
                    <input type="text" class="textbox" name="resena" id="resena" value="{{$libro->resena}}"
                        pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s.;,:-]*" title="No se aceptan caracteres especiales, solo puntuaciones como .,;">
                </div>
                <div class="6u 12u$(xsmall)">
                    <label for="">Url imagen: </label>
                    <input type="text" class="textbox" name="imagen" id="imagen" value="{{$libro->imagen}}"
                        pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s/._-]*" title="No se aceptan caracteres especiales">
                </div>
                <ul class="actions">
                    <li><input type="submit" class="button special" value="Guardar" /></li>
                    <li><input type="reset" value="Regresar" class="alt" href="{{URL::action('LibroController@show',$libro->id_libro)}}"/></li>
                </ul>
            </div>
        </form>
    </div>
</div>
@endsection