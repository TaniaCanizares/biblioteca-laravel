<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;
use Illuminate\Support\Facades\Validator;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view('biblioteca.index')->with('libros', $libros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biblioteca.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lib = new Libro;
        $lib->titulo = $request->get('titulo');
        $lib->autor = $request->get('autor');
        $lib->genero = $request->get('genero');
        $lib->edicion = $request->get('edicion');
        $lib->unidades_existentes = $request->get('unidades_existentes');
        $lib->unidades_disponible = $request->get('unidades_disponible');
        $lib->resena = $request->get('resena');
        $lib->imagen = $request->get('imagen');

        

        //$v = Validator::make($request->all(), [
          //'imagen' => 'mimes:jpeg,png,jpg'
        //]);
        
        //if ($v->fails())
        //{
          //  return back()->withErrors(['imagen' => ['Selecciona un archivo con formato jpg, png o jpeg']]);
            //return back()->withErrors('error','Item created successfully!');
        //}
        $lib->save();
        $libros = Libro::all();
        return view('biblioteca.index')->with('libros', $libros);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::find($id);
        return view('biblioteca.detalle')->with('libro', $libro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        return view('biblioteca.editar')->with('libro', $libro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro = Libro::find($id);
        $libro->titulo = $request->get('titulo');
        $libro->autor = $request->get('autor');
        $libro->genero = $request->get('genero');
        $libro->edicion = $request->get('edicion');
        $libro->unidades_existentes = $request->get('unidades_existentes');
        $libro->unidades_disponible = $request->get('unidades_disponible');
        $libro->resena = $request->get('resena');
        $libro->imagen = $request->get('imagen');

        $libro->save();
        
        // $libros = Libro::all();
        return view('biblioteca.detalle')->with('libro', $libro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}