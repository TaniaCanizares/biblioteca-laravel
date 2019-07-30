@extends('layouts.main')

@section('title', 'Añadir Libro')

@section('content')
<div class="inner">
    <header class="align-center">
		<h2>Añadir Libro</h2>
    </header>
    <div class="center">
        	
        <form method="post" action="/biblioteca">
            <div class="row uniform">
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="titulo" id="titulo" value="" placeholder="Título del libro" required/>
                </div>
                <div class="6u$ 12u$(xsmall)">
                    <input type="text" name="autor" id="autor" value="" placeholder="Autor" required
                    pattern="[a-zA-Z\s]*" title="Ingresa letras"/>
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
                        </select>
                    </div>
                </div>
                <div class="6u 12u$(xsmall)">
                    <input type="text" name="edicion" id="edicion" value="" placeholder="Número de edición" 
                    pattern="[0-9\s]*" title="Ingresa solamente números" required/>
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
                <div class="12u$">
                    <textarea name="resena" id="resena" placeholder="Ingresa una breve reseña" rows="3" required></textarea>
                </div>
                <div class="12u$">
                    <label class="custom-file">
                        <label for="">Selecciona una imagen</label> 
                        <input accept="image/*" type="file" id="imagen" name="imagen" class="custom-file-input" placeholde="Sube una imagen" required>             
                        @if($errors->has('imagen'))
                            <p>{{ $errors->first('imagen')}}</p> 
                        @endif
                        <span class="custom-file-control"></span>
                    </label>
                </div>

                <ul class="actions">
                    <li><input type="submit" class="button special" value="Guardar" /></li>
                    <li><input type="reset" value="Limpiar" class="alt" /></li>
                </ul>
            </form>
        </div>
    </div>
</div>
@endsection