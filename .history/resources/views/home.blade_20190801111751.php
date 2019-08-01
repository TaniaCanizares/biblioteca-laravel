@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
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
        @endif


        </div>
    </div>
</div>
@endsection
