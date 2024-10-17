<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propietario;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propietarios= Propietario::all();// Traer la info de categoriaS, traer todos sus registros
        return view('propietario.index',['propietarios'=>$propietarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propietario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $propietario = new Propietario();
         $propietario->nombre = $request->nombre;
         $propietario->apellidos = $request->apellidos;
         $propietario->telefono = $request->telefono;
         $propietario->email = $request->email;
         $propietario->direccion = $request->direccion;
         $propietario->save();
 
         // Redirigir a la lista de propietarios
         return redirect()->route('propietarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
