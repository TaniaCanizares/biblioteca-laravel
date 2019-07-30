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

    <a href="{{URL::action('LibroController@show',$libro->id_libro)}}" style="color:black"><button class="button2">
                Volver</button></a>
    <div class="center">
                <form method="POST" action="/biblioteca/{{ $libro->id_libro }}">
                {{ csrf_field() }}
                <tr>
                    <td>Titulo:</td>
                    <td><input type="text" class="textbox" name="titulo" id="titulo" value="{{$libro->titulo}}"
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales"></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td><input type="text" class="textbox" name="autor" id="autor" value="{{$libro->autor}}"
                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales o numeros"></td>
                </tr>
                <tr>
                    <td>Genero:</td>
                    <td><input type="text" class="textbox" name="genero" id="genero" value="{{$libro->genero}}"
                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales o numeros"></td>
                </tr>
                <tr>
                    <td>Edicion:</td>
                    <td><input type="text" class="textbox" name="edicion" id="edicion" value="{{$libro->edicion}}"
                    pattern="[0-9]*" title="Solo se aceptan numeros"></td>
                </tr>
                <tr>
                    <td>Unidades Existentes:</td>
                    <td><input type="text" class="textbox" name="unidades_existentes" id="unidades_existentes" 
                    value="{{$libro->unidades_existentes}}" pattern="[0-9]*" title="Solo se aceptan numeros"></td>
                </tr>
                <tr>
                    <td>Unidades Disponibles:</td>
                    <td><input type="text" class="textbox" name="unidades_disponible" id="unidades_disponible" 
                    value="{{$libro->unidades_disponible}}" pattern="[0-9]*" title="Solo se aceptan numeros"></td>
                </tr>
                <tr>
                    <td>Reseña:</td>
                    <td><input type="text" class="textbox" name="resena" id="resena" value="{{$libro->resena}}"
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s.;,:-]*" title="No se aceptan caracteres especiales, solo puntuaciones como .,;"></td>
                </tr>
                <tr>
                    <td>Url imagen:</td>
                    <td><input type="text" class="textbox" name="imagen" id="imagen" value="{{$libro->imagen}}"
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s/._-]*" title="No se aceptan caracteres especiales"></td>
                </tr>
                <!-- /-._ -->
                <tr>
                    <button class="button2" style="background-color:green" type="submit">Guardar</button>
                </tr>
                </form>
    </div>
</div>
@endsection