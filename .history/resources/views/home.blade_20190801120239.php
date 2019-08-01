@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Biblioteca on-line Unicauca</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="mi-carousel" class="carousel slide">        

          <!-- Contenedor de los Slide -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{{ asset('img/articulos/'.$articulo->imagenes->first()->nombre) }}" class="img-responsive" alt="" >
            </div>
                @foreach($articulo->imagenes as $imagen)                    
                    <div class="item">
                        <img src="{{ asset('img/articulos/'.$imagen->nombre) }}" alt="" class="img-responsive">
                    </div>
                @endforeach
        </div>

          <!-- Controloles -->
          <a class="left carousel-control" href="#mi-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#mi-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente hidden-xs hidden-sd</span>
          </a>
    </div
                    <img src="/images/unicauca.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
