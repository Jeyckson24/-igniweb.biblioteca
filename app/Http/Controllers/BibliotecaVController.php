<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;


class BibliotecaVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     
    public function index()
    {
        $libros = biblioteca::all();
        return view('bibliotecaV', compact('libros'));
        
                
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biblioteca  $biblioteca
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $libro = biblioteca::findOrFail($id);
        $libro->id_usuario = $request->id_usuario;
        $libro->save();
        return response()->json(['message' => 'Libro actualizado con éxito.']);
    }
}
