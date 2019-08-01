@extends('layouts.main')

@section('title', 'Añadir Libro')

@section('content')
<div class="inner">
    <header class="align-center">
		<h2>Añadir Libro</h2>
    </header>
    <div class="center">
        	
    {!!Form::open(['route'=>'biblioteca.store','method'=>'POST','autocomplete'=>'off'])!!}
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="titulo" id="titulo" value="" placeholder="Título del libro" required 
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales"/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="text" name="autor" id="autor" value="" placeholder="Autor" required
                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales o numeros"/>
                    <input type="text" name="titulo" id="titulo" value="" placeholder="Título del libro" 
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s]*" title="No se aceptan caracteres especiales" required/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="text" name="autor" id="autor" value="" placeholder="Autor" required
                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*" title="Ingresa letras"/>
                </div>
                <!-- Break -->
                <div class="6u 12u$(xsmall)">
                    <div class="select-wrapper">
                        <select name="genero" id="genero" required>
                            <option value="">- Genero -</option>
                            <option value="Matemáticas">Matemáticas</option>
                            <option value="Ficcion">Ciencia Ficción</option>
                            <option value="Terror">Terror</option>
                            <option value="Programacion">Programación</option>
                            <option value="Finanzas">Finanzas</option>
                            <option value="Historia">Historia</option>
                        </select>
                    </div>
                </div>
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="edicion" id="edicion" value="" placeholder="Número de edición" 
                    pattern="[0-9]*" title="Solo se aceptan numeros">
                </div>
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="unidades_existentes" id="unidades_existentes" value="" placeholder="Unidades existentes" 
                    pattern="[0-9\s]*" title="Ingresa solamente números" required/>
                </div>
                <!-- Break -->
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="unidades_disponible" id="unidades_disponible" value="" placeholder="Unidades disponibles" 
                    pattern="[0-9\s]*" title="Ingresa solamente números" required/>
                </div>               
                <div class="6u 12u$(xsmall)">
                    <input type="text" class="textbox" name="resena" id="resena" value="" placeholder="Ingresa una breve reseña"
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s.;,:-]*" title="No se aceptan caracteres especiales, solo puntuaciones como .,;">
                        pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s.,:-]*" title="No se aceptan caracteres especiales, solo puntuaciones como .,;">
                </div>
                <div class="6u 12u$(xsmall)">
                    <input type="text" class="textbox" name="imagen" id="imagen" value="" placeholder="Ingresa la url de la imagen"
                    pattern="[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ\s/._-]*" title="No se aceptan caracteres especiales">
                </div>
                <ul class="actions">
                    <li><input type="submit" class="button special" value="Guardar" /></li>
                    <li><input type="reset" value="Limpiar" class="alt" /></li>
                </ul>
            </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection